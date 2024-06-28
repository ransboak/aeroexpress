<?php

namespace App\Http\Controllers;

use App\Models\CustShipment;
use App\Models\Notification;
use App\Models\Package;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipmentController extends Controller
{
    //
    public function addShipment(Request $request, Package $package)
    {

        $request->validate([
            'tracking_number' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        

        if($request->status == 'Pending'){
            return redirect()->back();
        }

        $shipment_exists = Shipment::where('custshipment_id', $package->custshipment_id)->first();
            if(!$shipment_exists || $shipment_exists->in_transit){
                $shipment = Shipment::create([
                    'custshipment_id' => $package->custshipment_id,
                    'user_id' => $package->custshipment->user_id,
                ]);

                $package->update([
                    'shipment_id' => $shipment->id,
                    'status' => $request->status
                ]);
            }else{
                $package->update([
                    'shipment_id' => $shipment_exists->id,
                    'status' => $request->status
                ]);
            }
        
            Notification::create([
                'user_id' => $package->custshipment->user_id,
                'type' => 'shipmentAdded',
                'message' => 'New shipment added',
            ]);

            

        return redirect()->back()->with('success', 'Shipment added successfully');
    }

    public function pendingShipment(Request $request)
    {
        $request->validate([
            'tracking_number' => 'string|max:255',
            'packages' => 'required|array|min:1',
            'packages.*.description' => 'required|string|max:255',
            'packages.*.tracking_number' => 'required|string|max:255',
        ]);

        $custshipment = CustShipment::create([
            'user_id' => Auth::user()->id,
            'tracking_number' => $request->input('tracking_number'),
        ]);

        Notification::create([
            'user_id' => Auth::user()->id,
            'type' => 'shipmentAdded',
            'message' => 'New shipment added',
        ]);

        foreach ($request->input('packages', []) as $package) {
            Package::create([
                'custshipment_id' => $custshipment->id,
                'description' => $package['description'],
                'tracking_number' => $package['tracking_number'],
            ]);
        }

        return redirect()->route('pending.shipments')->with('success', 'Shipment added successfully');
    }

}

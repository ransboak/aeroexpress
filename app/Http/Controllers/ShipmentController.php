<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Package;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipmentController extends Controller
{
    //
    public function addShipment(Request $request){
        
        $shipment_id = time().mt_rand(100, 999);
        $shipment = Shipment::create([
            'id' => $shipment_id,
            'user_id' => Auth::user()->id,
            'tracking_number' => $request->input('tracking_number'),
        ]);

        Notification::create([
            'user_id' => Auth::user()->id,
            'type'=> 'shipmentAdded',
            'message' => 'New shipment added'
        ]);

        

        foreach ($request->input('packages', []) as $package) {
            $package_id = time().mt_rand(100, 999);
            Package::create([
                'id' => $package_id,
                'shipment_id' => $shipment_id,
                'description' => $package['description'],
            ]);
        }

        return redirect()->route('shipments')->with('success', 'Shipment added successfully');
    }
}

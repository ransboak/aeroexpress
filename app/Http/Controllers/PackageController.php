<?php

namespace App\Http\Controllers;

use App\Models\CustShipment;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function addPackage(Request $request, CustShipment $shipment)
    {
        try {
            $request->validate([
                'tracking_number' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);
            $package = Package::create([
                'custshipment_id' => $shipment->id,
                'description' => $request->description,
                'tracking_number' => $request->tracking_number,
            ]);

            if (!$package) {
                return redirect()->back()->with('error', 'Failed to add package');
            }

            return redirect()->back()->with('success', 'New package added successfully');

        } catch (\Exception $e) {
           return redirect()->back()->with('error', 'An error occured please try again later');
        }
        

    }
    // public function updatePackage(Request $request, Package $package)
    // {
    //     try {
    //         $request->validate([
    //             'tracking_number' => 'required|string|max:255',
    //             'description' => 'required|string|max:255',
    //         ]);
    //         $package = Package::create([
    //             'custshipment_id' => $shipment->id,
    //             'description' => $request->description,
    //             'tracking_number' => $request->tracking_number,
    //         ]);

    //         if (!$package) {
    //             return redirect()->back()->with('error', 'Failed to add package');
    //         }

    //         return redirect()->back()->with('success', 'New package added successfully');

    //     } catch (\Exception $e) {
    //        return redirect()->back()->with('error', 'An error occured please try again later');
    //     }
        

    // }
}

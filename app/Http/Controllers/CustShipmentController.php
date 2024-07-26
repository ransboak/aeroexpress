<?php

namespace App\Http\Controllers;

use App\Models\CustShipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CustShipmentController extends Controller
{
    //
    public function data(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $shipments = CustShipment::withCount('user', 'packages')->latest()->get();
        }else{
            $shipments = CustShipment::withCount('packages')->where('user_id', $user->id)->latest()->get();
        }
        return DataTables::of($shipments)
        ->addColumn('shipment_id', function ($shipment) {
            return '<a href="'.route('pending.packages', $shipment->id).'">#AE'.$shipment->id.'</a>';
        })
        ->addColumn('packages_count', function ($shipment) {
            // Return the count of packages
            return $shipment->packages_count;
        })
        ->editColumn('status', function ($shipment) {
            if ($shipment->status == 'Pending') {
                return '<span class="badge badge-pill badge-warning">Pending</span>';
            } else {
                return '<span class="badge badge-pill badge-success">'.$shipment->status.'</span>';
            }
        })
        ->rawColumns(['shipment_id', 'status'])
        ->make(true);
    }
}

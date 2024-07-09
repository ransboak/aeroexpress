<?php

namespace App\Observers;

use App\Models\Shipment;

class ShipmentObserver
{
    /**
     * Handle the Shipment "created" event.
     */
    public function created(Shipment $shipment): void
    {
        //
        $shipment->packages()->update(['status' => 'Received']);
    }

    /**
     * Handle the Shipment "updated" event.
     */
    public function updated(Shipment $shipment): void
    {
        //
        if ($shipment->status == 'In Transit') {
            $shipment->packages()->update(['status' => 'In Transit']);
        }
        elseif ($shipment->status == 'Delivered') {
            $shipment->packages()->update(['status' => 'Delivered']);
        }
        elseif ($shipment->status == 'Ready') {
            $shipment->packages()->update([
                'arrived' => true,
                'status' => 'Ready',
            ]);
        }
    }

    /**
     * Handle the Shipment "deleted" event.
     */
    public function deleted(Shipment $shipment): void
    {
        //
    }

    /**
     * Handle the Shipment "restored" event.
     */
    public function restored(Shipment $shipment): void
    {
        //
    }

    /**
     * Handle the Shipment "force deleted" event.
     */
    public function forceDeleted(Shipment $shipment): void
    {
        //
    }
}

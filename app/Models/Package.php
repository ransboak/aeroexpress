<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

 protected $fillable = ['shipment_id', 'description', 'price', 'weight', 'status', 'arrival_status'];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

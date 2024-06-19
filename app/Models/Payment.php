<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keytype = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'user_id', 'shipment_id', 'package_id', 'amount', 'payment_method', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keytype = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
       'id', 'tracking_number', 'user_id', 'price', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}

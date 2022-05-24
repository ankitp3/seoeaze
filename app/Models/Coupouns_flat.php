<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupouns_flat extends Model
{
    protected $fillable = [
        'percent',
        'coupon_name',
        'coupon_percent',
        'coupon_flat',
        'coupon_minimal_amount',
        'coupon_code',
        'expiry_date'
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupons_flat extends Model
{
    protected $fillable = [
        'percent',
        'coupon_name',
        'coupon_percent',
        'coupon_flat',
        'coupon_minimal_amount'
    ];


}

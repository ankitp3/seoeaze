<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'percent',
        'coupon_name',
        'coupon_code'
    ];


    public function coupons(){
        return $this->belongsTo('App\Models\Plan');
    }
}

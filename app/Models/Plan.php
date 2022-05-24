<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected  $fillable = [
        'amount',
        'plan_name',
        'coupoun_id',
        'all_plan_id',
        'option',
        'coupon_name',
        'coupon_percent',
        'popular_and_not_available'

    ];

    protected $hidden = [
        '_token'
    ];

    public function coupons(){
        return $this->hasOne('App\\Models\\Coupon');
    }

    public function All_plans(){
        return $this->belongsTo('App\\Models\\All_plan');
    }
}

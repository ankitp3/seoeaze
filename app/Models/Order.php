<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $fillable = [
        'service_name',
        'user_id',
        'plan_name',
        'order_status',
        'order_info',
        'content_preview_status',
        'other_details',
        'qty',
        'sample_report',
        'order_id',
        'price',
        'order_efit_status'
    ];


}
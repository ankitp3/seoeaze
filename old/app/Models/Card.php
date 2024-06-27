<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected  $fillable = [
        'amount',
        'email_acounts',
        'website_layout',
        'photo_stock_banner',
        'plan_name',
        'token',
        'count',
        'product_id'
    ];
}

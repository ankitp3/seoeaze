<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    
    protected  $fillable = [
        'user_id',
        'order_id'
    ];
}
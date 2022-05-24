<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderCount extends Model
{

    protected $table = 'orders_counts';

    protected  $fillable = [
        'number',
    ];
}
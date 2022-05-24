<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected  $fillable =
        [
            'amount',
            'qty',
            'item',
            'user_id',
            'invoice_no',
            'payed',
            'email',
            'crypted',
            'service_name',
            'message'
        ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Get_a_quote extends Model
{
    protected  $fillable = [
        'first_name',
        'email',
        'phone',
        'company_website',
        'mountly_spending',
        'comments',
        'options'
    ];
}
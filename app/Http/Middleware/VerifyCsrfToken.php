<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'update_shoping_card',
        'update_shoping_card_count',
        'add_new_coupons',
        'save_total',
        'dashboard/change_user_status',
        'dashboard/createAFile',
        '/dashboard/editServices',
        '/dashboard/add_coupon_new',
        '/dashboard/edit_coupons',
        'check_coupon',
        '/dashboard/update_info',
        '/dashboard/change_order_status',
        '/dashboard/change_user_role',
        '/dashboard/update_user_info',
        '/dashboard/get_plans_json',
        '/dashboard/change_a_quote',
        '/dashboard/get_service_plan_name'
    ];
}

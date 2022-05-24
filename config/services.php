<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'paypal' => [
        'client_id' => 'Ac0ynIquOafOmLn51TEy7rVtxANUsPO3YZt08v3XC6kD5Ykh5Q7U9Ra7sKdtyk-9rLhqBA-187vTtcvb',
        'secret' => 'ENO42piKKHmGg3BcusOOB9mTntwaBdRTvVf5xLuXlsHPBmRJNq1obWWFLaaTPtw6HouxmfCm5ma0H_yH'
    ],

];

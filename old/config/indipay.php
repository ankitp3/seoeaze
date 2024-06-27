<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Indipay Service Config
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo
    |   view    = File
    */

    'gateway' => 'PayUMoney',                // Replace with the name of default gateway you want to use

    'testMode'  => false,                   // True for Testing the Gateway [For production false]

    'ccavenue' => [                         // CCAvenue Parameters
        'merchantId'  => env('INDIPAY_MERCHANT_ID', ''),
        'accessCode'  => env('INDIPAY_ACCESS_CODE', ''),
        'workingKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'payment/status'),
        'cancelUrl' => env('INDIPAY_CANCEL_URL', 'payment/status'),

        'currency' => env('INDIPAY_CURRENCY', 'INR'),
        'language' => env('INDIPAY_LANGUAGE', 'EN'),
    ],

    'payumoney' => [                         // PayUMoney Parameters
        'merchantKey'  => env('INDIPAY_MERCHANT_KEY', 'yAaTV0Qg'),
        'salt'  => env('INDIPAY_SALT', 'kbvsBBOiFY'),
        'workingKey' => env('INDIPAY_WORKING_KEY', 'DmCCcgSoQY9F3ipXGW7Q2QQpSuEIXHkrMWkT1d9HzZw='),

        // Should be route address for url() function
        'successUrl' => env('INDIPAY_SUCCESS_URL', 'payment/status'),
        'failureUrl' => env('INDIPAY_FAILURE_URL', 'payment/status'),
    ],

    'ebs' => [                         // EBS Parameters
        'account_id'  => env('INDIPAY_MERCHANT_ID', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'return_url' => env('INDIPAY_SUCCESS_URL', 'payment/status'),
    ],

    'citrus' => [                         // Citrus Parameters
        'vanityUrl'  => env('INDIPAY_CITRUS_VANITY_URL', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'returnUrl' => env('INDIPAY_SUCCESS_URL', 'payment/status'),
        'notifyUrl' => env('INDIPAY_SUCCESS_URL', 'payment/status'),
    ],

    'instamojo' =>  [
        'api_key' => env('INSTAMOJO_API_KEY',''),
        'auth_token' => env('INSTAMOJO_AUTH_TOKEN',''),
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'payment/status'),
    ],

    // Add your response link here. In Laravel 5.2 you may use the api middleware instead of this.
    'remove_csrf_check' => [
        'payment/status'
    ],





];

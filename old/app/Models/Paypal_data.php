<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paypal_data extends Model
{
    protected  $fillable = [
        'SUCCESSPAGEREDIRECTREQUESTED',
        'ACK',
        'CORRELATIONID',
        'TIMESTAMP',
        'VERSION',
        'BUILD',
        'INSURANCEOPTIONSELECTED',
        'SHIPPINGOPTIONISDEFAULT',
        'PAYMENTINFO_0_FEEAMT',
        'PAYMENTINFO_0_TAXAMT',
        'PAYMENTINFO_0_PENDINGREASON',
        'PAYMENTINFO_0_REASONCODE',
        'PAYMENTINFO_0_TRANSACTIONID',
        'PAYMENTINFO_0_TRANSACTIONTYPE',
        'PAYMENTINFO_0_PROTECTIONELIGIBILITY',
        'PAYMENTINFO_0_PROTECTIONELIGIBILITYTYPE',
        'PAYMENTINFO_0_SECUREMERCHANTACCOUNTID',
        'PAYMENTINFO_0_PAYMENTTYPE',
        'PAYMENTINFO_0_ORDERTIME',
        'PAYMENTINFO_0_AMT',
        'PAYMENTINFO_0_CURRENCYCODE',
        'PAYMENTINFO_0_PAYMENTSTATUS',
        'PAYMENTINFO_0_ERRORCODE',
        'PAYMENTINFO_0_ACK',
        'user_id'
    ];
}
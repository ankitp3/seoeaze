<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaypalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TOKEN');
            $table->string('SUCCESSPAGEREDIRECTREQUESTED');
            $table->string('ACK');
            $table->string('CORRELATIONID');
            $table->string('TIMESTAMP');
            $table->string('VERSION');
            $table->string('BUILD');
            $table->string('INSURANCEOPTIONSELECTED');
            $table->string('SHIPPINGOPTIONISDEFAULT');
            $table->string('PAYMENTINFO_0_FEEAMT');
            $table->string('PAYMENTINFO_0_TAXAMT');
            $table->string('PAYMENTINFO_0_PENDINGREASON');
            $table->string('PAYMENTINFO_0_REASONCODE');
            $table->string('PAYMENTINFO_0_TRANSACTIONID');
            $table->string('PAYMENTINFO_0_TRANSACTIONTYPE');
            $table->string('PAYMENTINFO_0_PROTECTIONELIGIBILITY');
            $table->string('PAYMENTINFO_0_PROTECTIONELIGIBILITYTYPE');
            $table->string('PAYMENTINFO_0_SECUREMERCHANTACCOUNTID');
            $table->string('PAYMENTINFO_0_PAYMENTTYPE');
            $table->string('PAYMENTINFO_0_ORDERTIME');
            $table->string('PAYMENTINFO_0_AMT');
            $table->string('PAYMENTINFO_0_CURRENCYCODE');
            $table->string('PAYMENTINFO_0_PAYMENTSTATUS');
            $table->string('PAYMENTINFO_0_ERRORCODE');
            $table->string('PAYMENTINFO_0_ACK');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paypal_datas');
    }
}

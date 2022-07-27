<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_payment', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->string('payment_method');
            $table->string('card_number');
            $table->dateTime('date')->nullable();
            $table->string('security_code')->nullable();
            $table->string('card_name')->nullable();
            $table->integer('card_type')->nullable();
            $table->integer('expiration_month')->nullable();
            $table->integer('expiration_year')->nullable();
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
        Schema::dropIfExists('tbl_payment');
    }
}

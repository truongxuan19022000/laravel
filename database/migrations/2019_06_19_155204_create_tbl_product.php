<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('product_name');
            $table->string('product_sold');
            $table->bigInteger('product_quantity');
            $table->integer('category_id');
            $table->string('expirationDate');
            $table->text('product_desc')->nullable();
            $table->text('product_content')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_image')->nullable();
            $table->integer('product_status');
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
        Schema::dropIfExists('tbl_product');
    }
}

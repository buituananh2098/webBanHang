<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('address_id')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('birth_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('customer_address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->string('payment_firstname');
            $table->string('payment_lastname');
            $table->string('payment_phone');
            $table->string('payment_address');
            $table->string('payment_district')->nullable();
            $table->string('payment_province');
            $table->string('payment_nation');
            $table->string('delivery_firstname');
            $table->string('delivery_lastname');
            $table->string('delivery_phone');
            $table->string('delivery_address');
            $table->string('delivery_district')->nullable();
            $table->string('delivery_province');
            $table->string('delivery_nation');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
        Schema::dropIfExists('customer_address');
    }
}

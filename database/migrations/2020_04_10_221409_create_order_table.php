<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('customer_name');
            $table->string('customer_phone_number');
            $table->string('customer_email');
            $table->string('customer_address')->nullable();
            $table->integer('status')->nullable();
            $table->integer('status_payment')->nullable();
            $table->integer('status_ship')->nullable();
            $table->text('description')->nullable();
            $table->integer('payment_method');
            $table->bigInteger('discount_id')->nullable();
            $table->integer('order_number')->nullable();
            $table->string('total_price')->nullable();
            $table->string('money_deposit')->nullable();
            $table->tinyInteger('state')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('customers');
        });

        Schema::create('order_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->string('product_name')->nullable();
            $table->string('product_code')->nullable();
            $table->string('reward_points')->nullable();
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->integer('amount')->default(0)->nullable();
            $table->string('tax')->nullable();
            $table->string('discount')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}

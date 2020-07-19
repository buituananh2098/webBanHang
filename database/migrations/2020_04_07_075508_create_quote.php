<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->string('shipment')->nullable();
            $table->string('total')->nullable();
            $table->integer('quote_number')->nullable();
            $table->string('ip_location')->nullable();
            $table->string('quotes_code')->nullable();
            $table->string('discount')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('customers');
        });

        Schema::create('quote_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quote_id');
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

            $table->foreign('quote_id')->references('id')->on('quotes');
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
        Schema::dropIfExists('quote');
    }
}

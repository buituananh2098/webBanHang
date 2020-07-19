<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('reward_points')->nullable();
            $table->string('cost')->nullable();
            $table->string('quantity')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('state')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->text('info_detail')->nullable();
            $table->text('salient_features')->nullable();
            $table->text('introductions')->nullable();
            $table->text('production_process')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::create('category_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('product_id')->unsigned();
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('details');
    }
}

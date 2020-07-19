<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Discount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code'); // mã giảm giá
            $table->text('description')->nullable(); // mô tả về mã
            $table->tinyInteger('type_discount'); //kiểu mã : tiền - phần trăm
            $table->bigInteger('value_discount')->default(0); // giá trị giảm
            $table->dateTime('start_date')->nullable(); //ngày bắt đầu
            $table->dateTime('expired_date')->nullable(); // ngày hết hạn
            $table->bigInteger('quantity')->nullable(); //so luong
            $table->unsignedBigInteger('created_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount');
    }
}

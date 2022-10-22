<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('orderId');
            $table->integer('quantity')->unsigned();
            $table->timestamps();
        });


        // Schema::table('carts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('orderId');
        //     $table->foreign('orderId')->references('id')->on('orders')->onDelete('cascade');
        // });
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('productsId');
            $table->foreign('productsId')->references('products_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};

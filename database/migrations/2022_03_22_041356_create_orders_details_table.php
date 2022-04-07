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

        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();

            $table->integer('products_quantity');
            $table->integer('products_price');

            $table->timestamps();
        });

        Schema::table('orders_details', function (Blueprint $table) {
        $table->unsignedBigInteger('orders_id')->unique();
            $table->foreign('orders_id')->references('orders_id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('products_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_details');
    }
};

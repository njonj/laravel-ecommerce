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
        // Schema::drop('sales');
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');


            $table->timestamps();
        });

        Schema::table('sales', function (Blueprint $table) {
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('products_id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('vendors_id');
            $table->foreign('vendors_id')->references('vendors_id')->on('vendors')->onDelete('cascade');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};

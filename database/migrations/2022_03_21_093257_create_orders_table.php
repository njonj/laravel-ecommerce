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




        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('products_name')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
        });

        Schema::table('orders', function(Blueprint $table){
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.p
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

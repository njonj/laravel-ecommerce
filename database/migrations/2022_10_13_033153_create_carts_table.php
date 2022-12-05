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
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('products_name')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();




            // $table->unsignedBigInteger('productsId');
            // $table->unsignedBigInteger('orderId')->nullable();
            $table->unsignedBigInteger('userId')->nullable();
            // $table->float('price');
            // $table->enum('status',['new','progress','delivered','cancel'])->default('new');
            // $table->integer('quantity');
            // $table->float('amount');
            // $table->foreign('productsId')->references('products_id')->on('products')->onDelete('CASCADE');
            $table->foreign('userId')->references('id')->on('users')->onDelete('CASCADE');
            // $table->foreign('orderId')->references('id')->on('orders')->onDelete('SET NULL');
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
        Schema::dropIfExists('carts');
    }
};

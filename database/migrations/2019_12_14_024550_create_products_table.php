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


        // Schema::drop('products');

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('products_id');
            $table->string('products_name');
            $table->string('products_price');
            $table->integer('products_quantity');
            $table->text('products_description');
            $table->string('products_image');


            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('categories_id')->on('categories')->onDelete('cascade');
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
    }
};

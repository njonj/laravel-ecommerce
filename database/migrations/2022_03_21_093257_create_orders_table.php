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
            $table->bigIncrements('orders_id');
            $table->string('orders_total');
            $table->date('orders_date');

            $table->date('shipping_date');
            $table->boolean('is_delivered');

            $table->timestamps();
        });

        Schema::table('orders', function(Blueprint $table){
            $table->unsignedBigInteger('customers_id');
            $table->foreign('customers_id')->references('customers_id')->on('customers')->onDelete('cascade');
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

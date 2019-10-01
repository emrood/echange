<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('rate_history', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->bigInteger('currency_id')->unsigned();
//            $table->foreign('currency_id')->references('id')->on('currencies');
//            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->double('sales_rate');
//            $table->double('purchase_rate');
//            $table->date('date');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_history');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashFundCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_fund_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_fund_uid', 400);
            $table->integer('cash_fund_id')->unsigned();
//            $table->foreign('cash_fund_uid')->references('uid')->on('cash_funds');
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->double('amount')->default(0);
            $table->date('date');
            $table->softDeletes();
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
        Schema::dropIfExists('cash_fund_currencies');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('from_currency_id')->unsigned();
            $table->bigInteger('to_currency_id')->unsigned();
            $table->foreign('from_currency_id')->references('id')->on('currencies');
            $table->foreign('to_currency_id')->references('id')->on('currencies');
            $table->double('amount_received');
            $table->double('given_amount');
            $table->double('rate_used');
            $table->boolean('candeled')->default(false);
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
        Schema::dropIfExists('changes');
    }
}

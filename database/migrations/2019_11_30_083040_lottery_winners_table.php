<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LotteryWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_winners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('draw_id');
            $table->foreign('draw_id')->references('id')->on('lottery_draws')->onDelete('cascade');
            $table->unsignedBigInteger('customer_scratchcard_id');
            $table->foreign('customer_scratchcard_id')->references('id')->on('customer_scratchcards')->onDelete('cascade');
            $table->double('winning_amount');
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
        Schema::dropIfExists('lottery_winners');
    }
}

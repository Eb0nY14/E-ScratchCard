<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: 2019_11_29_082910_lottery_draws_table.php
DATE: 12 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE database/migrations FOLDER AND IS WRITTEN TO CREATE "LOTTERY DRAWS" TABLE AND SPECIFY ITS STRUCTURE. THE "up" FUNCTION IN THE CODE 
IS GENERALLY USED TO CREATE NEW TABLES AND FIELDS IN THE DATABASE WHILE THE "down" function IS USED TO UNDO WHAT THE "up" function HAS DONE.  IN THIS CASE, "up" 
IS USED TO CREATE "LOTTERY DRAWS" TABLE WHILE "down" IS USED TO DELETE IT IF IT ALREADY EXISTS.       

-->


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LotteryDrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_draws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lottery_id');
            $table->foreign('lottery_id')->references('id')->on('lotteries')->onDelete('cascade');
            $table->dateTime('draw_date');
            $table->double('jackpot_amount');
            $table->string('winning_code')->nullable();
            $table->string('status')->default('open');
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
        Schema::dropIfExists('lottery_draws');
    }
}

<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: 2019_11_30_083040_lottery_winners_table.php
DATE: 12 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE database/migrations FOLDER AND IS WRITTEN TO CREATE "LOTTERY WINNERS" TABLE AND SPECIFY ITS STRUCTURE. THE "up" FUNCTION IN THE CODE 
IS GENERALLY USED TO CREATE NEW TABLES AND FIELDS IN THE DATABASE WHILE THE "down" function IS USED TO UNDO WHAT THE "up" function HAS DONE.  IN THIS CASE, "up" 
IS USED TO CREATE "LOTTERY WINNERS" TABLE WHILE "down" IS USED TO DELETE IT IF IT ALREADY EXISTS.       

-->


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

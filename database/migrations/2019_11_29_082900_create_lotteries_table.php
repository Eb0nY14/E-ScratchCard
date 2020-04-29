<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: 2019_11_29_082900_create_lotteries_table.php
DATE: 12 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE database/migrations FOLDER AND IS WRITTEN TO CREATE LOTTERIES TABLE AND SPECIFY ITS STRUCTURE. THE "up" FUNCTION IN THE CODE 
IS GENERALLY USED TO CREATE NEW TABLES AND FIELDS IN THE DATABASE WHILE THE "down" function IS USED TO UNDO WHAT THE "up" function HAS DONE.  IN THIS CASE, "up" 
IS USED TO CREATE LOTTERIES TABLE WHILE "down" IS USED TO DELETE IT IF IT ALREADY EXISTS.       

-->


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotteries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lottery_name');
            $table->string('lottery_logo');
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
        Schema::dropIfExists('lotteries');
    }
}

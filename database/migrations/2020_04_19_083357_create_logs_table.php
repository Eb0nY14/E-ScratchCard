<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: 2020_04_19_083357_create_logs_table.php
DATE: 12 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE database/migrations FOLDER AND IS WRITTEN TO CREATE LOGS TABLE AND SPECIFY ITS STRUCTURE. THE "up" FUNCTION IN THE CODE 
IS GENERALLY USED TO CREATE NEW TABLES AND FIELDS IN THE DATABASE WHILE THE "down" function IS USED TO UNDO WHAT THE "up" function HAS DONE.  IN THIS CASE, "up" 
IS USED TO CREATE LOGS TABLE WHILE "down" IS USED TO DELETE IT IF IT ALREADY EXISTS.       

-->


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('log_type');
            $table->string('activity');
            $table->string('user_ip');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('logs');
    }
}

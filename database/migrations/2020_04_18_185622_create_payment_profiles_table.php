<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: 2020_04_18_185622_create_payment_profiles_table.php
DATE: 12 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE database/migrations FOLDER AND IS WRITTEN TO CREATE "PAYMENT PROFILES" TABLE AND SPECIFY ITS STRUCTURE. THE "up" FUNCTION IN THE CODE 
IS GENERALLY USED TO CREATE NEW TABLES AND FIELDS IN THE DATABASE WHILE THE "down" function IS USED TO UNDO WHAT THE "up" function HAS DONE.  IN THIS CASE, "up" 
IS USED TO CREATE "PAYMENT PROFILES" TABLE WHILE "down" IS USED TO DELETE IT IF IT ALREADY EXISTS.       

-->




<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('preferred_bank_account_number');
            $table->string('preferred_bank_account_name');
            $table->string('preferred_bank_name');
            $table->string('means_of_identification');
            $table->string('id_card_number');
            $table->string('id_expiry_date');
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
        Schema::dropIfExists('payment_profiles');
    }
}

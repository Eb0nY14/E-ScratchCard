<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: 2019_11_30_082705_customer_payments_table.php
DATE: 12 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE database/migrations FOLDER AND IS WRITTEN TO CREATE "CUSTOMER PAYMENTS" TABLE AND SPECIFY ITS STRUCTURE. THE "up" FUNCTION IN THE CODE 
IS GENERALLY USED TO CREATE NEW TABLES AND FIELDS IN THE DATABASE WHILE THE "down" function IS USED TO UNDO WHAT THE "up" function HAS DONE.  IN THIS CASE, "up" 
IS USED TO CREATE "CUSTOMER PAYMENTS" TABLE WHILE "down" IS USED TO DELETE IT IF IT ALREADY EXISTS.       

-->


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('payment_date');
            $table->string('status');
            $table->string('reference');
            $table->double('amount');
            $table->string('mode_of_payment');
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
        Schema::dropIfExists('customer_payments');
    }
}

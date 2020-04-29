<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: LotteryWinners.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE LotteryWinners.php FILE IN THE Models FOLDER IS TIED TO THE "LOTTERY WINNERS"
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "LOTTERY WINNERS" TABLE IN THE DATABASE.

-->


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryWinners extends Model
{
    protected $table='lottery_winners';
    protected $fillable=['draw_id','customer_scratchcard_id','winning_amount'];
}

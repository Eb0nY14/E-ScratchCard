<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: CustomerScratchcard.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE CustomerScratchcard.php FILE IN THE Models FOLDER IS TIED TO THE
"CUSTOMER SCRATCHCARD" TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "CUSTOMER SCRATCHCARD" TABLE IN THE DATABASE.    

 -->
 
 
 <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerScratchcard extends Model
{
    protected $table='customer_scratchcards';
    protected $fillable=['user_id','n1','n2','n3','n4','n5','n6','lottery_draw_id','payment_id','status'];
}

<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: Syslog.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCITECTURE.  THE Syslog.php FILE IN THE Models FOLDER IS TIED TO THE "SYSTEM LOG"
TABLE IN THE DATABASE AND IS CALLED WHENEVER THE CONTROLLER WANTS TO PERFORM ANY CRUD OPERATION ON "SYSTEM LOG" TABLE IN THE DATABASE.

-->
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syslog extends Model
{
    protected $table='logs';
    protected $fillable=['log_type','user_ip','activity','user_id'];

}

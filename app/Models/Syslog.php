<!--
AUTHOR: CHRISTIANA TEMIOLA
CODE TITLE: Syslog.php
DATE: 08 DECEMBER 2019

PURPOSE: THIS PHP FILE IS LOCATED IN THE Models FOLDER AND FORMS PART OF THE MVC ARCHITECTURE.  THE Syslog.php FILE IN
THE Models FOLDER IS TIED TO THE "logs" TABLE IN THE DATABASE AND IS CALLED WHEN THERE IS ANY CRUD OPERATION TO BE 
PERFORMED ON "logs" TABLE IN THE DATABASE.

-->
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syslog extends Model
{
    protected $table='logs';
    protected $fillable=['log_type','user_ip','activity','user_id'];

}

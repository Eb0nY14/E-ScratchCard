<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syslog extends Model
{
    protected $table='logs';
    protected $fillable=['log_type','user_ip','activity','user_id'];

}

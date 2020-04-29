<!--
AUTHOR: LARAVEL FRAMEWORK 
CODE TITLE:DatabaseSeeder.php
DATE: 18 DECEMBER 2019

PURPOSE: THIS IS A SEED FILE FROM LARAVEL BUT WAS MODIFIED TO PRE-POPULATE THE DATABASE WITH THE INITIAL VALUES NEEDED FOR THE APPLICATION TO RUN FOR THE FIRST TIME.  
IT IS LOCATED IN THE database/seeds FOLDER.      

-->


<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()     
    {
         $this->call(UsersTableSeeder::class); 
    }
}

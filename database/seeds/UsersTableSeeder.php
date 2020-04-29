<!--
AUTHOR: LARAVEL FRAMEWORK 
CODE TITLE: UsersTableSeeder.php
DATE: 18 DECEMBER 2019

PURPOSE: THIS PHP CODE IS WRITTEN TO PRE-POPULATE THE ROLES TABLE IN THE DATABASE WITH THE INITIAL VALUES NEEDED FOR THE APPLICATION TO RUN FOR THE FIRST TIME.  
IT IS LOCATED IN THE database/seeds FOLDER.      

-->


<?php

use App\Models\Profile;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=>'admin',
            'guard_name'=>'web',
        ]);
        $admin_role = Role::where('name','admin')->first();

        $user = User::create([
            'username'=>'Admin',
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('12345'),
            'is_banned'=>0
        ]);
        $user->assignRole($admin_role);
        Profile::create([
            'first_name'=>'Admin',
            'last_name'=>'strator',
            'email'=>'admin@admin.com',
            'phone_number'=>'',
            'address_line1'=>'',
            'address_line2'=>'',
            //'sex'=>$data['sex'],
            'user_id'=>$user->id,
        ]);
    }
}

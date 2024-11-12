<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Migration
{
    public function up()
    {
        DB::table('users')->insert([
            'full_name' => 'Administrator',
            'email' => 'admin@web.com',
            'password' => Hash::make('admin'),
            'role' => 'ADMIN',
            'created_at' => now()
        ]);
    }

    public function down()
    {
        DB::table('users')->where('email', 'admin@web.com')->delete();
    }
}

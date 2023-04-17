<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'superadmin',
                'email' => 'superadmin@devstudio.us',
                'full_name' => 'Super Admin',
                'password' => Hash::make('devstudio@123'),
                'email_verified_at' => Carbon::now(),
                'role_id' => USER_SUPER_ADMIN,
                'status' => STATUS_ACTIVE,
                'status' => STATUS_ACTIVE,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'username' => 'admin',
                'email' => 'admin@devstudio.us',
                'full_name' => 'Admin',
                'password' => Hash::make('devstudio@123'),
                'email_verified_at' => Carbon::now(),
                'role_id' => USER_ADMIN,
                'status' => STATUS_ACTIVE,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'username' => 'user',
                'email' => 'user@devstudio.us',
                'full_name' => 'User',
                'password' => Hash::make('devstudio@123'),
                'email_verified_at' => Carbon::now(),
                'role_id' => USER_APP,
                'status' => STATUS_ACTIVE,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

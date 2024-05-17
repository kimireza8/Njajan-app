<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_role')->insert([
            ['role_id' => 1, 'role_name' => 'admin'],
            ['role_id' => 2, 'role_name' => 'seller'],
            ['role_id' => 3, 'role_name' => 'buyer'],
        ]);
    }
}

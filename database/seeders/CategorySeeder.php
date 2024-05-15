<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['category_id' => 1, 'category_name' => 'makanan'],
            ['category_id' => 2, 'category_name' => 'minuman'],
        ]);
    }
}

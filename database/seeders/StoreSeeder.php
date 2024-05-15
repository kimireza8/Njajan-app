<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat 5 store dengan data dummy menggunakan StoreFactory
        Store::factory()->count(5)->create();

        // Membuat 10 product dengan data dummy menggunakan ProductFactory
        Product::factory()->count(10)->create();
    }
}

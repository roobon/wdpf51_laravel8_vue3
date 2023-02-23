<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i <= 100; $i++) {
            $price = rand(100, 200);
            $cat = rand(1, 5);
            $stock = rand(10, 100);
            DB::table('products')->insert([
                'category_id' => $cat,
                'product_name' => Str::random(15),
                'price' => $price,
                'image' => 'assets/images/no_photo.jpg',
                'product_stock' => $stock,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ]);
        }
    }
}

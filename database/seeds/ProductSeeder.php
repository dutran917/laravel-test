<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sản phẩm 1',
                'description' => 'Mô tả sản phẩm 1',
                'price' => 100000,
                'quantity' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sản phẩm 2',
                'description' => 'Mô tả sản phẩm 2',
                'price' => 200000,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sản phẩm 3',
                'description' => 'Mô tả sản phẩm 4',
                'price' => 400000,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

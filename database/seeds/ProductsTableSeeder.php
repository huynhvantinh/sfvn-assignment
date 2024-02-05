<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => "Vietnam Small Apple",
            'category_id' => 1,
            'sales_price' => "5",
            'unit_id' => 1,
            'image' => "apple1.png"],

            ['name' => "Vietnam Big Apple",
            'category_id' => 1,
            'sales_price' => "10",
            'unit_id' => 1,
            'image' => "apple2.png"],

            ['name' => "China Small Apple",
            'category_id' => 1,
            'sales_price' => "15",
            'unit_id' => 1,
            'image' => "apple1.png"],
            
        ]);
    }
}

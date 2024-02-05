<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => "Apple",
            'slug' => "apple",
            'status' => 1],

            ['name' => "Orange",
            'slug' => "orange",
            'status' => 1],

            ['name' => "Pear",
            'slug' => "pear",
            'status' => 1],
        ]);
    }
}

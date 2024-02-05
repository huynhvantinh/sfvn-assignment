<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            ['name' => "Pcs",
            'slug' => "pcs",
            'status' => 1],

            ['name' => "pack",
            'slug' => "pack",
            'status' => 1],

            ['name' => "Kg",
            'slug' => "kg",
            'status' => 1],
        ]);
    }
}

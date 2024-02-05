<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['name' => "CustomerA",
            'mobile' => "123456789",
            'address' => "VN",
            'email' => "custumer_a@gmail.com"],

            ['name' => "CustomerB",
            'mobile' => "123456789",
            'address' => "US",
            'email' => "custumer_b@gmail.com"],

            ['name' => "CustomerC",
            'mobile' => "123456789",
            'address' => "UK",
            'email' => "custumer_c@gmail.com"]
        ]);
    }
}

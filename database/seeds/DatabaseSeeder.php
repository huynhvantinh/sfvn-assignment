<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*$this->call(CategoriesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);*/
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            UnitsTableSeeder::class,
            ProductsTableSeeder::class,
            CustomersTableSeeder::class
        ]);
        
    }
}

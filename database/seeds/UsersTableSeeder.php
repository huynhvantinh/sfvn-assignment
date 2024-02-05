<?php

use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'f_name' => "Nhan Vien",
            'l_name' => "1",
            'image' => "user.jpg",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}

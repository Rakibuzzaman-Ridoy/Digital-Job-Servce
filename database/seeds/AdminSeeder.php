<?php

use App\backend\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' =>'Sumon Sheikh' ,
            'email' =>'sumon01815@gmail.com',
            'password'=>bcrypt('12345678'),


        ]);
    }
}

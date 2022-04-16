<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'full_name' => 'ojan eeq',
            'email' =>'gggaming@gmail.com',
            'phone' => '123123123',
            'password' => 'eeqkucing',
        ]);
    }
}

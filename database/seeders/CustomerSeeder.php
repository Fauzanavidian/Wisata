<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
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

        DB::table('customers')->insert([
            'full_name' => 'kamil',
            'email' =>'gggaming@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('customers')->insert([
            'full_name' => 'kamil2',
            'email' =>'gggaming2@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('customers')->insert([
            'full_name' => 'kamil3',
            'email' =>'gggaming3@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('customers')->insert([
            'full_name' => 'kamil4',
            'email' =>'gggaming4@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('customers')->insert([
            'full_name' => 'kamil5',
            'email' =>'gggaming5@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('customers')->insert([
            'full_name' => 'kamil',
            'email' =>'gggaming6@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('customers')->insert([
            'full_name' => 'kamil',
            'email' =>'gggaming7@gmail.com',
            'phone' => '123123123',
            'password' => 'testing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

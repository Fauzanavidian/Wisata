<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BITCH',
            'foto' => 'test',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
        ]);
    }
}

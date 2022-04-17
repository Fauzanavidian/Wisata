<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
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
            'nama' => 'KUTA BEACH',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH2',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH3',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH4',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH5',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH6',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH7',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
        DB::table('wisatas')->insert([
            'nama' => 'KUTA BEACH8',
            'foto' => 'balipackage.jpg',
            'lokasi' => 'Denpasar, Bali',
            'deskripsi' => 'It is a long established fact that a reader will be distracted by the readable content of a page.',
            'rating' => '5',
            'harga' => '15000',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        );
    }
}

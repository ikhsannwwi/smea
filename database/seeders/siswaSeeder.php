<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nisn' => '0058299241',
            'nama' => 'Mochammad Ikhsan Nawawi',
            'jurusan' => 'Sistem Informatika Jaringan dan Aplikasi',
            'foto_siswa' => 'sanbray.jpg',
        ]);
    }
}

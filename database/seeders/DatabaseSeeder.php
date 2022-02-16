<?php

namespace Database\Seeders;
use App\Models\kelas;
use App\Models\siswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        kelas::create([
            'kelas' => 'X-RPL'
        ]);

        kelas::create([
            'kelas' => 'XI-RPL'
        ]);

        kelas::create([
            'kelas' => 'XII-RPL'
        ]);

        siswa::create([
            'nama'  => 'Apple',
            'nis'   => '2021.10.54',
            'id_kelas'  => '1'
        ]);

        siswa::create([
            'nama'  => 'Apple1',
            'nis'   => '2021.10.54',
            'id_kelas'  => '2'
        ]);

        siswa::create([
            'nama'  => 'Apple2',
            'nis'   => '2021.10.54',
            'id_kelas'  => '3'
        ]);
    }
}

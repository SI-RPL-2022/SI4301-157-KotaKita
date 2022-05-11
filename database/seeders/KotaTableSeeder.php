<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kota::create([
            'nama' => 'Jakarta'
        ]);
        Kota::create([
            'nama' => 'Bandung'
        ]);
        Kota::create([
            'nama' => 'Cirebon'
        ]);
        Kota::create([
            'nama' => 'Yogyakarta'
        ]);
        Kota::create([
            'nama' => 'Surabaya'
        ]);
    }
}

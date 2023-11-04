<?php

namespace Database\Seeders;

use App\Models\Anggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggaranData = [
            [
                'jenis_usaha'=>'Kopra',
                'modal'=>500000,
                'uang_masuk'=>700000,
                'uang_keluar'=>400000,
                'keuntungan'=>300000,
            ],
            [
                'jenis_usaha'=>'Cengkih',
                'modal'=>600000,
                'uang_masuk'=>800000,
                'uang_keluar'=>500000,
                'keuntungan'=>300000,
            ],
        ];

        foreach($anggaranData as $key => $val) {
            Anggaran::create($val);
        }
    }
}

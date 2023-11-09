<?php

namespace Database\Seeders;

use App\Models\Datadesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDatadesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataDesa = [
            [
                'user_id'=>'2',
                'nama_desa'=>'Kembuan',
                'kecamatan'=>'Tondano Utara'
            ],
            [
                'user_id'=>'3',
                'nama_desa'=>'Kembuan Satu',
                'kecamatan'=>'Tondano Utara'
            ],
            [
                'user_id'=>'4',
                'nama_desa'=>'Tonsea Lama',
                'kecamatan'=>'Tondano Utara'
            ]
        ];

        foreach($dataDesa as $key => $val) {
            Datadesa::create($val);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_usaha',
        'modal',
        'uang_masuk',
        'uang_keluar',
        'keuntungan'
    ];
}

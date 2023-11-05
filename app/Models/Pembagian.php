<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembagian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tujuan',
        'jumlah',
        'persen',
        'uraian'
    ];
}

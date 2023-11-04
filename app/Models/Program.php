<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'unit_usaha',
        'penyewaan',
        'berjalan',
        'penjualan'
    ];
}
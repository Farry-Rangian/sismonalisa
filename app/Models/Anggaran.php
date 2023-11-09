<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'datadesa_id',
        'jenis_usaha',
        'modal',
        'uang_masuk',
        'uang_keluar',
        'keuntungan',
        'tanggal'
    ];

    public function datadesa()
    {
        return $this->belongsTo(Datadesa::class);
    }
}

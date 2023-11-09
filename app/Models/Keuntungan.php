<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuntungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'datadesa_id',
        'penguatan_modal',
        'penasihat',
        'pengawas',
        'pelaksana',
        'anggota',
        'tanggal'
    ];

    public function datadesa()
    {
        return $this->belongsTo(Datadesa::class);
    }
}

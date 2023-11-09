<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'datadesa_id',
        'laporan_semester',
        'proposal',
        'kwitansi',
        'dokumentasi',
        'tanggal'
    ];

    public function datadesa()
    {
        return $this->belongsTo(Datadesa::class);
    }
}

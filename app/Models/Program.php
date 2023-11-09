<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'datadesa_id',
        'usaha',
        'penyewaan',
        'berjalan',
        'penjualan',
        'tanggal'
    ];

    public function datadesa()
    {
        return $this->belongsTo(Datadesa::class);
    }
}

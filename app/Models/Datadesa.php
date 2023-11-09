<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_desa',
        'kecamatan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

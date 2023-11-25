<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengawasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'datadesa_id',
        'objek',
        'hasil',
        'tindak',
    ];
}

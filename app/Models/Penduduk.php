<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk';
    protected $guarded = ['id'];

    protected $fillable = [
        'nik',
        'nama',
        'ttl',
        'jk',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'propinsi',
        'agama',
        'status',
        'pekerjaan',
        'kewarganegaraan'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pt extends Authenticatable
{
    use HasFactory;

    protected $table = 'pts';

    protected $fillable = [
        'lembaga', 
        'kelompok_koordinator',
        'npsn',
        'nama_pt',
        'nm_bp',
        'provinsi_pt',
        'jln',
        'kec_pt',
        'kabupaten/kota',
        'website',
        'no_tel',
        'email',
        'password_pt',
        'total_mhs',
        'total_dosen',
        'total_program',
        'total_publikasi'
    ];
}

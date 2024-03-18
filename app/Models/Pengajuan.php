<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'no_tlp',
        'photo_ktp',
        'swa_photo_ktp',
        'pekerjaan',
        'informasi',
        'alasan',
    ];
}

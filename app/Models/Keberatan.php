<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keberatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tujuan',
        'nama',
        'no_tlp',
        'pekerjaan',
        'alamat',
        'nama_yg_dikuasakan',
        'email_yg_dikuasakan',
        'no_tlp_yg_dikuasakan',
        'pekerjaan_yg_dikuasakan',
        'alamat_yg_dikuasakan',
        'surat_kuasa',
        'alasan',
    ];
}

<?php

namespace App\Services;

use App\Models\Pengajuan;

class PengajuanService
{
    protected $pengajuan;
    public function __construct(Pengajuan $pengajuan)
    {
        $this->pengajuan = $pengajuan;
    }

    public function Query()
    {
        return $this->pengajuan->query();
    }

    public function show($id)
    {
        $pengajuan = $this->pengajuan->find($id);
        return $pengajuan;
    }
}

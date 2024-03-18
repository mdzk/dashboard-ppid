<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\KeberatanService;
use App\Services\PengajuanService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $keberatan;
    protected $pengajuan;
    public function __construct(KeberatanService $keberatanService, PengajuanService $pengajuanService)
    {
        $this->keberatan = $keberatanService;
        $this->pengajuan = $pengajuanService;
    }
    public function index(Request $request)
    {
        $data['keberatan'] = $this->keberatan->Query()->count();
        $data['pengajuan'] = $this->pengajuan->Query()->count();
        return view('dashboard.index', $data);
    }
}

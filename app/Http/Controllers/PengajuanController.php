<?php

namespace App\Http\Controllers;

use App\Services\PengajuanService;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    protected $pengajuan;
    public function __construct(PengajuanService $pengajuanService)
    {
        $this->pengajuan = $pengajuanService;
    }
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $pengajuan = $this->pengajuan->Query();
            if (\request()->search) {
                $pengajuan->where('nama', 'like', '%' . \request()->search . '%');
            }
            $data['table'] = $pengajuan->orderBy('created_at', 'DESC')->paginate();
            return view('pengajuan._data_opd', $data);
        }
        $data['title'] = 'Admin OPD';
        return view('pengajuan.index');
    }

    public function show($id)
    {
        $data['title'] = 'Detail Keberatan';
        $data['pengajuan'] = $this->pengajuan->show($id);
        return view('pengajuan.show', $data);
    }
}

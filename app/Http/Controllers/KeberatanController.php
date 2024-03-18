<?php

namespace App\Http\Controllers;

use App\Services\KeberatanService;
use Illuminate\Http\Request;

class KeberatanController extends Controller
{
    protected $keberatan;
    public function __construct(KeberatanService $keberatanService)
    {
        $this->keberatan = $keberatanService;
    }
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $keberatan = $this->keberatan->Query();
            if (\request()->search) {
                $keberatan->where('nama_opd', 'like', '%' . \request()->search . '%');
            }
            $data['table'] = $keberatan->paginate();
            return view('keberatan._data_opd', $data);
        }
        $data['title'] = 'Admin OPD';
        return view('keberatan.index');
    }
}

<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dashboard()
    {
        $penelitianDisetujui = Penelitian::where('status', 1)->count();
        $pengabdianDisetujui = Pengabdian::where('status', 1)->count();
        $penelitianDitolak = Penelitian::where('status', 4)->count();
        $pengabdianDitolak = Pengabdian::where('status', 4)->count();
        return view('dosen.index', compact('penelitianDisetujui', 'pengabdianDisetujui', 'penelitianDitolak', 'pengabdianDitolak'));
    }

    public function index(){
        return view('dosen.index');
    }
}

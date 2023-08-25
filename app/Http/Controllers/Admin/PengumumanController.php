<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function home()
    {
        return view('landingpage', [
            'list_data' => Pengumuman::all()
        ]);
    }

    public function index()
    {
        return view('admin.pengumuman.index', [
            'list_data' => Pengumuman::all()
        ]);
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store()
    {
        $pengumuman = new Pengumuman();
        $pengumuman->pengumuman = request('pengumuman');
        $pengumuman->save();

        return redirect('admin/pengumuman');
    }
}
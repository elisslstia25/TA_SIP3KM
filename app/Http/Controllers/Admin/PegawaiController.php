<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
   
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

   
    public function create()
    {
        return view('admin.pegawai.create');
    }

   
    public function store(Request $request)
    {
        $pegawai = New Pegawai();
        $pegawai->nidn = request('nidn');
        $pegawai->email = request('email');
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->username = request('nidn');
        $pegawai->password = bcrypt(request('password'));
        $pegawai->save();

       return redirect('admin/pegawai');
    }

   
    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.pegawai.show', $data);
    }

   
    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;

        return view('admin.pegawai.edit', $data);
    }

   
    public function update(Pegawai $pegawai)
    {
        $pegawai->nidn = request('nidn');
        $pegawai->email = request('email');
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->username = request('nidn');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->save();

       return redirect('admin/pegawai');
    }

   
    public function destroy(string $id)
    {
        //
    }
}

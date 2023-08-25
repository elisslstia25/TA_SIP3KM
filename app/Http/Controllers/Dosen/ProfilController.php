<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
   
    public function index()
    {
        return view('dosen.profil.index');
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(string $id)
    {
        //
    }

   
    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;

        return view('dosen.profil.edit', $data);
    }

   
    public function update($pegawai)
    {
        $pegawai = Pegawai::find($pegawai);
        $pegawai->nidn = request('nidn');
        $pegawai->email = request('email');
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->no_hp = request('no_hp');
        $pegawai->username = request('username');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tgl_lahir = request('tgl_lahir');
        $pegawai->status_dosen = request('status_dosen');
        $pegawai->institusi = request('institusi');
        $pegawai->program_studi = request('program_studi');
        $pegawai->jenjang_pendidikan = request('jenjang_pendidikan');
        $pegawai->jabatan_akademik = request('jabatan_akademik');
        $pegawai->alamat = request('alamat');
        $pegawai->bidang_keahlian = request('bidang_keahlian');
        $pegawai->handleUploadPoto();

        $pegawai->save();

        return redirect('dosen/profil');
    }

   
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Pengabdian;
use App\Models\Skema;
use App\Models\Tema;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
   
    public function index()
    {
        $data['list_pengabdian'] = Pengabdian::all();
        return view('admin.pengabdian.index', $data);
    }
    
    public function show(Pengabdian $pengabdian){
        $data['pengabdian'] = $pengabdian;
        $data['tema'] = Tema::all();
        return view('admin.pengabdian.show', $data);
    }


    public function tema()
    {
        return view('admin.pengabdian.tema.create');
    }

    public function temaPost()
    {
        $tema = new Tema();
        $tema->tema = request('tema');
        $tema->save();

        return redirect('admin/pengabdian')->with('success', 'Berhasil menambahkan data tema pengabdian');
    }
    public function skemaPost()
    {
        $tema = new Skema();
        $tema->skema = request('skema');
        $tema->save();

        return redirect('admin/pengabdian')->with('success', 'Berhasil menambahkan data tema penelitian');
    }


    // public function status($pengabdian)
    // {
    //     $pengabdian = Pengabdian::find($pengabdian);
    //     $pengabdian->status = request('status');
    //     $pengabdian->save();
    //     return redirect('admin/pengabdian/berjalan')->with('success', 'Data Didanai');
    // }

    public function status(Pengabdian $pengabdian)
    {
        // dd($pengabdian);
        // $pengabdian = pengabdian::find($pengabdian);
        $pengabdian->status = request('status');
        $pengabdian->save();
        if (request('status') == 2) {
            return redirect('admin/pengabdian-berjalan')->with('success', 'Data Didanai');
        } elseif (request('status') == 4) {
            return redirect('admin/pengabdian-riwayat')->with('success', 'Data Tidak Didanai');
        }
    }


}

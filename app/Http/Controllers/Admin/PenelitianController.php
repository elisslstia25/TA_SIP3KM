<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use App\Models\Skema;
use App\Models\Tema;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{

    public function index()
    {
        $data['list_penelitian'] = Penelitian::all();
        return view('admin.penelitian.index', $data);
    }

    public function show(Penelitian $penelitian)
    {
        $data['penelitian'] = $penelitian;
        $data['tema'] = Tema::all();
        return view('admin.penelitian.show', $data);
    }

    public function tema()
    {
        return view('admin.penelitian.tema.create');
    }

    public function temaPost()
    {
        $tema = new Tema();
        $tema->tema = request('tema');
        $tema->save();

        return redirect('admin/penelitian')->with('success', 'Berhasil menambahkan data tema penelitian');
    }
    public function skemaPost()
    {
        $tema = new Skema();
        $tema->skema = request('skema');
        $tema->save();

        return redirect('admin/penelitian')->with('success', 'Berhasil menambahkan data tema penelitian');
    }

    public function status(Penelitian $penelitian)
    {
        // dd($penelitian);
        // $penelitian = Penelitian::find($penelitian);
        $penelitian->status = request('status');
        $penelitian->save();
        if (request('status') == 2) {
            return redirect('admin/penelitian-berjalan')->with('success', 'Data Didanai');
        } elseif (request('status') == 4) {
            return redirect('admin/penelitian-riwayat')->with('success', 'Data Tidak Didanai');
        }
    }
}

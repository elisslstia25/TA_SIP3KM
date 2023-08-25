<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class BerjalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_berjalan'] = Penelitian::where('status', '2')->get();
        return view('admin.penelitian.berjalan.index', $data);
    }

  
    public function show(Penelitian $penelitian)
    {
       $data['penelitian'] = $penelitian;
       return view('admin.penelitian.berjalan.show', $data);
    }

    public function status(Penelitian $penelitian)
    {
        // dd($penelitian);
        // $penelitian = Penelitian::find($penelitian);
        $penelitian->status = request('status');
        $penelitian->save();
        if (request('status') == 3) {
            return redirect('admin/penelitian-selesai')->with('success', 'Data Didanai');
        } elseif (request('status') == 4) {
            return redirect('admin/penelitian-riwayat')->with('success', 'Data Tidak Didanai');
    }
}
}
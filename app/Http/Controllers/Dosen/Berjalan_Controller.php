<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Pengabdian;
use Illuminate\Http\Request;

class Berjalan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_pengabdian'] = Pengabdian::where('status', '2')->get();
        return view('dosen.pengabdian.berjalan.index', $data);
    }

    public function show(Pengabdian $pengabdian)
    {
        $data['pengabdian'] = $pengabdian;
       return view('dosen.pengabdian.berjalan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

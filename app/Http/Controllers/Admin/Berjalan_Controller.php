<?php

namespace App\Http\Controllers\Admin;

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
        $data['list_berjalan'] = Pengabdian::where('status', '2')->get();
        return view('admin.pengabdian.berjalan.index', $data);
    }

    public function show(Pengabdian $pengabdian)
    {
       $data['pengabdian'] = $pengabdian;
       return view('admin.pengabdian.berjalan.show', $data);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   

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

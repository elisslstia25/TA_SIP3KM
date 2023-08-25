<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_selesai'] = Penelitian::where('status', '3')->get();
        return view('admin.penelitian.selesai.index', $data);
    }

    public function show(Penelitian $penelitian)
    {
       $data['penelitian'] = $penelitian;
       return view('admin.penelitian.selesai.show', $data);
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

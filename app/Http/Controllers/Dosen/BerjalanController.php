<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BerjalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_berjalan'] = Penelitian::where('status', '2')->get();
        return view('dosen.penelitian.berjalan.index', $data);
    }

    public function show(Penelitian $penelitian)
    {
        $data['penelitian'] = $penelitian;
        return view('dosen.penelitian.berjalan.show', $data);
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
    public function update(Request $request, $id)
    {
        // Validate the form data if necessary
        $validatedData = $request->validate([
            'dokumen_aktif' => 'required|file|mimes:pdf|max:2048', // Sesuaikan aturan validasi sesuai kebutuhan
        ]);

        // Find the Penelitian model by ID
        $penelitian = Penelitian::findOrFail($id);

        // Handle the upload of the 'dokumen_aktif' field
        if ($request->hasFile('dokumen_aktif')) {
            $penelitian->handleUploadDokumen_Aktif();
        }

        // Save the updated data to the database
        $penelitian->save();

        return redirect('dosen/penelitian-berjalan')->with('success', 'Data berhasil diupdate');
    }
    public function update2(Request $request, $id)
    {
        // Validate the form data if necessary
        $validatedData = $request->validate([
            'dokumen_selesai' => 'required|file|mimes:pdf|max:2048', // Sesuaikan aturan validasi sesuai kebutuhan
        ]);

        // Find the Penelitian model by ID
        $penelitian = Penelitian::findOrFail($id);

        // Handle the upload of the 'dokumen_aktif' field
        if ($request->hasFile('dokumen_selesai')) {
            $penelitian->handleUploadDokumen_Selesai();
        }

        // Save the updated data to the database
        $penelitian->save();

        return redirect('dosen/penelitian-selesai')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

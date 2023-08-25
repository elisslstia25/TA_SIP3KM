<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Pegawai;

class Penelitian extends Model
{
    protected $table ="penelitian";
    protected $fillable = [
        // Other fillable fields...
        'dokumen',
    ];
    public $primaryKey ="id";

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    function handleUploadDokumen()
    {
        if (request()->hasFile('dokumen')) {
            $dokumen = request()->file('dokumen');
            $destination = "penelitian/dokumen";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen->extension();
            $url = $dokumen->storeAs($destination, $filename);
            $this->dokumen = "app/" . $url;
            
        }
    }

    // function handleUploadDokumen1()
    // {
    //     if (request()->hasFile('dokumen')) {
    //         $dokumen = request()->file('dokumen');
    //         $destination = "penelitian/dokumen-1";
    //         $randomStr = Str::random(5);
    //         $filename = time() . "-"  . $randomStr . "."  . $dokumen->extension();
    //         $url = $dokumen->storeAs($destination, $filename);
    //         $this->dokumen = "app/" . $url;
            
    //     }
    // }

    function handleUploadDokumen2()
    {
        if (request()->hasFile('dokumen2')) {
            $dokumen2 = request()->file('dokumen2');
            $destination = "penelitian/dokumen-2";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen2->extension();
            $url = $dokumen2->storeAs($destination, $filename);
            $this->dokumen2 = "app/" . $url;
            
        }
    }

    function handleUploadDokumen3()
    {
        if (request()->hasFile('dokumen3')) {
            $dokumen3 = request()->file('dokumen3');
            $destination = "penelitian/dokumen-3";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen3->extension();
            $url = $dokumen3->storeAs($destination, $filename);
            $this->dokumen3 = "app/" . $url;
            
        }
    }

    function handleUploadDokumen_Aktif()
    {
        if (request()->hasFile('dokumen_aktif')) {
            $dokumen_aktif = request()->file('dokumen_aktif');
            $destination = "penelitian/dokumen_aktif";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen_aktif->extension();
            $url = $dokumen_aktif->storeAs($destination, $filename);
            $this->dokumen_aktif = "app/" . $url;
            $this->save(); // Simpan model setelah menangani proses upload dan menyimpan path file dalam basis data
        }
    }
    function handleUploadDokumen_Selesai()
    {
        if (request()->hasFile('dokumen_selesai')) {
            $dokumen_selesai = request()->file('dokumen_selesai');
            $destination = "penelitian/dokumen_selesai";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen_selesai->extension();
            $url = $dokumen_selesai->storeAs($destination, $filename);
            $this->dokumen_selesai = "app/" . $url;
            $this->save(); // Simpan model setelah menangani proses upload dan menyimpan path file dalam basis data
        }
    }

    function handleUploadDokumenMitra()
    {
        if (request()->hasFile('dokumen_mitra')) {
            $dokumen_mitra = request()->file('dokumen_mitra');
            $destination = "penelitian/dokumen-mitra";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $dokumen_mitra->extension();
            $url = $dokumen_mitra->storeAs($destination, $filename);
            $this->dokumen_mitra = "app/" . $url;
            
        }
    }
}

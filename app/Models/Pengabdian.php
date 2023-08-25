<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Pegawai;

class Pengabdian extends Model
{
    protected $table ="pengabdian";
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

    function handleUploadFile($field)
    {
        if (request()->hasFile($field)) {
            $file = request()->file($field);
            $destination = "formatproposal" . $field;   
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $field . "-" . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->$field = "app/" . $url;
            $this->save();
        }
    }
}

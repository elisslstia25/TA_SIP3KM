<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Penelitian;
use App\Models\Pengabdian;

class Pegawai extends ModelAuthenticate
{
    protected $table ="pegawai";


    public function Penelitian()
    {
        return $this->belongsTo(Penelitian::class, 'id');
    }

    public function Pengabdian()
    {
        return $this->belongsTo(Pengabdian::class, 'id');
    }

    function handleUploadPoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "pegawai";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            

        }
    }
}

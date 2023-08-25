<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';

    function handleUploadSurat()
    {
        if (request()->hasFile('surat')) {
            $surat = request()->file('surat');
            $destination = "surat";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $surat->extension();
            $url = $surat->storeAs($destination, $filename);
            $this->surat = "app/" . $url;
            
        }
    }
}
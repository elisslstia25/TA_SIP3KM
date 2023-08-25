<?php

use App\Http\Controllers\Dosen\Berjalan_Controller;
use App\Http\Controllers\Dosen\BerjalanController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\ProfilController;
use App\Http\Controllers\Dosen\PenelitianController;
use App\Http\Controllers\Dosen\PengabdianController;
use App\Http\Controllers\Dosen\Riwayat_Controller;
use App\Http\Controllers\Dosen\RiwayatController;
use App\Http\Controllers\Dosen\Selesai_Controller;
use App\Http\Controllers\Dosen\SelesaiController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth:dosen'], function () {
    Route::prefix('dosen')->group(function () {

        Route::get('/', [DosenController::class, 'dashboard']);

        Route::resource('penelitian', PenelitianController::class);


        Route::get('profil', [ProfilController::class, 'index']);
        Route::get('profil/{pegawai}/edit', [ProfilController::class, 'edit']);
        Route::put('profil/{pegawai}', [ProfilController::class, 'update']);

        // Route::get('penelitian/{id}/show', [Peneliti anController::class, 'show']);

        Route::get('penelitian-berjalan', [BerjalanController::class, 'index']);
        Route::get('penelitian-berjalan/{penelitian}', [BerjalanController::class, 'show']);


        Route::get('penelitian-selesai', [SelesaiController::class, 'index']);
        Route::get('penelitian-selesai/{penelitian}', [SelesaiController::class, 'show']);

        Route::get('penelitian-riwayat', [RiwayatController::class, 'index']);
        Route::get('penelitian-riwayat/{penelitian}', [RiwayatController::class, 'show']);

        Route::resource('pengabdian', PengabdianController::class);

        Route::get('pengabdian-berjalan', [Berjalan_Controller::class, 'index']);
        Route::get('pengabdian-berjalan/{pengabdian}', [Berjalan_Controller::class, 'show']);

        Route::get('pengabdian-selesai', [Selesai_Controller::class, 'index']);
        Route::get('pengabdian-selesai/{pengabdian}', [Selesai_Controller::class, 'show']);

        Route::get('pengabdian-riwayat', [Riwayat_Controller::class, 'index']);
        Route::get('pengabdian-riwayat/{pengabdian}', [Riwayat_Controller::class, 'show']);

        // web.php
        // Route::post('penelitian/{penelitian}', [BerjalanController::class, 'post'])->name('penelitian.update');
        // Route::put('penelitian-berjalan/berjalanStore', [BerjalanController::class, 'store']);
        // web.php

Route::put('dosen/penelitian-berjalan/{id}/berjalanUpdate', [BerjalanController::class, 'update'])->name('penelitian.update');
Route::put('dosen/penelitian-selesai/{id}/selesaiUpdate', [BerjalanController::class, 'update2'])->name('penelitianselesai.update');



    });

});

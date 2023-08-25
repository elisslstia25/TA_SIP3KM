<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Berjalan_Controller;
use App\Http\Controllers\Admin\BerjalanController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PenelitianController;
use App\Http\Controllers\Admin\PengabdianController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\Riwayat_Controller;
use App\Http\Controllers\Admin\RiwayatController;
use App\Http\Controllers\Admin\Selesai_Controller;
use App\Http\Controllers\Admin\SelesaiController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', [AdminController::class, 'dashboard']);
        Route::resource('admin', AdminController::class);
        Route::resource('pegawai', PegawaiController::class);

        Route::get('penelitian', [PenelitianController::class, 'index']);
        Route::get('penelitian/{penelitian}', [PenelitianController::class, 'show']);
        
        Route::get('tema-add/penelitian', [PenelitianController::class, 'tema']);
        Route::post('penelitian/tema-add', [PenelitianController::class, 'temaPost']);
        Route::post('penelitian/skema-add', [PenelitianController::class, 'skemaPost']);
        
        Route::put('penelitian/update-status/{penelitian}', [PenelitianController::class, 'status']);

        Route::get('penelitian-berjalan', [BerjalanController::class, 'index']);
        Route::get('penelitian-berjalan/{penelitian}', [BerjalanController::class, 'show']);

        Route::put('penelitian-berjalan/update-status/{penelitian}', [BerjalanController::class, 'status']);

        Route::get('penelitian-selesai', [SelesaiController::class, 'index']);
        Route::get('penelitian-selesai/{penelitian}', [SelesaiController::class, 'show']);

        Route::get('penelitian-riwayat', [RiwayatController::class, 'index']);
        Route::get('penelitian-riwayat/{penelitian}', [RiwayatController::class, 'show']);
        



        Route::get('pengabdian', [PengabdianController::class, 'index']);
        Route::get('pengabdian/{pengabdian}', [PengabdianController::class, 'show']);

        Route::get('tema-add/pengabdian', [PengabdianController::class, 'tema']);
        Route::post('pengabdian/tema-add', [PengabdianController::class, 'temaPost']);
        Route::post('pengabdian/skema-add', [PengabdianController::class, 'skemaPost']);

        Route::put('pengabdian/update-status/{pengabdian}', [PengabdianController::class, 'status']);

        Route::get('pengabdian-berjalan', [Berjalan_Controller::class, 'index']);
        Route::get('pengabdian-berjalan/{pengabdian}', [Berjalan_Controller::class, 'show']);

        Route::get('pengabdian-selesai', [Selesai_Controller::class, 'index']);
        Route::get('pengabdian-selesai/{pengabdian}', [Selesai_Controller::class, 'show']);

        Route::get('pengabdian-riwayat', [Riwayat_Controller::class, 'index']);
        Route::get('pengabdian-riwayat/{pengabdian}', [Riwayat_Controller::class, 'show']);

        Route::get('pengumuman', [PengumumanController::class, 'index']);
        Route::get('pengumuman/create', [PengumumanController::class, 'create']);
        Route::post('pengumuman', [PengumumanController::class, 'store']);
    });
});

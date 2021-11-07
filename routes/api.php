<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/testing',function(){
    return 'Coba saja';
});

Route::get('/layanan/index', [LayananController::class, 'indexApi'])->name('layanan.index');
Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.store');
Route::get('/layanan/{id}', [LayananController::class, 'detailApi'])->name('layanan.detail');

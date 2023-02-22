<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SuratTolakController;
use App\Http\Controllers\SuratTerimaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/school');

Route::resource('/school', SchoolController::class);

Route::get('/school/{id}/terima', [SuratTerimaController::class, 'index']);
Route::get('/school/{id}/tolak', [SuratTolakController::class, 'index']);

Route::get('/template', function(){
    return view('surat-balasan.surat_balasan');
});

Route::post('/school/terima', [SuratTerimaController::class, 'create']);
<?php

use App\Http\Controllers\FireController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () { return view('login-page'); });
Route::get('/', function () { return view('index'); });

//kecelakaan pesawat
Route::resource('kecelakaan-pesawat', IncidentController::class);
Route::post('kecelakaan-pesawat/create', [IncidentController::class, 'store' ])->name('aircraft.create');
Route::get('kecelakaan-pesawat/detail/{id}', [IncidentController::class, 'show'])->name('aircraft.show');

//domestic fire
Route::resource('domestic-fire', FireController::class);
Route::post('domestic-fire', [FireController::class, 'store'])->name('fire.store');
Route::get('domestic-fire/detail/{id}', [FireController::class, 'show'])->name('domesticfire.show');

//regulasi
Route::get('/regulation', function () { return view('page-regulasi'); });
Route::get('/download-pdf-national-pr', function () {
    $file_path = storage_path('files\PR 30 Tahun 2022_221228_134631.pdf');
    return response()->download($file_path);
});
Route::get('/download-pdf-international-9137', function () {
    $file_path = storage_path('files\DOC 9137.pdf');
    return response()->download($file_path);
});
Route::get('/download-pdf-international-annex', function () {
    $file_path = storage_path('files\annex-14-aerodromes.pdf');
    return response()->download($file_path);
});
//support
Route::get('/support', function () { return view('support/index'); });

//pdf
Route::get('/pdf-fire/{id}', [PdfController::class, 'generateFirePdf'])->name('pdf.fire');
Route::get('/pdf-accident/{id}', [PdfController::class, 'generateAccidentPdf'])->name('pdf.accident');

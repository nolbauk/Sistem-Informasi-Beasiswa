<?php

use App\Http\Controllers\controllercalon;
use App\Http\Controllers\controllerprestasi;
use App\Http\Controllers\controllerhasil;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

// Calon
Route::get('/calonindex', [controllercalon::class, 'index'])->name('calonindex');

Route::get('/calon/caloncreate', [controllercalon::class, 'add'])->name('calonadd');

Route::post('/calon/caloncreate', [controllercalon::class, 'insertdata'])->name('caloncreate');
    
Route::get('/calon/calonedit/{id}', [controllercalon::class, 'readdata'])->name('calonread');

Route::post('/calon/calonedit/{id}', [controllercalon::class, 'updatedata'])->name('calonedit');
    
Route::get('/calon/{id}', [controllercalon::class, 'deletedata'])->name('calondelete');

Route::get('/calonreport', [controllercalon::class, 'exportpdf'])->name('calonreport');

// Prestasi
Route::get('/prestasiindex', [controllerprestasi::class, 'index'])->name('prestasiindex');

Route::get('/prestasi/prestasicreate', [controllerprestasi::class, 'add'])->name('prestasiadd');

Route::post('/prestasi/prestasicreate', [controllerprestasi::class, 'insertdata'])->name('prestasicreate');
    
Route::get('/prestasi/prestasiedit/{id}', [controllerprestasi::class, 'readdata'])->name('prestasiread');
    
Route::post('/prestasi/prestasiedit/{id}', [controllerprestasi::class, 'updatedata'])->name('prestasiedit');
    
Route::get('/prestasi/{id}', [controllerprestasi::class, 'deletedata'])->name('prestasidelete');

Route::get('/prestasireport', [controllerprestasi::class, 'exportpdf'])->name('prestasireport');

// Hasil
Route::get('/hasilindex', [controllerhasil::class, 'index'])->name('hasilindex');

Route::get('/hasil/hasilcreate', [controllerhasil::class, 'add'])->name('hasiladd');

Route::post('/hasil/hasilcreate', [controllerhasil::class, 'insertdata'])->name('hasilcreate');
    
Route::get('/hasil/hasiledit/{id}', [controllerhasil::class, 'readdata'])->name('hasilread');

Route::post('/hasil/hasiledit/{id}', [controllerhasil::class, 'updatedata'])->name('hasiledit');
    
Route::get('/hasil/{id}', [controllerhasil::class, 'deletedata'])->name('hasildelete');

Route::get('/hasilreport', [controllerhasil::class, 'exportpdf'])->name('hasilreport');
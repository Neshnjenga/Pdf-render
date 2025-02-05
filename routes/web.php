<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generatePdf',[PdfController::class,'generatePdf'])->name('generatePdf');

Route::get('/home',[PdfController::class,'home'])->name('home');
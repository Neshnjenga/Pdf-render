<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generatePdf',[PdfController::class,'generatePdf'])->name('generatePdf');

Route::get('/home',[PdfController::class,'home'])->name('home');

Route::get('/index',[CrudController::class,'index'])->name('index');

Route::get('/crud',[CrudController::class,'crud'])->name('crud');
Route::post('/crudpost',[CrudController::class,'crudpost'])->name('crudpost');

Route::get('/edit/{id}',[CrudController::class,'edit'])->name('edit');
Route::post('/editpost/{id}',[CrudController::class,'editpost'])->name('editpost');

Route::get('/delete/{id}',[CrudController::class,'delete'])->name('delete');
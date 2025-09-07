<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ShowProductController;
use App\http\Controllers\LangController;
use App\http\Controllers\inMarrakechController;
use App\http\Controllers\ContactController;
use App\http\Controllers\VillasController;



Route::get('/inMarrakech' , [inMarrakechController::class , 'InMarrakech'])->name('inMarrakechPage');

Route::get('/villas' , [VillasController::class , 'Villas'])->name('VillasPage');

Route::get('/contactus' , [ContactController::class , 'ContactUs'])->name('ContactPage');

Route::get('/{locale}' , [LangController::class , 'LangSwitcher'])->name('langSwitcher');

Route::get('/', [HomeController::class , 'Index'])->name('homepage');

Route::get('/property/{id}', [ShowProductController::class, 'PropertyShow'])->name('PropertyShow');

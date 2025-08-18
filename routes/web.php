<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InMarrakechController;
use App\Http\Controllers\ShowProductController;
use App\Http\Controllers\Contact;


Route::get('/{locale}' , [App\http\Controllers\LangController::class , 'LangSwitcher'])->name('langSwitcher');

Route::get('/', [HomeController::class , 'Index'])->name('homepage');

Route::get('/inMarrakech' , [InMarrakechController::class , 'InMarrakech'])->name('inMarrakechPage');

Route::get('/contact', [Contact::class , 'Contact'] )->name('contactPage');


Route::get('/property/{id}', [ShowProductController::class, 'PropertyShow'])->name('PropertyShow');

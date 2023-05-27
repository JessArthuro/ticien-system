<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\XmlController;
use App\Http\Controllers\InvoiceController;


Route::get('/', [LoginController::class, 'show']);

Route::post('/', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::post('/load_xml', [XmlController::class, 'loadXml']);

Route::resource('invoices', InvoiceController::class);
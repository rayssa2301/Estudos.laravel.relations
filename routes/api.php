<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

//Um usuário, inicialmente, pode ter apenas um endereço.
Route::get('/user', [UserController::class, 'index']);

//Buscar um usuário pelo id
Route::get('/user/{id}', [UserController::class, 'findOne']);

//incluir um novo usuário
Route::post('/users', [UserController::class, 'insert']);

Route::get('/addresses', [AddressController::class, 'index']);

//Buscar um endereco pelo id
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

//incluir um novo endereco
Route::post('/addresses', [AddressController::class, 'insert']);

Route::get('/invoices', [InvoiceController::class, 'index']);

Route::post('/invoices', [InvoiceController::class, 'createInvoices']);

Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);

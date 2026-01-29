<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
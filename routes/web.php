<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
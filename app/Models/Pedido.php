<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {
    protected $fillable = ['numero_pedido', 'fecha', 'estado', 'total', 'notas', 'cliente_id'];

    // Un pedido pertenece a un cliente
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
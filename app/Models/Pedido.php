<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model {
    use HasFactory, SoftDeletes;
    protected $fillable = ['numero_pedido', 'fecha', 'estado', 'total', 'notas', 'cliente_id'];
    protected $casts = [
        'fecha' => 'date',
    ];

    // Un pedido pertenece a un cliente
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
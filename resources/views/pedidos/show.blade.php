@extends('layouts.app')
@section('content')
    <div class="card border-info shadow">
        <div class="card-header bg-info text-white">Resumen de Venta</div>
        <div class="card-body">
            <h5>Pedido: {{ $pedido->numero_pedido }}</h5>
            <p><strong>Lector:</strong> {{ $pedido->cliente->nombre }}</p>
            <p><strong>Total:</strong> {{ $pedido->total }} €</p>
            <p><strong>Estado:</strong> {{ strtoupper($pedido->estado) }}</p>
            <p><strong>Fecha:</strong> {{ $pedido->fecha }}</p>
            <a href="{{ route('pedidos.index') }}" class="btn btn-outline-secondary">Volver</a>
        </div>
    </div>
@endsection
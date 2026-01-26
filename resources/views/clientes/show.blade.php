@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h2>Ficha del Lector: {{ $cliente->nombre }}</h2>
    </div>
    <div class="card-body">
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
        <hr>
        <h4>Historial de Pedidos de Manga</h4>
        @if($cliente->pedidos->count() > 0)
            <ul class="list-group">
                @foreach($cliente->pedidos as $pedido)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pedido: {{ $pedido->numero_pedido }} - {{ $pedido->fecha }}
                        <span class="badge bg-success rounded-pill">{{ $pedido->total }}€</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">Este cliente aún no ha realizado pedidos.</p>
        @endif
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>{{ $cliente->nombre }}</h3>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">&larr; Volver</a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <p>Email: {{ $cliente->email }} | Tel: {{ $cliente->telefono }}</p>
        </div>
    </div>
    <h4>Historial de Compras de Manga</h4>
    <table class="table table-sm">
        <thead> <tr> <th>Nº Pedido</th> <th>Total</th> <th>Estado</th> </tr> </thead>
        <tbody>
            @foreach($cliente->pedidos as $pedido)
            <tr>
                <td>{{ $pedido->numero_pedido }}</td>
                <td>{{ $pedido->total }} €</td>
                <td><span class="badge bg-secondary">{{ $pedido->estado }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
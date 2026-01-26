@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Gestión de Pedidos (Ventas de Manga)</h1>
    <a href="{{ route('pedidos.create') }}" class="btn btn-success">Registrar Venta</a>
</div>

<table class="table table-bordered bg-white shadow-sm">
    <thead class="table-info">
        <tr>
            <th>Nº Pedido</th>
            <th>Lector / Cliente</th>
            <th>Estado</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->numero_pedido }}</td>
            <td><strong>{{ $pedido->cliente->nombre }}</strong></td>
            <td>
                <span class="badge {{ $pedido->estado == 'entregado' ? 'bg-success' : 'bg-warning' }}">
                    {{ strtoupper($pedido->estado) }}
                </span>
            </td>
            <td>{{ $pedido->total }}€</td>
            <td>
                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-sm btn-outline-primary">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
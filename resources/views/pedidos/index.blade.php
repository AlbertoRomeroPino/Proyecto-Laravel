@extends('layouts.app')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between mb-3">
        <h2>Pedidos Realizados</h2>
        <a href="{{ route('pedidos.create') }}" class="btn btn-success">+ Nueva Venta</a>
    </div>
    <table class="table shadow-sm">
        <thead class="table-info">
            <tr> <th>Nº Pedido</th> <th>Lector</th> <th>Total</th> <th>Estado</th> <th>Acciones</th> </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->numero_pedido }}</td>
                <td><strong>{{ $pedido->cliente->nombre }}</strong></td>
                <td>{{ $pedido->total }} €</td>
                <td>{{ $pedido->estado }}</td>
                <td>
                    <a href="{{ route('pedidos.show', $pedido) }}" class="btn btn-sm btn-info">Detalle</a>
                    <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-sm btn-warning">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
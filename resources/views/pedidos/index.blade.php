@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>Pedidos Realizados</h1>
        <p>Gestiona todas las ventas y pedidos de manga</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <h4>Total Pedidos</h4>
            <div class="stat-number">{{ $pedidos->count() }}</div>
        </div>
        <div class="stat-card">
            <h4>Pedidos Pendientes</h4>
            <div class="stat-number">{{ $pedidos->where('estado', 'pendiente')->count() }}</div>
        </div>
        <div class="stat-card">
            <h4>Pedidos Enviados</h4>
            <div class="stat-number">{{ $pedidos->where('estado', 'enviado')->count() }}</div>
        </div>
        <div class="stat-card">
            <h4>Pedidos Entregados</h4>
            <div class="stat-number">{{ $pedidos->where('estado', 'entregado')->count() }}</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Lista de Pedidos</span>
                <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Nuevo Pedido</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nº Pedido</th>
                        <th>Lector</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->numero_pedido }}</td>
                        <td><strong>{{ $pedido->cliente->nombre }}</strong></td>
                        <td>{{ number_format($pedido->total, 2) }} €</td>
                        <td>
                            <span class="status-badge status-{{ strtolower($pedido->estado) }}">
                                {{ $pedido->estado }}
                            </span>
                        </td>
                        <td>{{ $pedido->created_at->format('d/m/Y') }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('pedidos.show', $pedido) }}" class="btn btn-secondary">Ver</a>
                                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST" style="display: inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este pedido? Esta acción no se puede deshacer.')">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
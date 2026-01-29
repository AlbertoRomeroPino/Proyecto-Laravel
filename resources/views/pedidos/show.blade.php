@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>Detalles del Pedido</h1>
        <p>Información completa del pedido: {{ $pedido->numero_pedido }}</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>📋 Resumen del Pedido</h2>
        </div>
        <div class="card-body">
            <div class="row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                <div>
                    <h4 class="text-muted mb-3">Información del Pedido</h4>
                    <div class="mb-3">
                        <strong>Número de Pedido:</strong> {{ $pedido->numero_pedido }}
                    </div>
                    <div class="mb-3">
                        <strong>Cliente ID:</strong> {{ $pedido->cliente_id }}
                    </div>
                </div>

                <div>
                    <h4 class="text-muted mb-3">Estado y Fechas</h4>
                    <div class="mb-3">
                        <strong>Total:</strong> <span style="font-size: 1.2em; font-weight: bold; color: var(--primary-color);">{{ number_format($pedido->total, 2) }} €</span>
                    </div>
                    <div class="mb-3">
                        <strong>Estado:</strong>
                        <span class="status-badge status-{{ strtolower($pedido->estado) }}">
                            {{ ucfirst($pedido->estado) }}
                        </span>
                    </div>
                    <div class="mb-3">
                        <strong>Fecha del Pedido:</strong> {{ $pedido->fecha }}
                    </div>
                    <div class="mb-3">
                        <strong>Notas:</strong> {{ $pedido->notas ?: 'Sin notas' }}
                    </div>
                    <div class="mb-3">
                        <strong>Fecha de Registro:</strong> {{ $pedido->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3 mt-4">
                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning">Editar Pedido</a>
                <form action="{{ route('pedidos.destroy', $pedido) }}" method="POST" style="display: inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este pedido? Esta acción no se puede deshacer.')">Eliminar Pedido</button>
                </form>
                <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Volver al Listado</a>
            </div>
        </div>
    </div>
</div>
@endsection
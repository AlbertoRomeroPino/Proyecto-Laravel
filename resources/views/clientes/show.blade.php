@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>{{ $cliente->nombre }}</h1>
        <p>Información detallada del lector</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Detalles del Lector</h2>
        </div>
        <div class="card-body">
            <div class="row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                <div>
                    <h4 class="text-muted mb-3">Información Personal</h4>
                    <div class="mb-3">
                        <strong>Nombre:</strong> {{ $cliente->nombre }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $cliente->email }}
                    </div>
                    <div class="mb-3">
                        <strong>Teléfono:</strong> {{ $cliente->telefono ?: 'No especificado' }}
                    </div>
                    <div class="mb-3">
                        <strong>Dirección:</strong> {{ $cliente->direccion ?: 'No especificada' }}
                    </div>
                </div>

                <div>
                    <h4 class="text-muted mb-3">Estado y Registro</h4>
                    <div class="mb-3">
                        <strong>Estado:</strong>
                        <span class="status-badge" style="background: {{ $cliente->activo ? 'var(--success-color)' : 'var(--danger-color)' }}; color: white; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem;">
                            {{ $cliente->activo ? 'Activo' : 'Inactivo' }}
                        </span>
                    </div>
                    <div class="mb-3">
                        <strong>Fecha de Registro:</strong> {{ $cliente->created_at->format('d/m/Y') }}
                    </div>
                    <div class="mb-3">
                        <strong>Última Actualización:</strong> {{ $cliente->updated_at->format('d/m/Y') }}
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3 mt-4">
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar Lector</a>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver al Listado</a>
            </div>
        </div>
    </div>

    @if($cliente->pedidos->count() > 0)
    <div class="card" style="margin-top: 2rem;">
        <div class="card-header">
            <h2>Pedidos Asociados ({{ $cliente->pedidos->count() }})</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nº Pedido</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cliente->pedidos as $pedido)
                    <tr>
                        <td><strong>{{ $pedido->numero_pedido }}</strong></td>
                        <td>{{ $pedido->fecha->format('d/m/Y') }}</td>
                        <td>{{ number_format($pedido->total, 2) }} €</td>
                        <td>
                            <span class="status-badge status-{{ strtolower($pedido->estado) }}" style="padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem;">
                                {{ ucfirst($pedido->estado) }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('pedidos.show', $pedido) }}" class="btn btn-secondary">Ver</a>
                                <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning">Editar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
    <div class="card" style="margin-top: 2rem;">
        <div class="card-body">
            <p class="text-muted" style="text-align: center; padding: 2rem 0;">Este cliente no tiene pedidos registrados.</p>
        </div>
    </div>
    @endif
</div>
@endsection
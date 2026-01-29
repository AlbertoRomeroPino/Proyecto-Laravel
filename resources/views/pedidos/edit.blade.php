@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>Modificar Pedido</h1>
        <p>Editando pedido: {{ $pedido->numero_pedido }}</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Editar Pedido</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('pedidos.update', $pedido) }}" method="POST">
                @csrf @method('PUT')

                <div class="form-group">
                    <label class="form-label">Nº Pedido:</label>
                    <input type="text" class="form-control" value="{{ $pedido->numero_pedido }}" readonly>
                    <small class="text-muted">No se puede modificar el número de pedido</small>
                </div>

                <div class="form-group">
                    <label class="form-label">Cliente:</label>
                    <input type="text" class="form-control" value="{{ $pedido->cliente->nombre }}" readonly>
                    <small class="text-muted">No se puede cambiar el cliente del pedido</small>
                </div>

                <div class="form-group">
                    <label class="form-label">Total (€):</label>
                    <input type="number" step="0.01" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $pedido->total) }}" required>
                    @error('total')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Fecha:</label>
                    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $pedido->fecha) }}" required>
                    @error('fecha')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Estado:</label>
                    <select name="estado" class="form-control @error('estado') is-invalid @enderror" required>
                        <option value="pendiente" {{ old('estado', $pedido->estado) == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="enviado" {{ old('estado', $pedido->estado) == 'enviado' ? 'selected' : '' }}>Enviado</option>
                        <option value="entregado" {{ old('estado', $pedido->estado) == 'entregado' ? 'selected' : '' }}>Entregado</option>
                        <option value="cancelado" {{ old('estado', $pedido->estado) == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                    </select>
                    @error('estado')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-3 mt-4">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
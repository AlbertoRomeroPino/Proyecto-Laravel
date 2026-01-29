@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>Registrar Nuevo Pedido</h1>
        <p>Crea un nuevo pedido para un lector</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Crear Nuevo Pedido</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('pedidos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label">Nº Pedido:</label>
                    <input type="text" name="numero_pedido" class="form-control @error('numero_pedido') is-invalid @enderror" value="{{ old('numero_pedido') }}" required>
                    @error('numero_pedido')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Cliente:</label>
                    <select name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" required>
                        <option value="">Selecciona un cliente</option>
                        @foreach(\App\Models\Cliente::all() as $cliente)
                            <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }} ({{ $cliente->email }})</option>
                        @endforeach
                    </select>
                    @error('cliente_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Total (€):</label>
                    <input type="number" step="0.01" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total') }}" required>
                    @error('total')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Fecha:</label>
                    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', date('Y-m-d')) }}" required>
                    @error('fecha')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Estado:</label>
                    <select name="estado" class="form-control @error('estado') is-invalid @enderror" required>
                        <option value="pendiente" {{ old('estado', 'pendiente') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="enviado" {{ old('estado') == 'enviado' ? 'selected' : '' }}>Enviado</option>
                        <option value="entregado" {{ old('estado') == 'entregado' ? 'selected' : '' }}>Entregado</option>
                        <option value="cancelado" {{ old('estado') == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                    </select>
                    @error('estado')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-3 mt-4">
                    <button type="submit" class="btn btn-primary">Crear Pedido</button>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
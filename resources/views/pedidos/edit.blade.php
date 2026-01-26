@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Modificar Pedido {{ $pedido->numero_pedido }}</h2>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">&larr; Volver</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('pedidos.update', $pedido) }}" method="POST" class="card p-4 shadow-sm">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Total (€):</label>
            <input type="number" step="0.01" name="total" class="form-control" value="{{ old('total', $pedido->total) }}">
        </div>
        <div class="mb-3">
            <label>Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $pedido->fecha) }}">
        </div>
        <div class="mb-3">
            <label>Estado:</label>
            <select name="estado" class="form-select">
                @foreach(['pendiente', 'enviado', 'entregado', 'cancelado'] as $e)
                    <option value="{{ $e }}" {{ old('estado', $pedido->estado) == $e ? 'selected' : '' }}>{{ ucfirst($e) }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Guardar Cambios</button>
    </form>
@endsection
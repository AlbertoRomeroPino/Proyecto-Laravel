@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Registrar Venta de Manga</h2>
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
    <form action="{{ route('pedidos.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label>Nº Pedido:</label>
            <input type="text" name="numero_pedido" class="form-control" placeholder="MNGA-XXXX" value="{{ old('numero_pedido') }}">
        </div>
        <div class="mb-3">
            <label>Lector (Cliente):</label>
            <select name="cliente_id" class="form-select">
                @foreach(\App\Models\Cliente::all() as $c)
                    <option value="{{ $c->id }}" {{ old('cliente_id') == $c->id ? 'selected' : '' }}>{{ $c->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Total (€):</label>
            <input type="number" step="0.01" name="total" class="form-control" value="{{ old('total') }}">
        </div>
        <div class="mb-3">
            <label>Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', date('Y-m-d')) }}">
        </div>
        <div class="mb-3">
            <label>Estado:</label>
            <select name="estado" class="form-select">
                <option value="pendiente" {{ old('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="enviado" {{ old('estado') == 'enviado' ? 'selected' : '' }}>Enviado</option>
                <option value="entregado" {{ old('estado') == 'entregado' ? 'selected' : '' }}>Entregado</option>
                <option value="cancelado" {{ old('estado') == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success w-100">Finalizar Venta</button>
    </form>
@endsection
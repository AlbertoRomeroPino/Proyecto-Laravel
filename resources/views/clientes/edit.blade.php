@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Editar Datos: {{ $cliente->nombre }}</h2>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">&larr; Volver</a>
    </div>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST" class="card p-4 shadow-sm">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}">
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $cliente->email }}">
        </div>
        <div class="mb-3">
            <label>Estado:</label>
            <select name="activo" class="form-select">
                <option value="1" {{ $cliente->activo ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ !$cliente->activo ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection
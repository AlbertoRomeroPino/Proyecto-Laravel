@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>Editar Lector</h1>
        <p>Modificar información de: {{ $cliente->nombre }}</p>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Editar Datos del Lector</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('clientes.update', $cliente) }}" method="POST">
                @csrf @method('PUT')

                <div class="form-group">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $cliente->nombre) }}" required>
                    @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $cliente->email) }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono) }}">
                </div>

                <div class="form-group">
                    <label class="form-label">Dirección:</label>
                    <textarea name="direccion" class="form-control" rows="3">{{ old('direccion', $cliente->direccion) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Estado:</label>
                    <select name="activo" class="form-control">
                        <option value="1" {{ old('activo', $cliente->activo) ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ !old('activo', $cliente->activo) ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>

                <div class="d-flex gap-3 mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar Lector</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
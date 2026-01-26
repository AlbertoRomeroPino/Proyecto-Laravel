@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Dar de Alta Nuevo Lector</h2>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">&larr; Volver</a>
    </div>
    <form action="{{ route('clientes.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
            @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>Teléfono:</label>
            <input type="text" name="telefono" class="form-control">
        </div>
        <div class="mb-3">
            <label>Dirección:</label>
            <textarea name="direccion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Lector</button>
    </form>
@endsection
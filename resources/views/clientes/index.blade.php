@extends('layouts.app')
@section('content')
<div class="container fade-in">
    <div class="page-header">
        <h1>Listado de Lectores</h1>
        <p>Gestiona todos tus lectores registrados</p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <h4>Total Lectores</h4>
            <div class="stat-number">{{ $clientes->count() }}</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Lectores Registrados</span>
                <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo Lector</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-secondary">Ver</a>
                                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display: inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
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
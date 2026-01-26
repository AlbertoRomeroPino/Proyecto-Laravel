@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Listado de Lectores</h2>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">+ Nuevo Lector</a>
    </div>
    <table class="table table-white table-hover shadow-sm">
        <thead class="table-dark">
            <tr> <th>Nombre</th> <th>Email</th> <th>Acciones</th> </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Borrar lector?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
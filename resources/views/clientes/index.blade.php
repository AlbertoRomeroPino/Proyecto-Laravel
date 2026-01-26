@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Nuestros Lectores</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo Cliente</a>
</div>

<table class="table table-striped table-hover shadow-sm bg-white">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>
                <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-sm btn-info">Ver Pedidos</a>
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-warning">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
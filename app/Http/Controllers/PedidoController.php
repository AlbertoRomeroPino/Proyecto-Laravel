<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Cliente;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Usamos 'with' para que la consulta sea más eficiente (Eager Loading)
        $pedidos = Pedido::with('cliente')->get();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all(); // Traemos todos los lectores para el select
        return view('pedidos.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero_pedido' => 'required|unique:pedidos,numero_pedido',
            'cliente_id' => 'required|exists:clientes,id',
            'total' => 'required|numeric|min:0',
            'fecha' => 'required|date',
            'estado' => 'required|in:pendiente,enviado,entregado,cancelado',
        ]);

        Pedido::create($validated);

        return redirect()->route('pedidos.index')
            ->with('success', '¡El nuevo pedido ha sido registrado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $validated = $request->validate([
            'total' => 'required|numeric|min:0',
            'fecha' => 'required|date',
            'estado' => 'required|in:pendiente,enviado,entregado,cancelado',
        ]);

        $pedido->update($validated);

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado del sistema.');
    }
}

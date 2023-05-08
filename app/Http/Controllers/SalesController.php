<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SalesController extends Controller
{
    public function index()
    {
        $sale= Sale::all();
        return view('create', compact('sales'));
    }

    public function create()
    {
        $sale->id();
        $sale->string("nombre_vendedor");
        $sale->string("nombre_cliente");
        $sale->string("nombre_producto");
        $sale->string("precio");
        $sale->integer("fecha_compra");
        
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->nombre_vendedor = $request->nombre_vendedor;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return redirect()->route('sales.index');
    }


    public function show()
    {
        
    }

    public function edit()
    {
        $sale = Sale::find($id);
        return view('edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);
        $sale->nombre_vendedor = $request->nombre_vendedor;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return redirect()->route('sales.index');
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return redirect()->route('sales.index');
    }

}
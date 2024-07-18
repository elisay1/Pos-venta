<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $ventas = Venta::with('detalles.producto', 'user')
            ->where('cliente', 'like', "%{$search}%")
            ->paginate(10);
    
        foreach ($ventas as $venta) {
            $venta->metodo_pago = json_decode($venta->metodo_pago, true);
        }
    
        return view('ventas.index', compact('ventas', 'search'));
    }

    public function show($id)
    {
        $venta = Venta::with('detalles.producto')->findOrFail($id);
        
        // Decodificar metodo_pago si es una cadena JSON
        if (is_string($venta->metodo_pago)) {
            $venta->metodo_pago = json_decode($venta->metodo_pago, true);
        }
        
        return response()->json($venta);
    }
    public function store(Request $request)
    {
        // Validar los datos del pedido
        $request->validate([
            'cliente' => 'required|string',
            'documento' => 'required|string',
            'correo' => 'required|email',
            'subtotal' => 'required|numeric',
            'igv' => 'required|numeric',
            'total' => 'required|numeric',
            'comentario' => 'nullable|string',
            'metodo_pago' => 'required|array',
            'productos' => 'required|array',
        ]);

        // Crear la venta
        $venta = Venta::create([
            'cliente' => $request->cliente,
            'user_id' => Auth::id(),
            'documento' => $request->documento,
            'correo' => $request->correo,
            'subtotal' => $request->subtotal,
            'igv' => $request->igv,
            'total' => $request->total,
            'comentario' => $request->comentario,
            'metodo_pago' => json_encode($request->metodo_pago), // Almacenar como JSON
            'estado' => 'pendiente',
        ]);

        // Crear los detalles de la venta y actualizar el stock de los productos
        foreach ($request->productos as $producto) {
            $detalle = DetalleVenta::create([
                'venta_id' => $venta->id,
                'producto_id' => $producto['id'],
                'producto_venta' => $producto['costo_venta'],
                'cantidad' => $producto['cantidad'],
                'total' => $producto['costo_venta'] * $producto['cantidad'],
                'estado' => 'pendiente',
            ]);

            // Actualizar el stock del producto
            $productoModelo = Producto::find($producto['id']);
            if ($productoModelo) {
                $productoModelo->stock -= $producto['cantidad'];
                $productoModelo->save();
            }
        }

        return response()->json(['message' => 'Compra realizada con éxito', 'venta' => $venta], 201);
    }
}

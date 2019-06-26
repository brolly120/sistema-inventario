<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        return view('productos');
    }

    public function store()
    {

        request()->validate([
            'NombreProducto' => 'required',
            'LoteProducto' => 'required',
            'CantidadUnidad' => 'required',
            'PrecioUnidad' => 'required',
            'FechaVencimiento' => 'required'
        ]);

        $nombre = request()->NombreProducto;
        $lote = request()->LoteProducto;
        $cantidad = request()->CantidadUnidad;
        $precio = request()->PrecioUnidad;
        $fechaVencimiento = request()->FechaVencimiento;

        $producto = Producto::where('nombre', '=', $nombre)->first();
        if ($producto) {
            $cantidadBodega = $producto->cantidad;
            $producto->cantidad = $cantidadBodega + $cantidad;
        }else{
            $producto = new Producto;
            $producto->nombre = $nombre;
            $producto->cantidad = $cantidad;            
        }
        $producto->lote = $lote;
        $producto->precio = $precio;
        $producto->fecha_vencimiento = $fechaVencimiento;
        $producto->save();
        echo "<script>alert('El producto fue registrado exitosamente')</script>";
        return view('welcome');
    }
}

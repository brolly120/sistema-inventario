<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
        return view('compras',[
            'productos' => Producto::get()
        ]);
    }   

    public function store()
    {   

        request()->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Cedula' => 'required',
            'Ciudad' => 'required',
            'Producto' => 'required',
            'Cantidad' => 'required'
        ]);
        //Datos de entrada
        $nombre = request()->Nombre;
        $apellido = request()->Apellido;
        $producto_id = request()->Producto;
        $cedula = request()->Cedula;
        $ciudad = request()->Ciudad;
        $cantidad = request()->Cantidad;

        //Datos del producto seleccionado
        $producto = Producto::find($producto_id);

        //Datos necesarios
        $cantidadBodega = $producto->cantidad;
        $precio = $producto->precio;
        $total = 0;

        //Operaciones
        $total = $precio*$cantidad;
        if ($cantidadBodega < $cantidad ) {
            echo "<script>alert('No se pudo procesar la compra porque la cantidad de unidades ingresada es mayor a la cantidad de unidades en bodega')</script>";
            return view('welcome');
        }
        $producto->cantidad = $cantidadBodega - $cantidad;
        $producto->save();

        $validar = [
            ['total' => $total],
            ['nombre' => $nombre],
            ['apellido' => $apellido],
            ['producto' => $producto->nombre],
            ['cedula' => $cedula],
            ['ciudad' => $ciudad],
            ['cantidad' => $cantidad],
            ['precio' => $precio],
            ['total' => $total],
            ['productoId' => $producto_id]
        ];
        return view('validacion',compact('validar'));
    }

}

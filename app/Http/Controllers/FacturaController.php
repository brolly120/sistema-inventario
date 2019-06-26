<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{

    public function store()
    {
        echo "<script>alert('La compra se realizó exitosamente')</script>";
        $nombre = request()->Nombre;
        $apellido = request()->Apellido;
        $cedula = request()->Cedula;
        $ciudad = request()->Ciudad;
        $producto = request()->ProductoNombre;
        $cantidad = request()->Cantidad;
        $precio = request()->Precio;
        $precioTotal = request()->PrecioTotal;

        $factura = [
            ['nombre' => $nombre],
            ['apellido' => $apellido],
            ['cedula' => $cedula],
            ['ciudad' => $ciudad],
            ['producto' => $producto],
            ['cantidad' => $cantidad],
            ['precio' => $precio],
            ['precioTotal' => $precioTotal]
        ];
        return view('factura',compact('factura'));
    }

}

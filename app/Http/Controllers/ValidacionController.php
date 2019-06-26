<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ValidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('validacion');
    }

    public function edit($id,$cantidad)
    {
        $producto = Producto::find($id);
        $cantidadBodega = $producto->cantidad;
        $producto->cantidad = $cantidadBodega + $cantidad;
        $producto->save();
        echo "<script>alert('Se ha canselado la compra')</script>";
        return view('welcome');
    }

}

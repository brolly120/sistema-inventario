@extends('layout')

@section('form-compras')
	<h1 class="flex-center">FACTURA DE LA COMPRA</h1>

	<h2 style="color:blue">DATOS DEL CLIENTE</h2>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Fecha: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="datetime" name="fecha"  value="<?php echo date("Y-m-d\TH-i");?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Nº de Factura: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="<?php echo rand(1000000000,9999999999);?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Nombre: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[0]['nombre']}}">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Apellido: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[1]['apellido']}}">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Cédula: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[2]['cedula']}}">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Ciudad: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[3]['ciudad']}}">
		</div>
	</div>
	<br>
	<h2 style="color:blue">DATOS DE LA EMPRESA</h2>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Empresa: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="Prueba Inventario">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>NIT: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="<?php echo rand(1000000000,9999999999);?>">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Sucursal: </label>
		</div>
		<div class="form-group col-md-1">
		    <input readonly="readonly" type="text" name="fecha"  value="<?php echo rand(1,10);?>">
		</div>
	</div>
	<br>
	<h2 style="color:blue">DATOS DE LA COMPRA</h2>
	<div class="form-row">
		<div class="form-group col-md-1">
		    <label>Producto: </label>
		</div>
		<div class="form-group col-md-2">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[4]['producto']}}">
		</div>
		<div class="form-group col-md-1">
		    <label>Precio Unidad: </label>
		</div>
		<div class="form-group col-md-2">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[6]['precio']}}">
		</div>
		<div class="form-group col-md-1">
		    <label>Cantidad: </label>
		</div>
		<div class="form-group col-md-2">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[5]['cantidad']}}">
		</div>
		<div class="form-group col-md-1">
		    <label>Total: </label>
		</div>
		<div class="form-group col-md-2">
		    <input readonly="readonly" type="text" name="fecha"  value="{{ $factura[7]['precioTotal']}}">
		</div>
	</div>
	<a href="{{ url('/') }} " class="btn btn-xs btn-info pull-right">Aceptar</a>
@endsection
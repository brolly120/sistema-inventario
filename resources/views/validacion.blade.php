@extends('layout')

@section('form-compras')
	<h1 class="flex-center">VALIDACIÓN DE LA COMPRA</h1>
	<form method="POST" action="{{ route('factura.store')}}">	
		@csrf
	  	<div class="form-row">
		    <div class="form-group col-md-6">
		      <label>Nombre</label>
		      <input type="text" readonly="readonly" name="Nombre" class="form-control" value="{{ $validar[1]['nombre']}}">
		    </div>
		    <div class="form-group col-md-6">
		      <label>Apellido</label>
		      <input type="text" readonly="readonly" name="Apellido" class="form-control" value="{{ $validar[2]['apellido']}}">
		    </div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Cédula</label>
				<input type="text" readonly="readonly" name="Cedula" class="form-control" value="{{ $validar[4]['cedula']}}">
			</div>
			<div class="form-group col-md-6">
				<label>Ciudad</label>
				<input type="text" readonly="readonly" name="Ciudad" class="form-control" value="{{ $validar[5]['ciudad']}}">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Producto</label>
				<input type="text" readonly="readonly" name="ProductoNombre" class="form-control" value="{{ $validar[3]['producto']}}">
			</div>
			<div class="form-group col-md-6">
				<label>Cantidad</label>
				<input type="text" readonly="readonly" name="Cantidad" class="form-control" value="{{ $validar[6]['cantidad']}}">
			</div>
			<div class="form-group col-md-6">
				<label>Precio</label>
				<input type="text" readonly="readonly" name="Precio" class="form-control" value="{{ $validar[7]['precio']}}">
			</div>
		</div>
		<div class="form-group">
				<label>Precio total de la compra</label>
				<input type="text" readonly="readonly" name="PrecioTotal" class="form-control" value="{{ $validar[8]['total']}}">
  		</div>
	  	<button type="submit" class="btn btn-primary">Hacer Compra</button>
	  	<a href="{{ url('/validacion/cancelar/' . $validar[9]['productoId']) . '/' . $validar[6]['cantidad']}}" class="btn btn-xs btn-info pull-right">Cancelar</a>
	</form>	
@endsection
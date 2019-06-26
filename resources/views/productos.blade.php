@extends('layout')

@section('form-compras')
	<h1 class="flex-center">AGREGAR O EDITAR PRODUCTOS EN EL INVENTARIO</h1>
	<form method="POST" action="{{ route('productos.store') }}">	
		@csrf
	  	<div class="form-row">
		    <div class="form-group col-md-6">
		      <label>Nombre del producto</label>
		      <input type="text" name="NombreProducto" class="form-control">
		      {!! $errors->first('NombreProducto','<small class="errors"><li>El nombre del producto es requerido</li></small><br>') !!}
		    </div>
		    <div class="form-group col-md-6">
		      <label>Lote</label>
		      <input type="text" name="LoteProducto" class="form-control" i>
		      {!! $errors->first('LoteProducto','<small class="errors"><li>El lote del producto es requerido</li></small><br>') !!}
		    </div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label>Cantidad de unidades</label>
				<input type="text" name="CantidadUnidad" class="form-control" >
				{!! $errors->first('CantidadUnidad','<small class="errors"><li>La cantidad de unidades es requerida</li></small><br>') !!}
			</div>
			<div class="form-group col-md-6">
				<label>Precio por unidad</label>
				<input type="text" name="PrecioUnidad" class="form-control" >
				{!! $errors->first('PrecioUnidad','<small class="errors"><li>El precio por unidad es requerido</li></small><br>') !!}
			</div>
		</div>
		<div class="form-group">
			<label>Fecha de vencimiento</label>
			<input type="date" name="FechaVencimiento" class="form-control">
			{!! $errors->first('FechaVencimiento','<small class="errors"><li>La fecha de vencimiento es requerida</li></small><br>') !!}
		</div>
		<label>Nota: si el nombre del producto ya existe, no se agregará un nuevo producto, si no, que editará el producto con ese nombre y se agregara la cantidad</label>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Agregar</button>
		</div>
	</form>
@endsection
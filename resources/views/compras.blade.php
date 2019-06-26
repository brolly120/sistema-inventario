@extends('layout')

@section('form-compras')
	<h1 class="flex-center">COMPRAR PRODUCTOS</h1>
	<form method="POST" action="{{ route('compras.store') }}">	
		@csrf
	  	<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputNombre">Nombre</label>
		      <input type="text" name="Nombre" class="form-control" id="inputNombre" placeholder="Nombre">
		      {!! $errors->first('Nombre','<small class="errors"><li>El nombre es requerido</li></small><br>') !!}
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputApellido">Apellido</label>
		      <input type="text" name="Apellido" class="form-control" id="inputApellido" placeholder="Apellido">
		      {!! $errors->first('Apellido','<small class="errors"><li>El apellido es requerido</li></small><br>') !!}
		    </div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputCedula">Cédula</label>
				<input type="number" name="Cedula" class="form-control" id="inputCity" placeholder="Cédula">
				{!! $errors->first('Cedula','<small class="errors"><li>La cédula es requerida</li></small><br>') !!}
			</div>
			<div class="form-group col-md-6">
				<label for="inputCity">Ciudad</label>
				<input type="text" name="Ciudad" class="form-control" id="inputCity" placeholder="Ciudad">
				{!! $errors->first('Ciudad','<small class="errors"><li>La ciudad es requerida</li></small><br>') !!}
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputProduct">Escoja el producto</label>
				<select id="inputProduct" name="Producto" class="form-control">
					@foreach($productos as $producto)
						<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
					@endforeach    
				</select>
				{!! $errors->first('Producto','<small class="errors"><li>El producto es requerido</li></small><br>') !!}
			</div>
			<div class="form-group col-md-6">
				<label for="inputCantidad">Cantidad</label>
				<input type="text" name="Cantidad" class="form-control" id="inputCantidad">
				{!! $errors->first('Cantidad','<small class="errors"><li>La cantidad es requerida</li></small><br>') !!}
			</div>
		</div>
	  	<button type="submit" class="btn btn-primary">Validar Compra</button>
	</form>
@endsection
@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2 style="font-style: italic" ><b style="color: #242160">Agregar Responsables</b></h2>
			<br>
		<form method="POST" action="{{ route('Responsable.store') }}" role="form">
{{ csrf_field() }}
		 
									<!--Primer renglon -->
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
<input type="Nombre_ResponsableT" name="Nombre_ResponsableT" id="Nombre_ResponsableT" class="form-control input-sm"placeholder="Nombre del responsable" >
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
								<input type="text" name="Telefono" id="Telefono" class="form-control input-sm"placeholder="Telefono">
				</div>
			</div>
		</div>

									<!--Segundo renglon -->	
		<div class="form-group">
			<input type="Cargo" name="Cargo" id="Cargo" class="form-control input-sm"placeholder="Cargo">
		</div>

		<div class="row">

			<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Guardar Responsable" class="btn btn-success">
<a href="{{ route('Responsable.index') }}" class="btn btn-info btn-primary " >Atrás</a>

</div>
</div>
<hr>
		</div>
		</form>
	


@stop

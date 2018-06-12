@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2 style="font-style: italic" ><b style="color: #0D5503">Agregar Nuevo Tramite</b></h2>
			<br>
		<form method="POST" action="{{ route('Tramite.store') }}" role="form">
{{ csrf_field() }}
		 
									<!--Primer renglon -->
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
<input type="Nombre_Tramite" name="Nombre_Tramite" id="Nombre_Tramite" class="form-control input-sm"placeholder="Nombre del Tramite">
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
								<input type="text" name="Descripcion_Tramite" id="Descripcion_Tramite" class="form-control input-sm"placeholder="Descripcion del Tramite">
				</div>
			</div>
		</div>

									<!--Segundo renglon -->	
		<div class="form-group">
			<input type="id_Responsable" name="id_Responsable" id="id_Responsable" class="form-control input-sm"placeholder="Id del Responsable">
		</div>

		<div class="row">

			<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Guardar" class="btn btn-success ">
<a href="{{ route('Tramite.index') }}" class="btn btn-primary " >Atrás</a>

</div>
</div>
		</div>
		</form>
	


@stop

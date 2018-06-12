@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2 style="font-style: italic" ><b style="color: #0D5503">Editar Tramite</b></h2>
			<form method="POST" action="{{ route('Tramite.update',$tramite->id) }}" role="form">
			{{csrf_field()}}
			<input name="_method" type="hidden" value="PATCH">

			

			<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">

<input type="text" name="Nombre_Tramite" id="Nombre_Tramite" class="form-control input-sm" 
value="{{$tramite->Nombre_Tramite}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Descripcion_Tramite" id="Descripcion_Tramite" class="form-control input-sm" 
value="{{$tramite->Descripcion_Tramite}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="id_Responsable" id="id_Responsable" class="form-control input-sm" 
value="{{$tramite->id_Responsable}}">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Actualizar Tramite" class="btn btn-success ">
<a href="{{ route('Tramite.index') }}" class="btn btn-info btn-xm" >Atrás</a>
<hr>
</div>
</div>
</div>
													
					</form>
					

					
			</table>
			
		</div>
	</div>
</div>


@stop

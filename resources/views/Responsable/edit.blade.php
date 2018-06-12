@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2 style="font-style: italic" ><b style="color: #242160">Editar Responsable</b></h2>
			<form method="POST" action="{{ route('Responsable.update',$responsable->id) }}" role="form">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PATCH">



<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">

<input type="text" name="Nombre_ResponsableT" id="Nombre_ResponsableT" class="form-control input-sm" 
value="{{$responsable->Nombre_ResponsableT}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Telefono" id="Telefono" class="form-control input-sm" 
value="{{$responsable->Telefono}}">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<input type="text" name="Cargo" id="Cargo" class="form-control input-sm" 
value="{{$responsable->Cargo}}">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<input type="submit" value="Actualizar Responsable" class="btn btn-success ">
<a href="{{ route('Responsable.index') }}" class="btn btn-info " >Atrás</a>
</div>
</div>
</form>
<hr>
</div>
</div>
</div>
</div>
</section>
@endsection
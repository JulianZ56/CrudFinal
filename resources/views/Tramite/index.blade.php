@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<h2 style="font-style: italic" align="center"><b style="color: #0D5503">Lista de Tramites</b></h2>
			<div class="pull-right">
			<div class="btn-group">
			<a href="{{ route('Tramite.create') }}" class="btn btn-info" >Añadir Tramite</a>
		<br>
			</div>
			</div>
<br>
<br>
<br>

<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 0px solid #ddd;
	}

	th, td {
    text-align: left;
    padding: 16px;
	}

	tr:nth-child(even) {
    background-color: #B0EFB1
	}
</style>
			<table id="mytable" class="table table-striped">
					<tr>
						<th>Id</th>
						<th>Nombre del Tramite</th>
						<th>Descripcion del Tramite</th>
						<th>Id Responsable</th>
						<th></th>
						<th></th>
					</tr>

				@foreach($tramites as $Tramite)
					<tr>
						<td>{{$Tramite['id']}}</td>
						<td>{{$Tramite['Nombre_Tramite']}}</td>
						<td>{{$Tramite['Descripcion_Tramite']}}</td>
						<td>{{$Tramite['id_Responsable']}}</td>
						<td>

			<a class="btn btn-primary " href="{{action('TramiteController@edit', $Tramite->id)}}" >Editar</a>
					
						</td>
						<td>
					<form action="{{action('TramiteController@destroy', $Tramite->id)}}" method="post">
						{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<button class="btn btn-danger" type="submit">Eliminar</button>
						</td>
							
					</tr>
				@endforeach


					
			</table>
			<div>{{ $tramites->links() }}</div>
		</div>
	</div>
</div>

@stop

@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div><h2 style="font-style: italic" align="center"><b style="color: #242160">Lista de Responsables</b></h2></div>
			
			<div class="pull-right">
			<div class="btn-group">
			<a href="{{ route('Responsable.create') }}" class="btn btn-warning" >Añadir Responsable</a>
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
    background-color: #BDECE9
	}
</style>		
		

			<table id="mytable" class="table  table-striped">
					<tr>
						<th>Id</th>
						<th>Nombre del Responsable</th>
						<th>Telefono</th>
						<th>Cargo</th>
						<th></th>
						<th></th>
					</tr>

				@foreach($responsables as $Responsable)
					<tr>
						<td>{{$Responsable['id']}}</td>
						<td>{{$Responsable['Nombre_ResponsableT']}}</td>
						<td>{{$Responsable['Telefono']}}</td>
						<td>{{$Responsable['Cargo']}}</td>
						<td>

					<a class="btn btn-primary " href="{{action('ResponsableController@edit', $Responsable->id)}}" >Editar</a>
						</td>
						<td>
					<form action="{{action('ResponsableController@destroy', $Responsable->id)}}" method="post">
						{{csrf_field()}}
					<input name="_method" type="hidden" value="DELETE">
					<button class="btn btn-danger" type="submit">Eliminar</button>
						</td>
							
					</tr>
				@endforeach


					
			</table>
			<div>{{ $responsables->links() }}</div>
		</div>
	</div>
</div>

@stop

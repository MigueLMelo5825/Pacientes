@extends('adminlte::page')

@section('title', 'CrudMiguelMelo')

@section('content_header')
    <h1>Listado de Pacientes</h1>
@stop

@section('content')
    <a href="paciente/create" class="btn btn-primary mb-3" >Registrar Paciente</a>
<table id="paciente" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
	<thead class="bg-primary text-white">
		<tr>
			<th scope="col">TipoDocu</th>
			<th scope="col">Numero de Documento</th>
			<th scope="col">Primer Nombre</th>
			<th scope="col">Segundo Nombre</th>
			<th scope="col">Primer Apellido</th>
			<th scope="col">Segundo Apellido</th>
			<th scope="col">Genero</th>
			<th scope="col">Departamento</th>
			<th scope="col">Municipio</th>
			<th scope="col">Foto Paciente</th>
			<th scope="col">Editar - Borrar</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($pacientes as $paciente)
		<tr>
			<td>{{$paciente->TipoDocu}}</td>
			<td>{{$paciente->NumeDocu}}</td>
			<td>{{$paciente->Nombre1}}</td>
			<td>{{$paciente->Nombre2}}</td>
			<td>{{$paciente->Apellido1}}</td>
			<td>{{$paciente->Apellido2}}</td>
			<td>{{$paciente->GeneUsua}}</td>
			<td>{{$paciente->CodiDepa}}</td>
			<td>{{$paciente->CodiMuni}}</td>
			<td>{{$paciente->profile_photo_path}}</td>
			<td>
				<form action="{{route ('paciente.destroy',$paciente->NumeDocu)}}" method="POST" >
					<a href="/paciente/{{$paciente->NumeDocu}}/edit" class="btn btn-info">Editar</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Borrar</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
	
	$(document).ready(function() {
    $('#paciente').DataTable();
} );
 
</script>
@stop
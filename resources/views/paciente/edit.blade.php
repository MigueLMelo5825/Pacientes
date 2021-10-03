@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Editar Paciente</h1>
@stop

@section('content')
<form action="/paciente/{{$pacientes->NumeDocu}}" method="POST">
  @csrf
  @method('PUT')
<div class="row g-3">
  <div class="col-sm-2">
     <label for="tipodocu" class="form-label">Tipo de Documento</label>
    <select id="tipodocu" class="form-select" name="tipodocu" value="{{$pacientes->TipoDocu}}" required >
      <option selected>CC</option>
      <option>TI</option>
    </select>
  </div>
  <div class="col-sm-2">
    <label for="numedocu" class="form-label">Numero de Documento</label>
    <input type="number" class="form-control" id="numedocu" name="numedocu" value="{{$pacientes->NumeDocu}}" required >
  </div>
</div>
<div class="row g-4">
  <div class="col-sm-2 mb-3">
    <label for="nombre1" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" id="nombre1" name="nombre1" value="{{$pacientes->Nombre1}}" required >
  </div>
  <div class="col-sm-2">
    <label for="nombre2" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control" id="nombre2" name="nombre2" value="{{$pacientes->Nombre2}}">
  </div>
  <div class="col-sm-2">
    <label for="apellido1" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" id="apellido1" name="apellido1" value="{{$pacientes->Apellido1}}" required >
  </div>
  <div class="col-sm-2">
    <label for="apellido2" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" id="apellido2" name="apellido2" value="{{$pacientes->Apellido2}}">
  </div>
</div>
<div class="row g-3">
  <div class="col-md-2">
    <label for="geneusua" class="form-label">Genero</label>
    <select id="geneusua" class="form-select" name="geneusua" value="{{$pacientes->GeneUsua}}" required >
      <option selected>M</option>
      <option>F</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="codidepa" class="form-label">Departamento</label>
    <input type="text" class="form-control" id="codidepa" name="codidepa" value="{{$pacientes->CodiDepa}}" required >
  </div>
  <div class="col-md-2">
    <label for="codimuni" class="form-label">Municipio</label>
    <input type="text" class="form-control" id="codimuni" name="codimuni" value="{{$pacientes->CodiMuni}}" required >
  </div>
</div>
<div class="col-md-5 mb-3">
  <label for="formFile" class="form-label">Subir Foto</label>
  <input class="form-control" type="file" id="profile_photo_path" name="profile_photo_path" value="{{$pacientes->profile_photo_path}}">
</div>
 <a href="/paciente" class="btn btn-secondary" tabindex="5">Cancelar</a>
 <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
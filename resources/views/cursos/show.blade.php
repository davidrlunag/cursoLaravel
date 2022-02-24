@extends('cursos.layout')
@section('title')
    <title>Laravel APP /Mostrando Informacion de Cursos</title>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crear  nuevo  Curso</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $curso->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $curso->description }}
        </div>
    </div>
</div>
@endsection
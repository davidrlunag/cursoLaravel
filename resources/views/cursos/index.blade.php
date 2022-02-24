@extends('cursos.layout')
@section('title')
    <title>Pagina para el manejo de Cursos</title>
@endsection
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<div class="pull-right">
    <a class="btn btn-success" href="{{ route('cursos.create') }}"> Crear Curso</a>
</div>
<table class="table table-bordered" style="border:1px red solid;width:80%">
    <tr style="border:1px red solid">
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($cursos as $curso)
    <tr>
        <td style="border:1px red solid">{{ $curso->id}}</td>
        <td style="border:1px red solid">{{ $curso->name }}</td>
        <td style="border:1px red solid">{{ $curso->description }}</td>
        <td style="border:1px red solid">
            <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('cursos.show',$curso->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('cursos.edit',$curso->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
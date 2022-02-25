@extends('categorias.layout')
@section('title')
    <title>Pagina para el manejo de Categorias</title>
@endsection
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<div class="pull-right">
    <a class="btn btn-success" href="{{ route('categorias.create') }}"> Crear Curso</a>
</div>
<table class="table table-bordered" style="border:1px red solid;width:80%">
    <tr style="border:1px red solid">
        <th>No</th>
        <th>Name</th>
        <th>Cursos</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($categorias as $cat)
    <tr>
        <td style="border:1px red solid">{{ $cat->id}}</td>
        <td style="border:1px red solid">{{ $cat->name }}</td>
        <td style="border:1px red solid">
            @foreach ($cat->cursos as $cur)
                {{ $cur->name }} <br>
            @endforeach
        </td>
        <td style="border:1px red solid">
            <form action="{{ route('categorias.destroy',$cat->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('cursos.show',$cat->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('cursos.edit',$cat->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
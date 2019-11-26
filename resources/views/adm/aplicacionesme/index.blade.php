@extends('layouts.app')

@section('content')
<form action="{{route('apliindex')}}" method="post" enctype="multipart/form-data ">   
    @method('POST') 
      @csrf


    
<table class="table table- light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Texto</th>
            <th>Descripcion</th>
            <th>pdf</th>
            <th>Acciones</th>
        </tr>
    </head>
    <tbody>
    @foreach( $datosaplicaciones as $aplicaciones)
            <tr>
                <td>{{$aplicaciones->id}}</td>
                <td>{{$aplicaciones->titulos}}</td>
                <td>{{$aplicaciones->imagenes}}</td>
                <td>{{$aplicaciones->texto}}</td>
                <td>{{$aplicaciones->descripcion}}</td>
                <td>{{$aplicaciones->pdf}}</td>
                <td>
                    <a href="{{ route('apliedit', $aplicaciones->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                    <a href="{{ route('aplidelete', $aplicaciones->id) }}" class="btn btn-warning" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash"></i> Borrar</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection
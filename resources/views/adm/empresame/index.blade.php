@extends('layouts.app')

@section('content')
<form action="{{route('empresaindex')}}" method="post" enctype="multipart/form-data ">   
    @method('POST') 
      @csrf

      
<table class="table table- light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Texto</th>
            <th>Imagen</th>
            <th>Linea</th>
            <th>Acciones</th>
        </tr>
    </head>
    <tbody>
    @foreach( $datosempresa as $empresa )
            <tr>
                <td>{{$empresa->id}}</td>
                <td>{{$empresa->titulo}}</td>
                <td>{{$empresa->texto}}</td>
                <td>
                
                <img src="{{asset('storage').'/'.$empresa->imagen}}" alt="" width="200">

               
                
                </td>
                <td>{{$empresa->linea}}</td>  
                <td> 
                
                <a href="{{ route('empresaedit', $empresa->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                    <a href="{{ route('empresadelete', $empresa->id) }}" class="btn btn-warning" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash"></i> Borrar</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection
@extends('layouts.app')

@section('content')
<form action="{{route('traindex')}}" method="post" enctype="multipart/form-data ">   
    @method('POST') 
      @csrf

      
<table class="table table- light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Texto</th>    
            <th>Acciones</th>
        </tr>
    </head>
    <tbody>
    @foreach( $datosTrabajosRealiz as $trabajosrealiz )
            <tr>
                <td>{{$trabajosrealiz->id}}</td>
                <td>{{$trabajosrealiz->titulo}}</td>
                <td>{{$trabajosrealiz->texto}}</td>
                <td>{{$trabajosrealiz->imagen}}</td>
                <td>{{$trabajosrealiz->linea}}</td>  
                <td> 
                
                <a href="{{ route('traedit', $trabajosrealiz->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                    <a href="{{ route('tradelete', $trabajosrealiz->id) }}" class="btn btn-warning" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash"></i> Borrar</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection
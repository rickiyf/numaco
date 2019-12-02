@extends('layouts.app')

@section('content')
<form action="{{route('logosindex')}}" method="post" enctype="multipart/form-data ">   
    @method('POST') 
      @csrf

      
<table class="table table- light">
    <thead class="thead-light">
        <tr>
            <th>id</th>        
            <th>Texto</th>
            <th>Imagen</th>         
            <th>Acciones</th>
        </tr>
    </head>
    <tbody>
    @foreach( $datoslogos as $logos )
            <tr>
                <td>{{$logos->id}}</td>         
                <td>{{$logos->texto}}</td>
                <td>
                
                <img src="{{  asset(Storage::url($logos->imagen)) }}" alt="" style= "width: 200px";>
                    {{  asset(Storage::url($logos->imagen)) }}
                
                </td>
                
                <td>
              <!--  <a href="{{ route('empresaedit', $logos->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>-->
                    <a href="{{ route('logosdelete', $logos->id) }}" class="btn btn-warning" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash"></i> Borrar</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection
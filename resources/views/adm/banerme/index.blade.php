@extends('layouts.app')

@section('content')
<form action="{{route('banerindex')}}" method="post" enctype="multipart/form-data ">   
    @method('POST') 
      @csrf


    
<table class="table table- light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Texto</th>
            <th>Texto</th>
            <th>Imagen</th>
            <th>Seccion</th>
            <th>Orden</th>
            <th>Acciones</th>
            
        </tr>
    </head>
    <tbody>
    @foreach( $datosBaner as $baner)
            <tr>
                <td>{{$baner->id}}</td>
                <td>{{$baner->texto1}}</td>
                <td>{{$baner->texto2}}</td>
                <td>
                {{  asset(Storage::url($baner->imagen)) }}
                <img src="{{  asset(Storage::url($baner->imagen)) }}" alt="" style= "width: 200px";>
                
                </td>
                <td>{{$baner->seccion}}</td>
                <td>{{$baner->orden}}</td>
                <td>
                    <a href="{{ route('baneredit', $baner->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                    <a href="{{ route('banerdelete', $baner->id) }}" class="btn btn-warning" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash"></i> Borrar</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection
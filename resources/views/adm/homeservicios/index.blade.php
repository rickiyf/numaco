@extends('layouts.app')

@section('content')
<form action="{{route('contactoindex')}}" method="post" enctype="multipart/form-data ">   
    @method('POST') 
      @csrf

      
<table class="table table- light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Mapa</th>
            <th>Direccion</th>
            <th>Telefono1</th>
            <th>Telefono2</th>
            <th>Correo</th>
            <th>Texto</th>
            <th>Acciones</th>
        </tr>
    </head>
    <tbody>
    @foreach( $datoscontacto as $contacto )
            <tr>
                <td>{{$contacto->id}}</td>
                <td>{{$contacto->mapa}}</td>
                <td>{{$contacto->direccion}}</td>
                <td>{{$contacto->telefono1}}</td>
                <td>{{$contacto->telefono2}}</td>
                <td>{{$contacto->correo}}</td>
                <td>{{$contacto->texto}}</td>
                <td> 
                
                <a href="{{ route('contactoedit', $contacto->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                    <a href="{{ route('contactodelete', $contacto->id) }}" class="btn btn-warning" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash"></i> Borrar</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection
@extends('layouts.app')

@section('content')
@section('content')
<form action="{{route('contactostore')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf

    <div class="form-group"> 
         <label for="exampleInputEmail1">Mapa</label>

    </div>   

    <div class="form-group">
      <label for="exampleInputEmail1">Direccion</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="direcciones" value="{{$contacto->direccion}}" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Telefono1</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono1" value="{{$contacto->telefono1}}" placeholder="Colocar texto">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Telefono2</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono2" value="{{$contacto->telefono2}}" placeholder="Colocar texto">
    </div>

    <div class="form-group">
            <label for="exampleInputPassword1">Correo</label>            
            <input type="email" class="form-control" id="exampleInputEmail1" name="correo" value="{{$contacto->correo}}" aria-describedby="emailHelp" placeholder="Escribir mail">
          <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
            <label for="exampleInputPassword1">Texto</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="texto" value="{{$contacto->texto}}" placeholder="Colocar texto">
          </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
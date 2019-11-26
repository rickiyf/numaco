@extends('layouts.app')

@section('content')
@section('content')
<form action="{{route('contactocreate')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf

    <div class="form-group"> 
         <label for="exampleInputEmail1">Mapa</label>

    </div>   

    <div class="form-group">
      <label for="exampleInputEmail1">Direccion</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="direcciones" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Telefono1</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono1" placeholder="Colocar texto">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Telefono2</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono2" placeholder="Colocar texto">
    </div>

    <div class="form-group">
            <label for="exampleInputPassword1">Correo</label>            
            <input type="email" class="form-control" id="exampleInputEmail1" name="correo" aria-describedby="emailHelp" placeholder="Escribir mail">
          <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
            <label for="exampleInputPassword1">Texto</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="texto" placeholder="Colocar texto">
          </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
@extends('layouts.app')

@section('content')
<form action="{{route('aplicreate')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf

    <label for="titule">Aplicaciones</label>

    <div class="form-group">
      <label for="titule">Titulo</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="titule" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="title"  class="form-text text-muted"></small>
    </div>

    <label for="custom-file">Imagen</label>
    <div class="custom-file">
            
            <input type="file" class="custom-file-input" id="customFile" name=imagen>
            <label class="custom-file-label" for="customFile">Choose file</label>
   </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Texto</label>
      <input type="Texto" class="form-control" id="exampleInputPassword1" name=texto placeholder="Colocar texto">
    </div>

    <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="Texto" class="form-control" id="exampleInputPassword1" name=descripcion placeholder="Colocar texto">
   </div>
    
          

    <button type="submit" class="btn btn-primary">Cargar</button>
  </form>

@endsection
@extends('layouts.app')

@section('content')
<form action="{{route('aplicreate')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf

    <label for="titule">Aplicaciones</label>

    <div class="form-group">
      <label for="titule">Titulo</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="titule" value="{{$aplicaciones->titulo}}" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="title"  class="form-text text-muted"></small>
    </div>

    <label for="custom-file">Imagen</label>
    <br/>
      {{ $aplicaciones->imagen}}
      <br/>
    <div class="custom-file">
            
            <input type="file" class="custom-file-input" id="customFile" name=imagen >
            <label class="custom-file-label" for="customFile">Choose file</label>
   </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Texto</label>
      <br/>
      {{ $aplicaciones->imagen}}
      <input type="Texto" class="form-control" id="exampleInputPassword1" name=texto value="{{$aplicaciones->texto}}" placeholder="Colocar texto">
    </div>

    <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="Texto" class="form-control" id="exampleInputPassword1" name=descripcion value="{{$aplicaciones->descripcion}}" placeholder="Colocar texto">
   </div>
    
          

    <button type="submit" value="Edit">
  </form>

@endsection
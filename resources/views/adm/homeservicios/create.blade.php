@extends('layouts.app')


@section('content')
<form action="{{route('contactostore')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf

    <div class="form-group"> 
         <label for="exampleInputEmail1">Mapa</label>

    </div>   

    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="direcciones" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono1" placeholder="Colocar texto">
    </div>

    <label for="custom-file">Imagen</label>
    <div class="custom-file">
            
            <input type="file" class="custom-file-input" id="customFile" name=imagen>
            <label class="custom-file-label" for="customFile">Choose file</label>


    <div class="form-group">
      <label for="exampleInputPassword1">Items</label>
     
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Texto1</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="texto" placeholder="Colocar texto">
      </div>

    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Texto2</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="texto" placeholder="Colocar texto">
      </div> 

    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Texto3</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="texto" placeholder="Colocar texto">
      </div> 

    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>

      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
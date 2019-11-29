@extends('layouts.app')


@section('content')
<form action="{{route('banerstore')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf
  
    <div class="form-group"> 
         <label for="exampleInputEmail1">Mapa</label>

    </div>   

    <div class="form-group">
      <label for="exampleInputEmail1">Texto 1</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="direcciones" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Texto 2</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono1" placeholder="Colocar texto">
    </div>

    <label for="custom-file">Imagen</label>
    <div class="custom-file">
            
            <input type="file" class="custom-file-input" id="customFile" name=imagen>
            <label class="custom-file-label" for="customFile">Choose file</label>

                        <!--   Seccion  -->

                        <select class="custom-select">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                  
    <!--
    <div class="form-group">
      <label for="exampleInputPassword1">Seccion</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="telefono2" placeholder="Colocar texto">
    </div>
    -->
    
    <div class="form-group">
            <label for="orden">Orden</label>
            <input type="text" class="form-control" id="orden" name="orden" placeholder="Colocar texto">
          </div>
      
    <button type="submit" class="btn btn-primary">Añadir</button>
  </form>

@endsection
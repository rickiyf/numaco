@extends('layouts.app')

@section('content')
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

            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="home" value="option1">
                    <label class="form-check-label" for="home">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="empresa" value="option2">
                    <label class="form-check-label" for="empresa">2</label>
                  </div>
                  
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
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
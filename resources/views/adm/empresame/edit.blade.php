@extends('layouts.app')

@section('content')

<form action="{{route('empresastore')}}" method="post" enctype="multipart/form-data ">   
  @method('POST') 
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titulo</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$empresa->titulo}}" aria-describedby="emailHelp" placeholder="Escribir titulo">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="text">Texto</label>
      <input type="text" class="form-control" id="text" name="text" value="{{$empresa->texto}}" placeholder="Colocar texto">
    </div>
    
           
    <div class="custom-file">
            
            <input type="file" class="custom-file-input" id="customFile" name="imagen" value="{{$empresa->imagen}}" >
            <label class="custom-file-label" for="customFile">Choose file</label>
   </div>

         <div class="form-group"> 
              <label for="linea">Linea ttttemporal</label>
              <input type="text" class="form-control" id="linea" name="linea" value="{{$empresa->linea}}" placeholder="Colocar texto">
         </div>   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
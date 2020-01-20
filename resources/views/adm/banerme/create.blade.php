@extends('layouts.app')

@section('content')

<form action="{{route('banerstore')}}" method="post" enctype="multipart/form-data">   
  @method('POST') 
    @csrf
    <div class="form-group">
          <label for="exampleInputPassword1">Texto</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="texto1" placeholder="Colocar texto">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Texto</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="texto2" placeholder="Colocar texto">
        </div>
 
        <label for="custom-file">Imagen</label>
        <div class="custom-file">
                
                <input type="file" class="custom-file-input" id="customFile" name="imagen">
                <label class="custom-file-label" for="customFile">Choose file</label>
       </div>
    
       <select class="custom-select">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      
   
@endsection


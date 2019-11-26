@extends('layouts.app')

@section('content')
<div class="container">
  <!-- Content here -->

<div class="list-group">

    <a href="#" class="list-group-item list-group-item-action active">
      Cras justo odio
    </a>
    <a href="{{route('empresacreate')}}" class="list-group-item list-group-item-action">Empresa</a>
    <a href="{{route('aplicacion')}}" class="list-group-item list-group-item-action">Aplicacion</a>
    <a href="{{route('trabajosrealiz')}}" class="list-group-item list-group-item-action">Trabajos Realizados</a>
    <a href="{{route('contacto')}}" class="list-group-item list-group-item-action">Contacto</a>
  </div>
  </div>
@endsection
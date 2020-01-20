@extends('layouts.inicioapp')

@section('content')

 <style>
 
 .text {
   color: red;
   margin-bottom: 200px;
   background: rgba(0,0,0,0.6);
    
 }
 .title{
  font-size:40pt; 
 }
 .parrafo{
  font-size:20pt; 
 }
 .baner{
   height:500px;
   width:1400px;
 }

 .imagenes{
  flex: 1 1 auto;
  display: flex;
  justify-content-center
  
 }
 .picture{
   
   
  
   
   width: 15%;
   flex-flow: row wrap;
   margin: 10px 10px 10px 10px;
   padding: 10px;
 }

 
 </style>
<div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
            <div class="carousel-inner baner mx-auto">
              <div class="carousel-item active">
                  <img src="storage\slider\GVl2aIAMNAWJqXEXhbmtKaJNPqbf3rAkAlKY5aoz.jpeg" class="d-block w-100  "  alt="..." >
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="title">First slide label</h2>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item baner mx-auto">
                <img src="storage\slider\GVl2aIAMNAWJqXEXhbmtKaJNPqbf3rAkAlKY5aoz.jpeg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block text ">
                    <h1 class="title">Second slide label</h1>
                    <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item baner mx-auto">
                  <img src="storage\slider\pwGH8JDudfuXnqn30qIOccsXIoVwvCzVNzCulFz2.jpeg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <h1 class="title">Third slide label</h1>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
             </div>
     
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      </div>
      <div class="d-flex ">
    <div class="justify-content-center imagenes ">
    <img src="storage\manhatan.jpeg" class="justify-content-center d-block picture" alt="...">
    <img src="storage\manhatan.jpeg" class="justify-content-center d-block picture" alt="...">
    <img src="storage\manhatan.jpeg" class="justify-content-center d-block picture" alt="...">
    </div>
    </div>
</div>

  @endsection
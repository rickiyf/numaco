<!-- <div class="container-fluid">
 <div class="container-fluid">
    <div class="row">
       <div class="container">
            <div class="d-flex justify-content-end"  >
              


               
               

            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-white py-0" style="box-shadow: unset; ">
<div class="container">
    
    
    <div class="collapse navbar-collapse" id="navbarNav">
     

        </ul>
    </div>
</div>
</nav>-->




  <!--<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container text-center pt-4">
 
  
  
  <div class="nav justify-content-md-center" id="navbarNav">
  
    <ul class="navbar-nav mr-center mt-center mt-lg-0">
    
      <li class="nav-item active">
        <a class="nav-link" href="#">Empresa <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Aplicaciones <span class="sr-only">(current)</span></a>
      </li>
      

      <img src="{{  asset(Storage::url($logos[0]['imagen'])) }}" alt="" style= "width: 100px";>

      <li class="nav-item active">
        <a class="nav-link" href="#">Trabajos Realizados <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contacto <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
  </div>

</nav>-->
    <style>
    
    .item {
      /* background: blue; */
      padding: 20px; 
    }
    
    
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex justify-content-center ">
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
    <div class="d-flex justify-content-center">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item  item">
            <a class="nav-link" href="#">Empresas</a>
          </li>
          <li class="nav-item item">
            <a class="nav-link" href="#">Aplicaciones</a>
          </li>
          <img src="{{  asset(Storage::url($logos[0]['imagen'])) }}" alt="" style= "width: 100px";>
          <li class="nav-item item">
            <a class="nav-link" href="#">Trabajos Realizados</a>
          </li>
          <li class="nav-item item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
      </div>
    </div> 
    </div>
    </nav>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Font Awesome NNN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PANEL Admin <sup>NUMACO</sup></div>
              </a>
        
              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Divider -->
              <hr class="sidebar-divider">
        
              <!-- Heading -->
              <div class="sidebar-heading">
                Guia
              </div>

                    <!-- Nav Item - HomeServicios Menu -->
                    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#homeserv" aria-expanded="true" aria-controls="homeserv">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>HomeServicios</span>
                </a>
                <div id="homeserv" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="{{route('homeservi')}}">AGREGAR CONTENIDO</a>
                    <a class="collapse-item" href="{{route('contactoindex')}}">INDEX</a>                     
                  </div>
                </div>
                
                  <!-- Nav Item - Baner Menu -->
              <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#baner" aria-expanded="true" aria-controls="baner">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Baner</span>
                  </a>
                  <div id="baner" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Custom Utilities:</h6>
                      <a class="collapse-item" href="{{route('baner')}}">AGREGAR CONTENIDO</a>
                      <a class="collapse-item" href="{{route('contactoindex')}}">INDEX</a>                    
                    </div>
                  </div>
        
              <!-- Nav Item -EMPRESA Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('empresacreate')}}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Empresa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{route('empresacreate')}}">AGREGAR</a>
                    <a class="collapse-item" href="{{route('empresaindex')}}">INDEX</a>
                    
                  </div>
                </div>
              </li>
        
              <!-- Nav Item - APLICACIONES Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#aplicaciones" aria-expanded="true" aria-controls="aplicaciones">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Aplicaciones</span>
                </a>
                <div id="aplicaciones" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="{{route('aplicacion')}}">AGREGAR</a>
                    <a class="collapse-item" href="{{route('apliindex')}}">INDEX</a>                   
                  </div>
                </div>
              </li>

               <!-- Nav Item - TRABAJOS REALIZADOS  Menu -->
               <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#trabajosrea" aria-expanded="true" aria-controls="trabajosrea">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Trabajos Realizados</span>
                </a>
                <div id="trabajosrea" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="{{route('trabajosrealiz')}}">AGREGAR</a>
                    <a class="collapse-item" href="{{route('traindex')}}">INDEX</a>                   
                  </div>
                </div>
              </li>

              <!-- Nav Item - Contacto  Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contacto" aria-expanded="true" aria-controls="contacto">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Contacto</span>
                </a>
                <div id="contacto" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="{{route('contacto')}}">AGREGAR</a>
                    <a class="collapse-item" href="{{route('contactoindex')}}">INDEX</a>                    
                  </div>
                </div>

                  

                     <!-- Nav Item - Logos Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#logos" aria-expanded="true" aria-controls="logos">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Logos</span>
                </a>
                <div id="logos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="{{route('logos')}}">AGREGAR CONTENIDO</a>
                    <a class="collapse-item" href="{{route('logosindex')}}">INDEX</a>                     
                  </div>
                </div>

              <!-- Divider -->
              <hr class="sidebar-divider">
        
             
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">

                  </div>
                </div>
              </li>      
            </ul> 
            <!-- End of Sidebar -->
        
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
        
              <!-- Main Content -->
              <div id="content">  
        
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>
        
                  <!-- Topbar Search -->
                  
                    <div class="input-group">   
                      <div class="input-group-append"> 
                      </div>
                    </div>
                 
        
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
        
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                          <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>                  
                    </li>                      
                    </li>
                     <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">NUMACO</span>
                        <img class="img-profile rounded-circle" src="https://cdn.shopify.com/s/files/1/2443/6867/products/N-Roja_590x.jpg?v=1526164198/60x60">
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                        </a>
                      </div>
                    </li>        
                  </ul>        
                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">
        
                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800">NUMACO</h1>
                  @yield('content')
                </div>
                <!-- /.container-fluid -->
        
              </div> 
              <!-- Footer -->
              <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                  </div>
                </div>
              </footer>
              <!-- End of Footer -->
        
            </div>       
          </div>

          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>
        
          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              </div>
            </div>
          </div>

 
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/sa-admin-2.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIBLIOTECA DE FERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

  <!--Barra de navegacion --> 

  <nav class="navbar navbar-expand-lg " style="background-color:hsl(305, 100%, 83%)"">
    <div class="container-fluid">
      <a class="navbar-brand" style="text-light"">BIBLIOTECA DE FER</a>
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('m')?'text-light':'' }}" href="{{route('m')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('form')?'text-light':'' }}" href="{{route('form')}}">Formulario de editorial</a><!-- esto es una funcion  --> 
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('formCli')?'text-light':'' }}" href="{{route('formCli')}}">Formulario de Cliente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   
        
  @yield('contenido')
    <!--Contenido de la pagina --> 

   

 <div class="alert alert-info mt-5" role="alert" style="text-align: center">
    
  <p style="color:rgb(132, 0, 255)" style="text-align: center">
  ❤ BIBLIOTECA 2022 ©℗®™ ❤
  @php
      echo date("d-m-y");
  @endphp
  </p>

  
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
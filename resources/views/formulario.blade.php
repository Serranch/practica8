<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO DE BIBLIOTECA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('m')}}">BIBLIOTECA DE FER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('m')?'text-danger':'' }}" aria-current="page" href="{{route('m')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('form')}}" href="{{route('form')}}">Formulario</a><!-- esto es una funcion  --> 
          </li>
        </ul>
      </div>
    </div>
  </nav>

    @if (session()->has('confirmacion'))

    {!! "<script> Swal.fire(
        '¡¡¡¡EXELENTE!!!!',
        'Se a guardado !',
        'Tu todos tus datos de manera correcta'
      ) </script>"  !!}
        
    @endif

    <div class="container mt-5 mb-5">
        <h1 class="display-3 text-center mt-5 mb-5" >FORMULARIO</h1>
        <figcaption class="blockquote-footer text-center">
            ¡¡Aqui guardamos toda tus registros de manera segura!! 
          </figcaption>
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert"">
                <strong>{{ $error }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                
            @endforeach
            
        @endif
        

    <!--Contenido de la pagina --> 

    <div class="card text-center mb-5">
        <div class="display-6 card-header">Ingresa los datos</div>

        <form method="post" action="guardarUsuario">
          @csrf

          <fieldset disabled>
            
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">ISBN</label>
              <input type="text" id="disabledTextInput" class="form-control" name="ISBN">
            </div>

            
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Titulo</label>
              <input type="text" id="disabledTextInput" class="form-control" name="titulo">
              <p>{{$errors->first('contraseña')}}</p>
            </div>

            
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Autor</label>
              <input type="text" id="disabledTextInput" class="form-control" name="autor">
              <p>{{$errors->first('contraseña')}}</p>
            </div>

           
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">No. Paginas</label>
              <input type="text" id="disabledTextInput" class="form-control" name="paginas">
              <p>{{$errors->first('contraseña')}}</p>
            </div>

           
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Editorial</label>
              <input type="text" id="disabledTextInput" class="form-control" name="editorial">
              <p>{{$errors->first('contraseña')}}</p>
            </div>

            
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Email de Editorial</label>
              <input type="text"  class="form-control" name="emailE">
              <p>{{$errors->first('contraseña')}}</p>
            </div>

            
          </fieldset>
          <button type="submit" class="btn btn-primary" {{request()->routeIs('form')}}">Guardar</button>
        </form>
        
        
        
      </form>
   
    </div>


 </div> 

 <div class="alert alert-warning mt-5" role="alert" style="text-align: center">
    
  <p style="color:blueviolet" style="text-align: center">
  ❤ Maria Fernanda Serrano Ordoñez 2022 ©℗®™ ❤
  @php
      echo date("d-m-y");
  @endphp
  </p>

  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
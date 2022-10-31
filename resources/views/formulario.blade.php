@extends('plantilla')
@section('contenido')

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

          <form method="post" action="guardarRecuerdo">
            @csrf

            <div class="mb-3">
                <label class="form-label"> ISBN:</label>
                <input type="text" class="form-control" name="ISBN">
                <p class="text-danger fst-italic "> {{$errors->first('ISBN')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo">
                <p class="text-danger fst-italic "> {{$errors->first('titulo')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo">
                <p class="text-danger fst-italic "> {{$errors->first('titulo')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo">
                <p class="text-danger fst-italic "> {{$errors->first('titulo')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo">
                <p class="text-danger fst-italic "> {{$errors->first('titulo')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo">
                <p class="text-danger fst-italic "> {{$errors->first('titulo')}}  </p>

            </div>
            
            <div><button type="submit" class="btn btn-primary">Guardar</button>

        </form>
          

            
          </fieldset>
          <button type="submit" class="btn btn-primary" {{request()->routeIs('form')}}">Guardar</button>
        </form>
        
        
      </form>
   
    </div>


 </div> 

 <div class="alert alert-warning mt-5" role="alert" style="text-align: center">
    
  <p style="color:blueviolet" style="text-align: center">
  ❤ BIBLIOTECA 2022 ©℗®™ ❤
  @php
      echo date("d-m-y");
  @endphp
  </p>

  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@stop
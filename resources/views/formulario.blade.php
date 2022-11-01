@extends('plantilla')
@section('contenido')

     @if (session('confirmacion'))
    
    <script> Swal.fire(
        '¡¡¡EXITOO!!!',
        'El libro {{session('confirmacion')['tit']}} se a Guardado!',
        'De manera exitosa'
        ) </script>
        
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
        <div class="display-6 card-header">Ingresa tu editorial</div>

        <div class="card-body">
          <form class="contenedorForm" method="post" action="guardarEditorial">
            @csrf

            <div class="mb-3">
                <label class="form-label"> ISBN:</label>
                <input type="int" class="form-control" name="ISBN" value="{{old('ISBN')}}">
                <p class="text-danger fst-italic "> {{$errors->first('ISBN')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
                <p class="text-danger fst-italic "> {{$errors->first('titulo')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="autor" value="{{old('autor')}}">
                <p class="text-danger fst-italic "> {{$errors->first('autor')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">No.Paginas:</label>
                <input type="int" class="form-control" name="paginas" value="{{old('paginas')}}">
                <p class="text-danger fst-italic "> {{$errors->first('paginas')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="editorial" value="{{old('editorial')}}">
                <p class="text-danger fst-italic "> {{$errors->first('editorial')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Correo de Editorial:</label>
                <input type="text" class="form-control" name="emailE" value="{{old('emailE')}}">
                <p class="text-danger fst-italic "> {{$errors->first('emailE')}}  </p>

            </div>
            
            <div><button type="submit" class="btn btn-primary">Guardar Datos</button>

        </form>  
      </div>

    </div>


 </div> 

@stop
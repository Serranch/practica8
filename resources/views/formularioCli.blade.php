@extends('plantilla')
@section('contenido')




    <div class="container mt-5 mb-5">
        <h1 class="display-3 text-center mt-5 mb-5" >FORMULARIO CLIENTE</h1>
        <figcaption class="blockquote-footer text-center">
            ¡¡Aqui guardamos toda tus registros de manera segura!! 
          </figcaption>
        
      
        

    <!--Contenido de la pagina --> 

    <div class="card text-center mb-5">
        <div class="display-6 card-header">Ingresa tu Datos</div>

        <div class="card-body">
          <form method="post" action="guardarCliente">
            @csrf

            <div class="mb-3">
                <label class="form-label"> No.INE:</label>
                <input type="number" class="form-control" name="INE" value="{{old('INE')}}">
                <p class="text-danger fst-italic "> {{$errors->first('INE')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Nombres:</label>
                <input type="text" class="form-control" name="Nombres" value="{{old('Nombres')}}">
                <p class="text-danger fst-italic "> {{$errors->first('Nombres')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" name="ApellidoP" value="{{old('ApellidoP')}}">
                <p class="text-danger fst-italic "> {{$errors->first('ApellidoP')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Apellido Marteno:</label>
                <input type="int" class="form-control" name="ApellidoM" value="{{old('ApellidoM')}}">
                <p class="text-danger fst-italic "> {{$errors->first('ApellidoM')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="text" class="form-control" name="emailCli" value="{{old('emailCli')}}">
                <p class="text-danger fst-italic "> {{$errors->first('emailCli')}}  </p>

            </div>
            
            <div><button type="submit" class="btn btn-primary">Guardar Datos</button>

        </form>  
      </div>

    </div>


 </div> 

@stop
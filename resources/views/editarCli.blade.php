@extends('plantilla')
@section('contenido')

@if (session()->has('confirmacion'))

    {!! "<script> Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      ) </script>"  !!}
 
@endif

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">Editar</h1> 

    @if ($errors->any())

        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $error }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            
        @endforeach
        
    @endif

    <div class="card text-center mb-5">
        
        <div class="card-header ">
        Fe de erratas !!!
        </div>

        <div class="card-body">
            <form method="post" action="{{route('recuerdo.update',$consultaId->idRecuerdos)}}">
                @csrf
                {!!method_field('PUT')!!}
            

                <div class="mb-3">
                    <label class="form-label"> Titulo:</label>
                    <input type="text" class="form-control" name="txtTitulo" value="{{$consultaId->titulo}}">
                    {{$errors->first('txtTitulo')}} 
                    <p class="text-danger fst-italic "> {{$errors->first('txtTitulo')}}  </p>

                </div>

                <div class="mb-3">
                    <label class="form-label">Recuerdo:</label>
                    <input type="text" class="form-control" name="txtRecuerdo" value="{{$consultaId->recuerdo}}">
                    {{$errors->first('txtRecuerdo')}} 
                    <p class="text-danger fst-italic "> {{$errors->first('txtRecuerdo')}}  </p>

                </div>
     
            
        
                <div><button type="submit" class="btn btn-warning">Actualizar</button>

            </form>
                
    </div>

      </div>


</div>
   

@stop
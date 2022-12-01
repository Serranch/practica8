@extends('plantilla')
@section('contenido')

@if (session()->has('Actualizado'))

    {!! "<script> Swal.fire(
        'El recuerdo!',
        'Se a actualizado',
        
      ) </script>"  !!}
 
@endif

@if (session()->has('Eliminacion'))

    {!! "<script> Swal.fire(
        'El recuerdo',
        'Se a borrado',
        
      ) </script>"  !!}
 
@endif

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">Eliminar</h1> 
    <div class="card text-center mb-5">
        
        <div class="card-header text-center fs-4 fw-bolder text-danger">
            {{$consultaId->fecha}}
        </div>

        <div class="container col-md-6">
            <div class="card mt-5 mb-5">
            
                    <div class="card-body">
                        {{$consultaId->titulo}}
                        {{$consultaId->recuerdo}}
            
                    </div>

                    <div class="card-footer">
                        
                        <form action="{{route('recuerdo.destroy',$consultaId->idRecuerdos)}}" method="POST">
                            @csrf
                            @method('delete')
                        <button type="submit " class="btn btn-danger">Si, Eliminalo</button>
                        </form>
                        <a href="{{route('recuerdo.index')}}" class="btn btn-info">No, Regresar</a>
                        
                     
                    </div>
            
            </div>

            </div>

      </div>


</div>
   

@stop
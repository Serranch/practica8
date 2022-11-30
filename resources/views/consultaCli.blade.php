@extends('plantilla')
@section('contenido')
<h1>Consulta Clientes</h1> 

@foreach($resultCli as $consulta)

   

<div class="container col-md-6">
<div class="card mt-5 mb-5">
    

        <div class="card-header text-center fs-4 fw-bolder text-danger">
            {{$consulta->fecha}}
            

        </div>

        <div class="card-body">
            {{$consulta->titulo}}
            {{$consulta->recuerdo}}

        </div>

    

        <div class="card-footer">
            
            <a href="{{route('recuerdo.edit',$consulta->idCliente)}}" class="btn btn-warning">Editar</a>
            <a href="{{route('recuerdo.show',$consulta->idCliente)}}" class="btn btn-warning">Eliminar</a>
            
        </div>

</div>
</div>

@endforeach

@stop
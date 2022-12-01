@extends('plantilla')
@section('contenido')
<h1>Consulta Clientes</h1> 

@foreach($resultCli as $consulta)

@include('ModalActualizar')
@include('ModalEliminar')


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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalActualizar{{$consulta->idRecuerdos}}">
                <i class="bi bi-pencil-fill"></i>Actualizar
            </button>
            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$consulta->idRecuerdos}}">
                <i class="bi bi-trash3-fill"></i>Eliminar
            </button>
        </div>

    </div>
</div>

@endforeach

@stop
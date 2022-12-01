@extends('plantilla')
@section('contenido')
<h1 class="text-center">Consulta Clientes</h1> 

@foreach($resultCli as $consulta)

@include('ModalActualizarCli')
@include('ModalEliminarCli')


<div class="container col-md-6">
    <div class="card mt-5 mb-5 text-center">
        <h1>Cliente</h1> 

        <div class="card-header text-center fs-4 fw-bolder text-info">
            {{$consulta->ine}}
            

        </div>

        <div class="card-body text-center">
            {{$consulta->Nombres}}
            {{$consulta->A_Paterno}}
            {{$consulta->A_Materno}}
            {{$consulta->correo_Cli}}

        </div>

    

        <div class="card-footer text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalActualizarCli{{$consulta->idCliente}}">
                <i class="bi bi-pencil-fill"></i>Actualizar
            </button>
            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarCli{{$consulta->idCliente}}">
                <i class="bi bi-trash3-fill"></i>Eliminar
            </button>
        </div>

    </div>
</div>

@endforeach

@stop
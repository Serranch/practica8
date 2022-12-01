@extends('plantilla')
@section('contenido')

@if (session()->has('Actualizado'))

    {!! "<script> Swal.fire(
        'Excelente',
        'La editorial se a guardado!',
        'success'
      ) </script>"  !!}
 
@endif

@if (session()->has('Eliminacion'))

    {!! "<script> Swal.fire(
        'Excelente',
        'La editorial se a eliminado!',
        'success'
      ) </script>"  !!}
 
@endif

<h1 class="text-center">Consulta Editoriales</h1> 

@foreach($resultEdi as $consulta)

@include('ModalActualizarEdi')
@include('ModalEliminarEdi')


<div class="container col-md-6">
    <div class="card mt-5 mb-5 text-center">
        <h1>Editorial</h1>

        <div class="card-header text-center fs-4 fw-bolder text-info">
            
            {{$consulta->isbn}}
            

        </div>

        <div class="card-body text-center">
            {{$consulta->titulo}}
            {{$consulta->autor}}
            {{$consulta->np}}
            {{$consulta->editorial}}
            {{$consulta->correo_Edi}}
            

        </div>

    

        <div class="card-footer text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalActualizarEdi{{$consulta->idEditorial}}">
                <i class="bi bi-pencil-fill"></i>Actualizar
            </button>
            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarEdi{{$consulta->idEditorial}}">
                <i class="bi bi-trash3-fill"></i>Eliminar
            </button>
        </div>

    </div>
</div>

@endforeach
@stop
<!-- Modal -->
<div class="modal fade" id="ModalActualizarCli{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarCli{{$consulta->idCliente}}" aria-hidden="true">
    
    <div class="modal-dialog">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title text-center" id="staticBackdropLabel">Actualizar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">
          <table class="table table-hover" method="post" action="{{route('cliente.update',$consulta->idCliente)}}">
            @csrf
            {!!method_field('PUT')!!}

            <div class="mb-3">
              <label class="form-label text-center"> No.INE:</label>
              <input type="number" class="form-control" name="INE" value="{{$consulta->ine}}">

          </div>

          <div class="mb-3">
              <label class="form-label text-center">Nombres:</label>
              <input type="text" class="form-control" name="Nombres" value="{{$consulta->Nombres}}">

          </div>

          <div class="mb-3">
              <label class="form-label text-center">Apellido Paterno:</label>
              <input type="text" class="form-control" name="ApellidoP" value="{{$consulta->A_Paterno}}">

          </div>

          <div class="mb-3">
              <label class="form-label text-center">Apellido Marteno:</label>
              <input type="int" class="form-control" name="ApellidoM" value="{{$consulta->A_Materno}}">

          </div>

          <div class="mb-3">
              <label class="form-label text-center">Correo:</label>
              <input type="text" class="form-control" name="emailCli" value="{{$consulta->correo_Cli}}">

          </div>
  
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
  
          </table>
  
        </div>
  
        
      </div>
    </div>
  </div>
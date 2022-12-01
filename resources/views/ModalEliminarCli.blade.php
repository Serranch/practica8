<!-- Modal -->
<div class="modal fade" id="ModalEliminarCli{{$consulta->idCliente}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarCli{{$consulta->idCliente}}" aria-hidden="true">
    
    <div class="modal-dialog">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title text-center" id="staticBackdropLabel">Eliminar tu recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">
          <form action="{{route('cliente.destroy',$consulta->idCliente)}}" method="POST">
            {{$consulta->ine}}
            {{$consulta->Nombres}}
            {{$consulta->A_Paterno}}
            {{$consulta->A_Materno}}
            {{$consulta->correo_Cli}}
              
            <div class="modal-footer">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-primary">Si, Eliminalo</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Regresar</button>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
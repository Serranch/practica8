<!-- Modal -->
<div class="modal fade" id="ModalEliminarEdi{{$consulta->idEditorial}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarEdi{{$consulta->idEditorial}}" aria-hidden="true">
    
    <div class="modal-dialog">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Eliminar tu Editorial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">
          <form action="{{route('editorial.destroy',$consulta->idEditorial)}}" method="POST">
            {{$consulta->isbn}}
            {{$consulta->titulo}}
            {{$consulta->autor}}
            {{$consulta->np}}
            {{$consulta->editorial}}
            {{$consulta->correo_Edi}}
              
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
<!-- Modal -->
<div class="modal fade" id="ModalActualizar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizar{{$consulta->idRecuerdos}}" aria-hidden="true">
    
    <div class="modal-dialog">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualizar tu recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">
          <form method="post" action="{{route('recuerdo.update',$consulta->idRecuerdos)}}">
            @csrf
            {!!method_field('PUT')!!}
        
  
            <div class="mb-3">
                <label class="form-label"> Titulo:</label>
                <input type="text" class="form-control" name="txtTitulo" value="{{$consulta->titulo}}">
                
            </div>
  
            <div class="mb-3">
                <label class="form-label">Recuerdo:</label>
                <input type="text" class="form-control" name="txtRecuerdo" value="{{$consulta->recuerdo}}">
  
            </div>
  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
  
        </form>
  
        </div>
  
        
      </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="ModalActualizarEdi{{$consulta->idEditorial}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarEdi{{$consulta->idEditorial}}" aria-hidden="true">
    
    <div class="modal-dialog">
      <div class="modal-content">
    
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualizar tu recuerdo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">
          <form method="post" action="{{route('editorial.update',$consulta->idEditorial)}}">
            @csrf
            {!!method_field('PUT')!!}


            <div class="mb-3">
                <label class="form-label"> ISBN:</label>
                <input type="number" class="form-control" name="ISBN" value="{{$consulta->isbn}}">
                <p class="text-danger fst-italic "> {{$errors->first('ISBN')}}  </p>

            </div>

            <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" value="{{$consulta->titulo}}">

            </div>

            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="autor" value="{{$consulta->autor}}">

            </div>

            <div class="mb-3">
                <label class="form-label">No.Paginas:</label>
                <input type="int" class="form-control" name="paginas" value="{{$consulta->np}}">

            </div>

            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="editorial" value="{{$consulta->editorial}}">

            </div>

            <div class="mb-3">
                <label class="form-label">Correo de Editorial:</label>
                <input type="text" class="form-control" name="emailE" value="{{$consulta->correo_Edi}}">

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
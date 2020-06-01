<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mas detalle del permiso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="form-group row">
        <label for="autor" class="col-sm-2 col-form-label"><b>Rol</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="nombre_rol">
        </div>
   </div>


   <div class="form-group">
    <label for="contenido"><b>Descripcion del rol</b></label>
    <textarea  readonly class="form-control" id="descripcion_rol" rows="3"></textarea>
  </div>
   
      
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
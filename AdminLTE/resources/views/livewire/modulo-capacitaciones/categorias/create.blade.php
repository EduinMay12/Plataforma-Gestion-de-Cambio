<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar Categoria <i class="fas fa-plus"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Nombre:*</label>
                    <input type="text" class="form-control" wire:model="nombre">
                    {{ $nombre }}
                    <label for="">Descripcion:*</label>
                    <input type="text" class="form-control" wire:model="descripcion">

                    <label for="">Agregar imagen:*</label>
                    <input type="file" class="form-control" >

                    <label for="">Estatus:*</label><br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary active">
                          <input type="radio" name="options" checked > Activo
                        </label>
                        <label class="btn btn-primary">
                          <input type="radio" name="options"> Inactivo
                        </label>
                      </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

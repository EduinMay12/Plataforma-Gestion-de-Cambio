<div class="col-8">

    <div class="form-group">
        <label for="">Categoria: </label>
        <span>{{ $categoria->nombre }}</span>
    </div>

    <div class="form-group">
        <label for="">Curso: </label>
        <span>{{ $curso->nombre }}</span>
    </div>

    <div class="form-group">
        <label for="">Nombre:* </label>
        <input wire:model="nombre" type="text" class="form-control">

        @error('nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Imagen:*</label>
        <input wire:model="imagen" type="file" name="imagen" class="form-control-file">

        @error('imagen')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Descripción corta:* </label>
        <input wire:model="descorta" type="text" class="form-control">

        @error('descorta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Fecha de inicio:*</label>
        <input wire:model="fechaInicio" type="date" class="form-control">

        @error('fechaInicio')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Fecha fin:*</label>
        <input wire:model="fechaFin" type="date" class="form-control">

        @error('fechaFin')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group" wire:ignore>
        <label for="">Horarios:*</label>
        <textarea id="editor" wire:model.defer="horarios" class="form-control" rows="10"></textarea>

        @error('horarios')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Estatus:*</label>
        <select wire:model="status" class="form-control">
            <option value="">Seleccione...</option>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>

        @error('status')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mt-4">
        <button wire:click="store" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $categoria->id }}, {{ $curso->id }})" class="btn btn-danger">Volver</button>
    </div>

</div>


<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(function(editor) {
            editor.model.document.on('change:data', () => {
                @this.set('horarios', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>

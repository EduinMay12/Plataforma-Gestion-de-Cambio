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
    <div class="alert alert-info" role="alert" wire:loading wire:target="imagen">
        ¡Espera es esta cargando la imagen!
    </div>
    @if ($imagen)
        <img class="col-auto" src="{{ $imagen->temporaryUrl() }}">
    @elseif($imagen_grupo)
        <img class="col-auto" src="{{ Storage::url($imagen_grupo) }}">
    @endif
</div>

<div class="form-group">
    <label for="">Imagen:*</label>
    <input wire:model="imagen" type="file" accept="image/*" id="{{ $identificador}}" class="form-control-file">

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
</div>

<div class="form-group">
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

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {

            toolbar: {
                items: [
                    'heading',
                    '|',
                    'fontFamily',
                    'fontSize',
                    'underline',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'insertTable',
                    'undo',
                    'redo'
                ]
            },
            language: 'es',
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
        })
        .then(function(editor) {
            editor.model.document.on('change:data', () => {
                @this.set('horarios', editor.getData());
            })

        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error(
                'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
            console.warn('Build id: p289pncn6k94-yctq5bdj00mg');
            console.error(error);
        });
</script>

<script>
    livewire.on('reset', function() {
        const horarios = document.getElementById("editor");
        let valor = horarios.value;
        console.log(valor);
    });
</script>

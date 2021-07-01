<div>
    <div class="row mt-2">
        <div class="col-4">
            <span>Mostrar</span>
            <select class="form-select" aria-label="Default select example">
                <option value="1">10</option>
                <option value="2">15</option>
                <option value="3">20</option>
                <option value="">100</option>
            </select>
            <span>Entradas</span>
        </div>
        <div class="col-4">
            @can('crear-etiqueta')
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-rounded" title="Agregar nuevo Usuario"><i class="fa fa-plus"></i> Crear un Nuevo Usuario</a>
            @endcan
        </div>
        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                wire:model="search">
        </div>
    </div><br>
</div>



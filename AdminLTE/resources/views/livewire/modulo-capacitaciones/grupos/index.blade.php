<div>
    <div class="container">
        <div class="card">
            <div class="card-body">

                @include("livewire.modulo-capacitaciones.grupos.$view")

            </div>
        </div>
    </div>

    <!-- Scripts ---->
    @livewireScripts

    <script src="{{ asset('vendor/ckeditor5/build/ckeditor.js') }}"></script>

    <script>
        livewire.on('alert', function(message) {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        });
    </script>

    <script>
        livewire.on('error', function(message) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message,
                footer: ''
            })
        });
    </script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        livewire.on('deleteGrupo', grupoId => {
            Swal.fire({
                title: '¿Estas segur@?',
                text: "Esta accion no se podra revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar'
            }).then((result) => {
                if (result.isConfirmed) {

                    livewire.emitTo('modulo-capacitaciones.grupos.index', 'destroy', grupoId);

                    // Swal.fire(
                    //     'Eliminado!',
                    //     'Curso eliminado con exito',
                    //     'success'
                    // )
                }
            })
        })
    </script>

</div>
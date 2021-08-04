<div>
    <div class="container">
        <div class="card">
            <div class="card-body">

                @include("livewire.modulo-administrador.gestion-empresas.$view")

            </div>
        </div>
    </div>

    <!-- Scripts ---->
    @livewireScripts
    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('alert', function(message) {
            Swal.fire(
                'Hecho!',
                message,
                'success'
            )
        });

        livewire.on('error', function(message) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message,
            })
        });

        livewire.on('deleteEmpresa', empresaId => {
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
                    livewire.emitTo('modulo-administrador.gestion-empresas.index-empresas', 'delete', empresaId);
                }
            })
        })
    </script>

</div>

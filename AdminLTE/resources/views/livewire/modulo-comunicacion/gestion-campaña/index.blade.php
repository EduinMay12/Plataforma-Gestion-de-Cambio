<div>
    <div class="container">
        <div class="card">
            <div class="card-body">

                @include("livewire.modulo-comunicacion.gestion-campaña.$view")

            </div>
        </div>
    </div>

   <!-- Scripts ---->
   @livewireScripts

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

        livewire.on('deleteCampaña', campañaId => {
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
                    livewire.emitTo('modulo-comunicacion.gestion-campaña.index', 'delete', campañaId);
                }
            })
        })
    </script>

    <script src="sweetalert2.all.min.js"></script>

</div>

<div>
    <div class="container">
        <div class="card">
            <div class="card-body">

                @include("livewire.modulo-comunicacion.gestion-comunicacion.$view")

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
        livewire.on('deleteComunicacion', comunicacion => {
            Swal.fire({
                title: '¿Estas Segur@?',
                text: "Esta accion no se podra revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar'
            }).then((result) => {
                if (result.isConfirmed) {

                    livewire.emitTo('modulo-comunicacion.gestion-comunicacion.index', 'delete',
                    comunicacion);

                    Swal.fire(
                        'Eliminado!',
                        'Esta Categoria de Comunicación se Elimino con Exito',
                        'success'
                    )
                }
            })
        })
    </script>

    <script src="sweetalert2.all.min.js"></script>

</div>

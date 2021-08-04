<div>
    <div class="container">
        <div class="card">
            <div class="card-body">

                @include("livewire.modulo-diagnosticos.preguntas3.$view")

            </div>
        </div>
    </div>

    <!-- Scripts ---->
    @livewireScripts

    <script>
        livewire.on('alert', function(message) {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        });
    </script>

    <script src="sweetalert2.all.min.js"></script>

    <script>
        livewire.on('deletePregunta', preguntaId => {
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

                    livewire.emitTo('modulo-diagnosticos.preguntas3.index', 'destroy', preguntaId);

                    Swal.fire(
                        'Eliminado!',
                        'Pregunta eliminada con exito',
                        'success'
                    )
                }
            })
        })
    </script>

</div>


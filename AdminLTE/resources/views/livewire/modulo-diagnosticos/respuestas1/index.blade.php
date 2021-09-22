<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                    @include("livewire.modulo-diagnosticos.respuestas1.$view")
                </div>
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

<script>
    livewire.on('error', function(message) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message,
            footer: '',
        })
    });
</script>

    <script src="sweetalert2.all.min.js"></script>

    <script>
        livewire.on('deleteRespuesta', respuestaId => {
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

                    livewire.emitTo('modulo-diagnosticos.respuestas1.index', 'destroy', respuestaId);

                }
            })
        })
    </script>

</div>


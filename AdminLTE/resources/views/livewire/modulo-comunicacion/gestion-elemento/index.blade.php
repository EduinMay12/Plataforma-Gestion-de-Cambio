<div>
    <div class="container">
        <div class="card">
            <div class="card-body">

                @include("livewire.modulo-comunicacion.gestion-elemento.$view")

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
    </script>

    <script src="sweetalert2.all.min.js"></script>

</div>

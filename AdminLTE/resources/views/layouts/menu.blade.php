@section('menu')
<div class="container-fluid">

    <center>
        <div class="row">
            <div class="col form-group">
                <div class="col-md-4">
                    <div class="md-3 position-relative">
                        <label class="form-group" for="">Empresa</label>
                    </div>
                </div>
            </div>
            <div class="col form-group">
                <div class="col-md-4">
                    <div class="md-3 position-relative">
                        <label class="form-group" for="">Sucursal :</label>
                        <select class="form-control" wire:model="tamaño">
                            <option value="">Seleccione...</option>
                            <option value="2"> Chico </option>
                            <option value="1"> Mediano </option>
                            <option value="0"> Grande </option>
                        </select>
                        @error('tamaño') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div><div class="col form-group">
                <div class="col-md-4">
                    <div class="md-3 position-relative">
                        <label class="form-group" for="">Campaña</label>

                    </div>
                </div>
            </div>
        </div>
    </center>
    <br>


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/oL3otBeMfWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                            allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                            allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                            allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                            allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ratio video 16:9</h4>
                    <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>

                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                            allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

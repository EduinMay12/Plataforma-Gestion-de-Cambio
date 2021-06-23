@section('header')
    <div class="container-fluid">
        <div class="topnav">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                            <i class="uil-home-alt me-2"></i> Inicio </a>
                        </li>
                        <li class="nav-item dropdown">
                            @can('vista-administrador')
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                                <i class="uil-flask me-2"></i> Super Usuario <div class="arrow-down"></div>
                            </a>
                            @endcan

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="text-left">
                                            <a href="/perfil/edit" class="dropdown-item">Perfil</a>
                                            <a href="/modulo-administrador/administrador" class="dropdown-item">Panel del Administrador</a>
                                            <a href="/roles" class="dropdown-item">Etiquetas</a>
                                            <a href="/users" class="dropdown-item">Usuarios</a>
                                            <a href="/gestionempresa" class="dropdown-item">Gestion de Empresas</a>
                                            <a href="/gestionsucursal" class="dropdown-item">Gestion de Sucursales</a>
                                            <a href="/gestionempleados" class="dropdown-item">Gestion de Empleados</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-lightbox" class="dropdown-item">Lightbox</a>
                                            <a href="ui-modals" class="dropdown-item">Modals</a>
                                            <a href="ui-rangeslider" class="dropdown-item">Range Slider</a>
                                            <a href="ui-session-timeout" class="dropdown-item">Session Timeout</a>
                                            <a href="ui-progressbars" class="dropdown-item">Progress Bars</a>
                                            <a href="ui-sweet-alert" class="dropdown-item">Sweet-Alert</a>
                                            <a href="ui-tabs-accordions" class="dropdown-item">Tabs & Accordions</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="ui-typography" class="dropdown-item">Typography</a>
                                            <a href="ui-video" class="dropdown-item">Video</a>
                                            <a href="/modulo-administrador/estados" class="dropdown-item">Estados</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="uil-home-alt me-2"></i> Cursos </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="uil-home-alt me-2"></i> Videos </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="uil-home-alt me-2"></i> Libros </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="uil-home-alt me-2"></i> Comentarios </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
@stop

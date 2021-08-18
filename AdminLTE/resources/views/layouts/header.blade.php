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
                        @can('vista-administrador')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                                <i class="uil-flask me-2"></i>Administrador <div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                aria-labelledby="topnav-uielement">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="/modulo-administrador/administrador" class="dropdown-item">Dashboard</a>
                                            <a href="/perfil/edit" class="dropdown-item">Perfil</a>
                                            <a href="/modulo-administrador/users" class="dropdown-item">Empleados</a>
                                            <a href="/modulo-administrador/gestionempresa" class="dropdown-item">Empresas</a>
                                            <a href="/modulo-administrador/gestionsucursal" class="dropdown-item">Sucursales</a>
                                            <a href="/modulo-administrador/roles" class="dropdown-item">Etiqueta</a>
                                            <a href="/comunicacion" class="dropdown-item">Comunicación</a>
                                            <a href="/elemento" class="dropdown-item">Elemento</a>
                                            <a href="/campaña" class="dropdown-item">Campaña</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="#" class="dropdown-item">Categoria</a>
                                            <a href="#" class="dropdown-item">Cursos</a>
                                            <a href="#" class="dropdown-item">Instructores</a>
                                            <a href="#" class="dropdown-item">Grupos</a>
                                            <a href="#" class="dropdown-item">Matriculaciones</a>
                                            <a href="#" class="dropdown-item">Lecciones</a>
                                            <a href="#" class="dropdown-item">Recursos</a>
                                            <a href="#" class="dropdown-item">Actividades</a>
                                            <a href="#" class="dropdown-item">Cuestionarios</a>
                                            <a href="#" class="dropdown-item">Preguntas</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <a href="#" class="dropdown-item">Competencia</a>
                                            <a href="#" class="dropdown-item">Puestos</a>
                                            <a href="#" class="dropdown-item">Roles evaluación</a>
                                            <a href="#" class="dropdown-item">Diagnóstico</a>
                                            <a href="#" class="dropdown-item">Cuestionarios</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        @endcan
                    </ul>
                </div>
            </nav>
        </div>
    </div>
@stop

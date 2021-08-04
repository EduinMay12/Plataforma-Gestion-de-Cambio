<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Gestion de Cambio',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Gestion del Cambio</b>',
    'logo_img' => 'vendor/adminlte/dist/img/edumatics.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Gestion del Cambio',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-blue',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => '',
    'classes_body' => 'bg-gradient-primary',
    'classes_auth_header' => 'bg-gradient-primary',
    'classes_auth_body' => '',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'fa-lg text-dark',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-4 ',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-primary navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'modulo-administrador/administrador',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:

        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        //Rustas del Modulo de administrador

        ['header' => 'MÓDULO DE ADMINISTRADOR'],
        [

            'text' => 'Administrar Empresas',
            'icon' => 'fas fa-fw fa-chart-line',
            'submenu' => [
                [
                    'text'       => 'Gestionar Empleados',
                    'icon' => 'fas fa-fw fa-portrait',
                    'route'        => 'users.index',
                ],
                [
                    'text'       => 'Gestionar Sucursales',
                    'icon' => 'fas fa-fw fa-sitemap',
                    'route'        => 'gestionsucursal.index',
                ],
                [
                    'text'       => 'Gestion de Empresas',
                    'icon' => 'fas fa-fw fa-building',
                    'route'        => 'gestionempresa.index',
                ],
                [
                    'text' => 'Roles',
                    'route'  => 'roles.index',
                    'icon' => 'fas fa-fw fa-project-diagram',
                ],
            ]
        ],

        //Rutas del módulo capacitaciones

        ['header' => 'MÓDULO DE CAPACITACIONES'],
        [
            'text' => 'Módulo Capacitaciones',
            'icon' => 'fas fa-fw fa-chalkboard-teacher',
            'submenu' => [
                [
                    'text' => 'Gestionar Categorias',
                    'icon' => 'fas fa-fw fa-layer-group',
                    'route' => 'categorias.index'
                ],
                [
                    'text' => 'Gestionar Cursos',
                    'icon' => 'fas fa-fw fa-laptop',
                    'route' => 'cursos.index'
                ],
                [
                    'text' => 'Gestionar Instructores',
                    'icon' => 'fas fa-fw fa-user-tie',
                    'route' => 'instructores.index'
                ],
                [
                    'text' => 'Gestionar Grupos',
                    'icon' => 'fas fa-fw fa-users',
                    'route' => 'grupos.index'
                ],
                [
                    'text' => 'Gestionar matriculaciones',
                    'icon' => 'fas fa-fw fa-address-card',
                    'route' => 'grupos.matriculaciones'
                ],
                [
                    'text' => 'Gestionar Lecciones',
                    'icon' => 'fas fa-fw fa-book',
                    'route' => 'lecciones.index'
                ],
                [
                    'text' => 'Gestionar Recursos',
                    'icon' => 'fas fa-fw fa-photo-video',
                    'route' => 'recursos.index'
                ],
                [
                    'text' => 'Gestionar Actividades',
                    'icon' => 'fas fa-fw fa-file-alt',
                    'route' => 'lecciones.actividades'
                ],
                [
                    'text' => 'Gestionar Cuestionarios',
                    'icon' => 'fas fa-fw fa-file-alt',
                    'route' => 'cuestionarios.index'
                ],
                [
                    'text' => 'Gestionar Preguntas',
                    'icon' => 'fas fa-fw fa-question-circle',
                    'route' => 'preguntas.index'
                ]
            ]
        ],
                      //Rutas del módulo Diagnósticos

                      ['header' => 'MÓDULO DE DIAGNÓSTICOS'],
                      [
                          'text' => 'Módulo Diagnósticos',
                          'icon' => 'fas fa-arrow-alt-circle-down',
                          'submenu' => [
                              [
                                  'text' => 'Competencias',
                                  'icon' => '',
                                  'route' => 'competencias.index'
                              ],
                              [
                                  'text' => ' Comp - Puestos',
                                  'icon' => '',
                                  'route' => 'puestos.index'
                              ],
                              [
                                  'text' => 'Roles Evaluación',
                                  'icon' => '',
                                  'route' => 'roldiagnosticos.index'
                              ],
                              [
                                  'text' => 'Asig - Diagnósticos',
                                  'icon' => '',
                                  'route' => 'asignaciondiagnosticos.index'
                              ],
                          ]
                      ],

                      [
                        'text' => 'Cuestionarios',
                        'icon' => 'fas fa-chalkboard',
                        'submenu' => [
                            [
                                'text' => 'Cue. Preguntas-Abiertas',
                                'icon' => 'fas fa-address-book',
                                'route' => 'cuestionario1s.index'
                            ],
                            [
                                'text' => 'Cue. Verdadero / Falso',
                                'icon' => 'fas fa-address-book',
                                'route' => 'cuestionario2s.index'
                            ],
                            [
                                'text' => 'Cue. Opciónes - Múltiple',
                                'icon' => 'fas fa-address-book',
                                'route' => 'cuestionario3s.index'
                              ],
                        ]
                    ],
                    [
                        'text' => 'Preguntas_Respuestas',
                        'icon' => 'oi oi-check',
                        'submenu' => [
                            [
                                'text' => 'Preguntas - Abiertas',
                                'icon' => '',
                                'route' => 'preguntas1s.index' 
                            ],
                            [
                                'text' => 'Res. Preguntas - Abiertas',
                                'icon' => '',
                                'route' => 'respuestas1s.index'
                            ],
                            [
                                'text' => 'Preguntas Verdadero / Falso',
                                'icon' => '',
                                'route' => 'preguntas2s.index'
                            ],
                            [
                                'text' => 'Res. Verdadero / Falso',
                                'icon' => '',
                                'route' => 'respuestas2s.index'
                            ],
                            [
                                'text' => 'Preguntas Opciones - Múltiples',
                                'icon' => '',
                                'route' => 'preguntas3s.index'
                            ],
                            [
                                'text' => 'Res. Opciones - Múltiples',
                                'icon' => '',
                                'route' => 'respuestas3s.index'
                            ]
                        ]
                    ],
                    [
                        'text' => 'Asig. de Cuestionarios',
                        'icon' => 'fa-solid fa-pen-field',
                        'submenu' => [
                            [
                                'text' => 'Preguntas',
    
                            ],
 
                        ]
                    ],


        //Rutas del módulo comunicaciones

        ['header' => 'MÓDULO DE COMUNICACIONES'],
        [
            'text' => 'Comunicaciones',
            'icon' => 'fas fa-fw fa-icons',
            'submenu' => [
                [
                    'text' => 'Gestionar Comunicación',
                    'icon' => 'fas fa-fw fa-indent',
                    'route' => 'comunicacion.index'
                ],
                [
                    'text' => 'Gestionar Elementos',
                    'icon' => 'fas fa-fw fa-folder-open',
                    'route' => 'elemento.index'
                ],
                [
                    'text' => 'Gestionar Campaña',
                    'icon' => 'fas fa-fw fa-grip-horizontal',
                    'route' => 'campaña.index'
                ],
                [
                    'text' => 'Vista Usuario Campaña',
                    'icon' => 'fas fa-fw fa-digital-tachograph',
                    'route' => 'home'
                ],
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */
    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@11',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => true,
];

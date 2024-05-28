<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/alumno' => [[['_route' => 'app_alumno_index', '_controller' => 'App\\Controller\\AlumnoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/alumno/new' => [[['_route' => 'app_alumno_new', '_controller' => 'App\\Controller\\AlumnoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/asignatura' => [[['_route' => 'app_asignatura_index', '_controller' => 'App\\Controller\\AsignaturaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/asignatura/new' => [[['_route' => 'app_asignatura_new', '_controller' => 'App\\Controller\\AsignaturaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comision' => [[['_route' => 'app_comision_index', '_controller' => 'App\\Controller\\ComisionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comision/new' => [[['_route' => 'app_comision_new', '_controller' => 'App\\Controller\\ComisionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/correlativa' => [[['_route' => 'app_correlativa_index', '_controller' => 'App\\Controller\\CorrelativaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/correlativa/new' => [[['_route' => 'app_correlativa_new', '_controller' => 'App\\Controller\\CorrelativaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cursada' => [[['_route' => 'app_cursada_index', '_controller' => 'App\\Controller\\CursadaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cursada/new' => [[['_route' => 'app_cursada_new', '_controller' => 'App\\Controller\\CursadaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cursadadocente' => [[['_route' => 'app_cursada_docente_index', '_controller' => 'App\\Controller\\CursadaDocenteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cursadadocente/new' => [[['_route' => 'app_cursada_docente_new', '_controller' => 'App\\Controller\\CursadaDocenteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/docente' => [[['_route' => 'app_docente_index', '_controller' => 'App\\Controller\\DocenteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/docente/new' => [[['_route' => 'app_docente_new', '_controller' => 'App\\Controller\\DocenteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/examen/alumno' => [[['_route' => 'app_examen_alumno_index', '_controller' => 'App\\Controller\\ExamenAlumnoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/examen/alumno/new' => [[['_route' => 'app_examen_alumno_new', '_controller' => 'App\\Controller\\ExamenAlumnoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/examen/final' => [[['_route' => 'app_examen_final_index', '_controller' => 'App\\Controller\\ExamenFinalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/examen/final/new' => [[['_route' => 'app_examen_final_new', '_controller' => 'App\\Controller\\ExamenFinalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habilitante' => [[['_route' => 'app_habilitante_index', '_controller' => 'App\\Controller\\HabilitanteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/habilitante/new' => [[['_route' => 'app_habilitante_new', '_controller' => 'App\\Controller\\HabilitanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/institucion' => [[['_route' => 'app_institucion_index', '_controller' => 'App\\Controller\\InstitucionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/institucion/new' => [[['_route' => 'app_institucion_new', '_controller' => 'App\\Controller\\InstitucionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/instituto' => [[['_route' => 'app_instituto_index', '_controller' => 'App\\Controller\\InstitutoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/instituto/new' => [[['_route' => 'app_instituto_new', '_controller' => 'App\\Controller\\InstitutoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/localidad' => [[['_route' => 'app_localidad_index', '_controller' => 'App\\Controller\\LocalidadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/localidad/new' => [[['_route' => 'app_localidad_new', '_controller' => 'App\\Controller\\LocalidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modalidad' => [[['_route' => 'app_modalidad_index', '_controller' => 'App\\Controller\\ModalidadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/modalidad/new' => [[['_route' => 'app_modalidad_new', '_controller' => 'App\\Controller\\ModalidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pais' => [[['_route' => 'app_pais_index', '_controller' => 'App\\Controller\\PaisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pais/new' => [[['_route' => 'app_pais_new', '_controller' => 'App\\Controller\\PaisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/persona' => [[['_route' => 'app_persona_index', '_controller' => 'App\\Controller\\PersonaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/persona/new' => [[['_route' => 'app_persona_new', '_controller' => 'App\\Controller\\PersonaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/provincia' => [[['_route' => 'app_provincia_index', '_controller' => 'App\\Controller\\ProvinciaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/provincia/new' => [[['_route' => 'app_provincia_new', '_controller' => 'App\\Controller\\ProvinciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/region' => [[['_route' => 'app_region_index', '_controller' => 'App\\Controller\\RegionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/region/new' => [[['_route' => 'app_region_new', '_controller' => 'App\\Controller\\RegionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/revista' => [[['_route' => 'app_revista_index', '_controller' => 'App\\Controller\\RevistaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/revista/new' => [[['_route' => 'app_revista_new', '_controller' => 'App\\Controller\\RevistaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tecnicatura' => [[['_route' => 'app_tecnicatura_index', '_controller' => 'App\\Controller\\TecnicaturaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tecnicatura/new' => [[['_route' => 'app_tecnicatura_new', '_controller' => 'App\\Controller\\TecnicaturaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/telefono' => [[['_route' => 'app_telefono_index', '_controller' => 'App\\Controller\\TelefonoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/telefono/new' => [[['_route' => 'app_telefono_new', '_controller' => 'App\\Controller\\TelefonoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/titulo' => [[['_route' => 'app_titulo_index', '_controller' => 'App\\Controller\\TituloController::index'], null, ['GET' => 0], null, true, false, null]],
        '/titulo/new' => [[['_route' => 'app_titulo_new', '_controller' => 'App\\Controller\\TituloController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/turno' => [[['_route' => 'app_turno_index', '_controller' => 'App\\Controller\\TurnoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/turno/new' => [[['_route' => 'app_turno_new', '_controller' => 'App\\Controller\\TurnoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/search_alumno' => [[['_route' => 'search_alumnos', '_controller' => 'App\\Controller\\AlumnoController::search_alumnos'], null, null, null, false, false, null]],
        '/search_tecnicatura' => [[['_route' => 'search_tecnicatura', '_controller' => 'App\\Controller\\TecnicaturaController::search_tecnicatura'], null, null, null, false, false, null]],
        '/search_docente' => [[['_route' => 'search_docente', '_controller' => 'App\\Controller\\DocenteController::search_docente'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|lumno/([^/]++)(?'
                        .'|(*:29)'
                        .'|/edit(*:41)'
                        .'|(*:48)'
                    .')'
                    .'|signatura/([^/]++)(?'
                        .'|(*:77)'
                        .'|/edit(*:89)'
                        .'|(*:96)'
                    .')'
                .')'
                .'|/c(?'
                    .'|o(?'
                        .'|mision/([^/]++)(?'
                            .'|(*:132)'
                            .'|/edit(*:145)'
                            .'|(*:153)'
                        .')'
                        .'|rrelativa/([^/]++)(?'
                            .'|(*:183)'
                            .'|/edit(*:196)'
                            .'|(*:204)'
                        .')'
                    .')'
                    .'|ursada(?'
                        .'|/([^/]++)(?'
                            .'|(*:235)'
                            .'|/edit(*:248)'
                            .'|(*:256)'
                        .')'
                        .'|docente/([^/]++)(?'
                            .'|(*:284)'
                            .'|/edit(*:297)'
                            .'|(*:305)'
                        .')'
                    .')'
                .')'
                .'|/docente/([^/]++)(?'
                    .'|(*:336)'
                    .'|/edit(*:349)'
                    .'|(*:357)'
                .')'
                .'|/examen/(?'
                    .'|alumno/([^/]++)(?'
                        .'|(*:395)'
                        .'|/edit(*:408)'
                        .'|(*:416)'
                    .')'
                    .'|final/([^/]++)(?'
                        .'|(*:442)'
                        .'|/edit(*:455)'
                        .'|(*:463)'
                    .')'
                .')'
                .'|/habilitante/([^/]++)(?'
                    .'|(*:497)'
                    .'|/edit(*:510)'
                    .'|(*:518)'
                .')'
                .'|/institu(?'
                    .'|cion/([^/]++)(?'
                        .'|(*:554)'
                        .'|/edit(*:567)'
                        .'|(*:575)'
                    .')'
                    .'|to/([^/]++)(?'
                        .'|(*:598)'
                        .'|/edit(*:611)'
                        .'|(*:619)'
                    .')'
                .')'
                .'|/localidad/([^/]++)(?'
                    .'|(*:651)'
                    .'|/edit(*:664)'
                    .'|(*:672)'
                .')'
                .'|/modalidad/([^/]++)(?'
                    .'|(*:703)'
                    .'|/edit(*:716)'
                    .'|(*:724)'
                .')'
                .'|/p(?'
                    .'|ais/([^/]++)(?'
                        .'|(*:753)'
                        .'|/edit(*:766)'
                        .'|(*:774)'
                    .')'
                    .'|ersona/([^/]++)(?'
                        .'|(*:801)'
                        .'|/edit(*:814)'
                        .'|(*:822)'
                    .')'
                    .'|rovincia/([^/]++)(?'
                        .'|(*:851)'
                        .'|/edit(*:864)'
                        .'|(*:872)'
                    .')'
                .')'
                .'|/re(?'
                    .'|gion/([^/]++)(?'
                        .'|(*:904)'
                        .'|/edit(*:917)'
                        .'|(*:925)'
                    .')'
                    .'|vista/([^/]++)(?'
                        .'|(*:951)'
                        .'|/edit(*:964)'
                        .'|(*:972)'
                    .')'
                .')'
                .'|/t(?'
                    .'|e(?'
                        .'|cnicatura/([^/]++)(?'
                            .'|(*:1012)'
                            .'|/edit(*:1026)'
                            .'|(*:1035)'
                        .')'
                        .'|lefono/([^/]++)(?'
                            .'|(*:1063)'
                            .'|/edit(*:1077)'
                            .'|(*:1086)'
                        .')'
                    .')'
                    .'|itulo/([^/]++)(?'
                        .'|(*:1114)'
                        .'|/edit(*:1128)'
                        .'|(*:1137)'
                    .')'
                    .'|urno/([^/]++)(?'
                        .'|(*:1163)'
                        .'|/edit(*:1177)'
                        .'|(*:1186)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1214)'
                    .'|/edit(*:1228)'
                    .'|(*:1237)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1278)'
                    .'|wdt/([^/]++)(*:1299)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1346)'
                            .'|router(*:1361)'
                            .'|exception(?'
                                .'|(*:1382)'
                                .'|\\.css(*:1396)'
                            .')'
                        .')'
                        .'|(*:1407)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_alumno_show', '_controller' => 'App\\Controller\\AlumnoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_alumno_edit', '_controller' => 'App\\Controller\\AlumnoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_alumno_delete', '_controller' => 'App\\Controller\\AlumnoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_asignatura_show', '_controller' => 'App\\Controller\\AsignaturaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_asignatura_edit', '_controller' => 'App\\Controller\\AsignaturaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'app_asignatura_delete', '_controller' => 'App\\Controller\\AsignaturaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_comision_show', '_controller' => 'App\\Controller\\ComisionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_comision_edit', '_controller' => 'App\\Controller\\ComisionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'app_comision_delete', '_controller' => 'App\\Controller\\ComisionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_correlativa_show', '_controller' => 'App\\Controller\\CorrelativaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'app_correlativa_edit', '_controller' => 'App\\Controller\\CorrelativaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'app_correlativa_delete', '_controller' => 'App\\Controller\\CorrelativaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_cursada_show', '_controller' => 'App\\Controller\\CursadaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'app_cursada_edit', '_controller' => 'App\\Controller\\CursadaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'app_cursada_delete', '_controller' => 'App\\Controller\\CursadaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_cursada_docente_show', '_controller' => 'App\\Controller\\CursadaDocenteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'app_cursada_docente_edit', '_controller' => 'App\\Controller\\CursadaDocenteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_cursada_docente_delete', '_controller' => 'App\\Controller\\CursadaDocenteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_docente_show', '_controller' => 'App\\Controller\\DocenteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_docente_edit', '_controller' => 'App\\Controller\\DocenteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_docente_delete', '_controller' => 'App\\Controller\\DocenteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'app_examen_alumno_show', '_controller' => 'App\\Controller\\ExamenAlumnoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'app_examen_alumno_edit', '_controller' => 'App\\Controller\\ExamenAlumnoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        416 => [[['_route' => 'app_examen_alumno_delete', '_controller' => 'App\\Controller\\ExamenAlumnoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        442 => [[['_route' => 'app_examen_final_show', '_controller' => 'App\\Controller\\ExamenFinalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_examen_final_edit', '_controller' => 'App\\Controller\\ExamenFinalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        463 => [[['_route' => 'app_examen_final_delete', '_controller' => 'App\\Controller\\ExamenFinalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_habilitante_show', '_controller' => 'App\\Controller\\HabilitanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_habilitante_edit', '_controller' => 'App\\Controller\\HabilitanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        518 => [[['_route' => 'app_habilitante_delete', '_controller' => 'App\\Controller\\HabilitanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        554 => [[['_route' => 'app_institucion_show', '_controller' => 'App\\Controller\\InstitucionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        567 => [[['_route' => 'app_institucion_edit', '_controller' => 'App\\Controller\\InstitucionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        575 => [[['_route' => 'app_institucion_delete', '_controller' => 'App\\Controller\\InstitucionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_instituto_show', '_controller' => 'App\\Controller\\InstitutoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        611 => [[['_route' => 'app_instituto_edit', '_controller' => 'App\\Controller\\InstitutoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        619 => [[['_route' => 'app_instituto_delete', '_controller' => 'App\\Controller\\InstitutoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        651 => [[['_route' => 'app_localidad_show', '_controller' => 'App\\Controller\\LocalidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        664 => [[['_route' => 'app_localidad_edit', '_controller' => 'App\\Controller\\LocalidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        672 => [[['_route' => 'app_localidad_delete', '_controller' => 'App\\Controller\\LocalidadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        703 => [[['_route' => 'app_modalidad_show', '_controller' => 'App\\Controller\\ModalidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        716 => [[['_route' => 'app_modalidad_edit', '_controller' => 'App\\Controller\\ModalidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        724 => [[['_route' => 'app_modalidad_delete', '_controller' => 'App\\Controller\\ModalidadController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        753 => [[['_route' => 'app_pais_show', '_controller' => 'App\\Controller\\PaisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        766 => [[['_route' => 'app_pais_edit', '_controller' => 'App\\Controller\\PaisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        774 => [[['_route' => 'app_pais_delete', '_controller' => 'App\\Controller\\PaisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        801 => [[['_route' => 'app_persona_show', '_controller' => 'App\\Controller\\PersonaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        814 => [[['_route' => 'app_persona_edit', '_controller' => 'App\\Controller\\PersonaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        822 => [[['_route' => 'app_persona_delete', '_controller' => 'App\\Controller\\PersonaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        851 => [[['_route' => 'app_provincia_show', '_controller' => 'App\\Controller\\ProvinciaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        864 => [[['_route' => 'app_provincia_edit', '_controller' => 'App\\Controller\\ProvinciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        872 => [[['_route' => 'app_provincia_delete', '_controller' => 'App\\Controller\\ProvinciaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        904 => [[['_route' => 'app_region_show', '_controller' => 'App\\Controller\\RegionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        917 => [[['_route' => 'app_region_edit', '_controller' => 'App\\Controller\\RegionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        925 => [[['_route' => 'app_region_delete', '_controller' => 'App\\Controller\\RegionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        951 => [[['_route' => 'app_revista_show', '_controller' => 'App\\Controller\\RevistaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        964 => [[['_route' => 'app_revista_edit', '_controller' => 'App\\Controller\\RevistaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        972 => [[['_route' => 'app_revista_delete', '_controller' => 'App\\Controller\\RevistaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1012 => [[['_route' => 'app_tecnicatura_show', '_controller' => 'App\\Controller\\TecnicaturaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1026 => [[['_route' => 'app_tecnicatura_edit', '_controller' => 'App\\Controller\\TecnicaturaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1035 => [[['_route' => 'app_tecnicatura_delete', '_controller' => 'App\\Controller\\TecnicaturaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1063 => [[['_route' => 'app_telefono_show', '_controller' => 'App\\Controller\\TelefonoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1077 => [[['_route' => 'app_telefono_edit', '_controller' => 'App\\Controller\\TelefonoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1086 => [[['_route' => 'app_telefono_delete', '_controller' => 'App\\Controller\\TelefonoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1114 => [[['_route' => 'app_titulo_show', '_controller' => 'App\\Controller\\TituloController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1128 => [[['_route' => 'app_titulo_edit', '_controller' => 'App\\Controller\\TituloController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1137 => [[['_route' => 'app_titulo_delete', '_controller' => 'App\\Controller\\TituloController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1163 => [[['_route' => 'app_turno_show', '_controller' => 'App\\Controller\\TurnoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1177 => [[['_route' => 'app_turno_edit', '_controller' => 'App\\Controller\\TurnoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1186 => [[['_route' => 'app_turno_delete', '_controller' => 'App\\Controller\\TurnoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1214 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1228 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1237 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1278 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1299 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1346 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1361 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1382 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1396 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1407 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

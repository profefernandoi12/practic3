<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_14cc06e9865ea87c7c587db16e16b0f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Instituto Local</title>
\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "\t</head>
\t<body
\t\tid=\"page-top\">
\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t\t\t<i class=\"fas fa-laugh-wink\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Instituto Local
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t\t<!-- Nav Item - HOLA! -->
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t\t<span>HOLA!</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tMenu
\t\t\t\t</div>
\t\t\t\t";
        // line 51
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 52
            yield "\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 60
        yield "\t\t\t\t

\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Estudiantes</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Estudiantes</h6>
\t\t\t\t\t\t\t";
        // line 71
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 72
            yield "\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_index");
            yield "\">Inscripcion</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 73
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_index");
            yield "\">Regulares</a>
\t\t\t\t\t\t\t";
        }
        // line 75
        yield "\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_index");
        yield "\">Instancia de examen</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>\t\t\t\t



\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t";
        // line 84
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 85
            yield "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_index");
            yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Docentes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 92
        yield "\t\t\t\t
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Carreras</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de carreras</h6>
\t\t\t\t\t\t\t";
        // line 102
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 103
            yield "\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_index");
            yield "\">Tecnicatura</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignatura_index");
            yield "\">Asignatura</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 105
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comision_index");
            yield "\">Comisiones</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_index");
            yield "\">Correlativas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_index");
            yield "\">Cursadas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_index");
            yield "\">Examenes finales</a>
\t\t\t\t\t\t\t";
        }
        // line 110
        yield "\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ALUMNO")) {
            // line 111
            yield "\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignatura_index");
            yield "\">Asignatura</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 112
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comision_index");
            yield "\">Comisiones</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_index");
            yield "\">Correlativas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 114
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cursada_index");
            yield "\">Cursadas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_index");
            yield "\">Examenes finales</a>
\t\t\t\t\t\t\t";
        }
        // line 117
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t";
        // line 121
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 122
            yield "\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Configuracion</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos institucionles</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instituto_index");
            yield "\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 132
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_localidad_index");
            yield "\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 133
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_region_index");
            yield "\">Region</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 134
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provincia_index");
            yield "\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pais_index");
            yield "\">Pais</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 136
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_turno_index");
            yield "\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modalidad_index");
            yield "\">Modalidad</a>\t\t\t\t
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 143
        yield "
\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t<button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
\t\t\t\t</div>

\t\t\t\t<!-- Sidebar Message -->
\t\t\t\t<div class=\"sidebar-card d-none d-lg-flex\">
\t\t\t\t\t<img class=\"sidebar-card-illustration mb-2\" src=";
        // line 155
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpeg"), "html", null, true);
        yield " alt=\"...\">
\t\t\t\t\t<p class=\"text-center mb-2\">
\t\t\t\t\t\t<strong>Bienvenidos</strong>
\t\t\t\t\t\tal proyecto del i12!</p>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</ul>
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div
\t\t\t\t\tid=\"content\">

\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Ciclo Lectivo...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_index");
        yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 225
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225), "nombre", [], "any", false, false, false, 225), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=";
        // line 226
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/undraw_profile.svg"), "html", null, true);
        yield ">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tConfiguracion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tSalir
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->\t\t\t\t
\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div class=\"container_X\"> ";
        // line 255
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 256
        yield "\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t
\t\t\t\t\t<!-- End of Content Wrapper -->
\t\t\t</div>\t
\t\t\t\t<!-- End of Page Wrapper -->
\t\t\t\t<!-- Scroll to Top Button-->
\t\t\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\">
\t\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t\t</a>

\t\t\t\t<!-- Logout Modal-->
\t\t\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Listo para salir?</h5>
\t\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">Selecciona salir para cerrar sesion</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Salir</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 287
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 298
        yield "\t\t\t</body>
\t\t</body>
\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "\t\t\t<link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        yield "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/container.css"), "html", null, true);
        yield "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 255
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        yield "   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 287
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 288
        yield "
\t\t\t\t\t<script src=";
        // line 289
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        yield "></script>
\t\t\t\t\t<script src=";
        // line 290
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "></script>
\t\t\t\t\t<script src=";
        // line 291
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "></script>
\t\t\t\t\t<script src=";
        // line 292
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sb-admin-2.min.js"), "html", null, true);
        yield "></script>
\t\t\t\t\t<script src=";
        // line 293
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "></script>
\t\t\t\t\t<script src=";
        // line 294
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-area-demo.js"), "html", null, true);
        yield "></script>
\t\t\t\t\t<script src=";
        // line 295
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo/chart-pie-demo.js"), "html", null, true);
        yield "></script>

\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  551 => 295,  547 => 294,  543 => 293,  539 => 292,  535 => 291,  531 => 290,  527 => 289,  524 => 288,  514 => 287,  494 => 255,  481 => 9,  477 => 8,  472 => 7,  462 => 6,  448 => 298,  446 => 287,  438 => 282,  410 => 256,  408 => 255,  376 => 226,  372 => 225,  331 => 187,  296 => 155,  282 => 143,  273 => 137,  269 => 136,  265 => 135,  261 => 134,  257 => 133,  253 => 132,  249 => 131,  238 => 122,  236 => 121,  230 => 117,  225 => 115,  221 => 114,  217 => 113,  213 => 112,  208 => 111,  205 => 110,  200 => 108,  196 => 107,  192 => 106,  188 => 105,  184 => 104,  179 => 103,  177 => 102,  165 => 92,  156 => 86,  153 => 85,  151 => 84,  138 => 75,  133 => 73,  128 => 72,  126 => 71,  113 => 60,  104 => 54,  100 => 52,  98 => 51,  56 => 11,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Instituto Local</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('vendor/fontawesome-free/css/all.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/sb-admin-2.min.css')}}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/container.css')}}\">
\t\t{% endblock %}
\t</head>
\t<body
\t\tid=\"page-top\">
\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
\t\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t\t\t<i class=\"fas fa-laugh-wink\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Instituto Local
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t\t<!-- Nav Item - HOLA! -->
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t\t<span>HOLA!</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tMenu
\t\t\t\t</div>
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_user_index')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Usuarios</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t

\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTree\" aria-expanded=\"true\" aria-controls=\"collapseTree\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Estudiantes</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTree\" class=\"collapse\" aria-labelledby=\"headingTree\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de Estudiantes</h6>
\t\t\t\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_alumno_index')}}\">Inscripcion</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_alumno_index')}}\">Regulares</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_alumno_index')}}\">Instancia de examen</a>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>\t\t\t\t



\t\t\t\t<!-- Nav Item - Charts -->
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_docente_index')}}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Docentes</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Carreras</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos de carreras</h6>
\t\t\t\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_tecnicatura_index')}}\">Tecnicatura</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_asignatura_index')}}\">Asignatura</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_comision_index')}}\">Comisiones</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_correlativa_index')}}\">Correlativas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_cursada_index')}}\">Cursadas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_final_index')}}\">Examenes finales</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if is_granted ('ROLE_ALUMNO') %}
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_asignatura_index')}}\">Asignatura</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_comision_index')}}\">Comisiones</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_correlativa_index')}}\">Correlativas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_cursada_index')}}\">Cursadas</a>
\t\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_examen_final_index')}}\">Examenes finales</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-folder\"></i>
\t\t\t\t\t\t<span>Configuracion</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Datos institucionles</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_instituto_index')}}\">Instituto</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_localidad_index') }}\">Localidad</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_region_index')}}\">Region</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_provincia_index') }}\">Provincia</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_pais_index')}}\">Pais</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_turno_index') }}\">Turnos</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_modalidad_index') }}\">Modalidad</a>\t\t\t\t
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider d-none d-md-block\">

\t\t\t\t<!-- Sidebar Toggler (Sidebar) -->
\t\t\t\t<div class=\"text-center d-none d-md-inline\">
\t\t\t\t\t<button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
\t\t\t\t</div>

\t\t\t\t<!-- Sidebar Message -->
\t\t\t\t<div class=\"sidebar-card d-none d-lg-flex\">
\t\t\t\t\t<img class=\"sidebar-card-illustration mb-2\" src={{asset('img/logo.jpeg')}} alt=\"...\">
\t\t\t\t\t<p class=\"text-center mb-2\">
\t\t\t\t\t\t<strong>Bienvenidos</strong>
\t\t\t\t\t\tal proyecto del i12!</p>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</ul>
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div
\t\t\t\t\tid=\"content\">

\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Ciclo Lectivo...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" href=\"{{path('app_tecnicatura_index')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.nombre }}</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src={{asset(\"img/undraw_profile.svg\")}}>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tConfiguracion
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tSalir
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->\t\t\t\t
\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div class=\"container_X\"> {% block body %}   {% endblock %}
\t\t\t\t\t\t</div> \t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t
\t\t\t\t\t<!-- End of Content Wrapper -->
\t\t\t</div>\t
\t\t\t\t<!-- End of Page Wrapper -->
\t\t\t\t<!-- Scroll to Top Button-->
\t\t\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\">
\t\t\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t\t\t</a>

\t\t\t\t<!-- Logout Modal-->
\t\t\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Listo para salir?</h5>
\t\t\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">Selecciona salir para cerrar sesion</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_logout')}}\">Salir</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% block javascripts %}

\t\t\t\t\t<script src={{asset('vendor/jquery/jquery.min.js')}}></script>
\t\t\t\t\t<script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
\t\t\t\t\t<script src={{asset('vendor/jquery-easing/jquery.easing.min.js')}}></script>
\t\t\t\t\t<script src={{asset('js/sb-admin-2.min.js')}}></script>
\t\t\t\t\t<script src={{asset('vendor/chart.js/Chart.min.js')}}></script>
\t\t\t\t\t<script src={{asset('js/demo/chart-area-demo.js')}}></script>
\t\t\t\t\t<script src={{asset('js/demo/chart-pie-demo.js')}}></script>

\t\t\t\t{% endblock %}
\t\t\t</body>
\t\t</body>
\t</html>
", "base.html.twig", "F:\\xampp\\htdocs\\Local\\templates\\base.html.twig");
    }
}

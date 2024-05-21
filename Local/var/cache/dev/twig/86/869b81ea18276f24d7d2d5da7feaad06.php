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

/* tecnicatura/show.html.twig */
class __TwigTemplate_745385c4a4b1e2444d4720683c0e9e8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tecnicatura/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tecnicatura/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tecnicatura/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tecnicatura";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Tecnicatura</h1>

    <table class=\"table\">
        <tbody>
           
            <tr>
                <th>Nombre</th>
                <td>";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tecnicatura"]) || array_key_exists("tecnicatura", $context) ? $context["tecnicatura"] : (function () { throw new RuntimeError('Variable "tecnicatura" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Duracion</th>
                <td>";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tecnicatura"]) || array_key_exists("tecnicatura", $context) ? $context["tecnicatura"] : (function () { throw new RuntimeError('Variable "tecnicatura" does not exist.', 17, $this->source); })()), "duracion", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Cantidad_asignaturas</th>
                <td>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tecnicatura"]) || array_key_exists("tecnicatura", $context) ? $context["tecnicatura"] : (function () { throw new RuntimeError('Variable "tecnicatura" does not exist.', 21, $this->source); })()), "cantidadAsignaturas", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Numero_resolucion</th>
                <td>";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["tecnicatura"]) || array_key_exists("tecnicatura", $context) ? $context["tecnicatura"] : (function () { throw new RuntimeError('Variable "tecnicatura" does not exist.', 25, $this->source); })()), "numeroResolucion", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_index");
        yield "\">Volver</a>

    <a href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tecnicatura"]) || array_key_exists("tecnicatura", $context) ? $context["tecnicatura"] : (function () { throw new RuntimeError('Variable "tecnicatura" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\">Editar</a>

    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "tecnicatura/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tecnicatura/show.html.twig";
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
        return array (  138 => 34,  133 => 32,  128 => 30,  120 => 25,  113 => 21,  106 => 17,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tecnicatura{% endblock %}

{% block body %}
    <h1>Tecnicatura</h1>

    <table class=\"table\">
        <tbody>
           
            <tr>
                <th>Nombre</th>
                <td>{{ tecnicatura.nombre }}</td>
            </tr>
            <tr>
                <th>Duracion</th>
                <td>{{ tecnicatura.duracion }}</td>
            </tr>
            <tr>
                <th>Cantidad_asignaturas</th>
                <td>{{ tecnicatura.cantidadAsignaturas }}</td>
            </tr>
            <tr>
                <th>Numero_resolucion</th>
                <td>{{ tecnicatura.numeroResolucion }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_tecnicatura_index') }}\">Volver</a>

    <a href=\"{{ path('app_tecnicatura_edit', {'id': tecnicatura.id}) }}\">Editar</a>

    {{ include('tecnicatura/_delete_form.html.twig') }}
{% endblock %}
", "tecnicatura/show.html.twig", "C:\\xampp\\htdocs\\Local\\templates\\tecnicatura\\show.html.twig");
    }
}

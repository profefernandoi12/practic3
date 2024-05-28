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

/* examen_alumno/show.html.twig */
class __TwigTemplate_060b3f4d7596436d33d00bcf3cc1b755 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_alumno/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_alumno/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "examen_alumno/show.html.twig", 1);
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

        yield "ExamenAlumno";
        
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
        yield "    <h1>ExamenAlumno</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Cursada</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 16, $this->source); })()), "Cursada", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nota</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 20, $this->source); })()), "nota", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 24, $this->source); })()), "examenfinal", [], "any", false, false, false, 24), "fecha", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Tomo</th>
                <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 28, $this->source); })()), "Tomo", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Folio</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 32, $this->source); })()), "Folio", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_alumno_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">edit</a>

    <a href=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_alumno"]) || array_key_exists("examen_alumno", $context) ? $context["examen_alumno"] : (function () { throw new RuntimeError('Variable "examen_alumno" does not exist.', 41, $this->source); })()), "examenfinal", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">--Ir a examen final</a>

    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "examen_alumno/_delete_form.html.twig");
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
        return "examen_alumno/show.html.twig";
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
        return array (  156 => 43,  151 => 41,  146 => 39,  141 => 37,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ExamenAlumno{% endblock %}

{% block body %}
    <h1>ExamenAlumno</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ examen_alumno.id }}</td>
            </tr>
            <tr>
                <th>Cursada</th>
                <td>{{ examen_alumno.Cursada}}</td>
            </tr>
            <tr>
                <th>Nota</th>
                <td>{{ examen_alumno.nota }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ examen_alumno.examenfinal.fecha|date('Y-m-d') }}</td>
            </tr>
            <tr>
                <th>Tomo</th>
                <td>{{ examen_alumno.Tomo }}</td>
            </tr>
            <tr>
                <th>Folio</th>
                <td>{{ examen_alumno.Folio }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_examen_alumno_index') }}\">back to list</a>

    <a href=\"{{ path('app_examen_alumno_edit', {'id': examen_alumno.id}) }}\">edit</a>

    <a href=\"{{ path('app_examen_final_show', {'id': examen_alumno.examenfinal.id}) }}\">--Ir a examen final</a>

    {{ include('examen_alumno/_delete_form.html.twig') }}
{% endblock %}
", "examen_alumno/show.html.twig", "C:\\xampp\\htdocs\\Local\\templates\\examen_alumno\\show.html.twig");
    }
}

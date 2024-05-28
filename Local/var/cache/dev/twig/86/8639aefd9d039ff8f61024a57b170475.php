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

/* tecnicatura/index.html.twig */
class __TwigTemplate_c8a463b7299b7f96cfec91b0f87bd2e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tecnicatura/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tecnicatura/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tecnicatura/index.html.twig", 1);
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

        yield "Tecnicaturas";
        
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
        yield "    <h1>Tecnicaturas</h1>
        <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_tecnicatura");
        yield "\" method=\"get\">
            <input type=\"string\" name=\"nombre\" placeholder=\"Buscar por nombre\" class=\"form-control\">            
            <button type=\"submit\" class=\"btn btn-info mt-1\">Buscar</button>
        </form>
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Duracion</th>
                <th>Cantidad_asignaturas</th>
                <th>Numero_resolucion</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tecnicaturas"]) || array_key_exists("tecnicaturas", $context) ? $context["tecnicaturas"] : (function () { throw new RuntimeError('Variable "tecnicaturas" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tecnicatura"]) {
            // line 24
            yield "            <tr>
                
                <td>";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "nombre", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "duracion", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "cantidadAsignaturas", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "numeroResolucion", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">Mostrar</a>
                    <a href=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tecnicatura"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            yield "            <tr>
                <td colspan=\"6\">no se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tecnicatura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tecnicatura_new");
        yield "\">Crear tecnicatura</a>
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
        return "tecnicatura/index.html.twig";
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
        return array (  165 => 43,  160 => 40,  151 => 36,  142 => 32,  138 => 31,  133 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 24,  112 => 23,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tecnicaturas{% endblock %}

{% block body %}
    <h1>Tecnicaturas</h1>
        <form action=\"{{ path('search_tecnicatura') }}\" method=\"get\">
            <input type=\"string\" name=\"nombre\" placeholder=\"Buscar por nombre\" class=\"form-control\">            
            <button type=\"submit\" class=\"btn btn-info mt-1\">Buscar</button>
        </form>
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Duracion</th>
                <th>Cantidad_asignaturas</th>
                <th>Numero_resolucion</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tecnicatura in tecnicaturas %}
            <tr>
                
                <td>{{ tecnicatura.nombre }}</td>
                <td>{{ tecnicatura.duracion }}</td>
                <td>{{ tecnicatura.cantidadAsignaturas }}</td>
                <td>{{ tecnicatura.numeroResolucion }}</td>
                <td>
                    <a href=\"{{ path('app_tecnicatura_show', {'id': tecnicatura.id}) }}\">Mostrar</a>
                    <a href=\"{{ path('app_tecnicatura_edit', {'id': tecnicatura.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_tecnicatura_new') }}\">Crear tecnicatura</a>
{% endblock %}
", "tecnicatura/index.html.twig", "C:\\xampp\\htdocs\\Local\\templates\\tecnicatura\\index.html.twig");
    }
}

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

/* docente/index.html.twig */
class __TwigTemplate_f1d424779699abee04f343fd7572faf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docente/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "docente/index.html.twig", 1);
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

        yield "Docente index";
        
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
        yield "    <h1>Docente</h1>
        <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_docente");
        yield "\" method=\"get\">
            <input type=\"number\" name=\"dni\" placeholder=\"Buscar por dni\" class=\"form-control\">            
            <button type=\"submit\" class=\"btn btn-info mt-1\">Buscar</button>
        </form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha_ingreso</th>
                <th>Dni/Pasaporte</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Partido</th>
                <th>Calle</th>
                <th>Numero</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["docentes"]) || array_key_exists("docentes", $context) ? $context["docentes"] : (function () { throw new RuntimeError('Variable "docentes" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["docente"]) {
            // line 28
            yield "            <tr>
                <td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            ((CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "fechaIngreso", [], "any", false, false, false, 30)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "fechaIngreso", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 31), "dnipasaporte", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 32), "nombre", [], "any", false, false, false, 32), "html", null, true);
            yield "</td> 
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 33), "apellido", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 34), "telefono", [], "any", false, false, false, 34), "html", null, true);
            yield "</td> 
                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 35), "partido", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>  
                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 36), "calle", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>    
                <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "persona", [], "any", false, false, false, 37), "numero", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>                 
                <td>
                    <a href=\"";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">Mostrar</a>
                    <a href=\"";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["docente"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            yield "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_new");
        yield "\">Crear nuevo</a>
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
        return "docente/index.html.twig";
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
        return array (  188 => 51,  183 => 48,  174 => 44,  165 => 40,  161 => 39,  156 => 37,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  121 => 28,  116 => 27,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Docente index{% endblock %}

{% block body %}
    <h1>Docente</h1>
        <form action=\"{{ path('search_docente') }}\" method=\"get\">
            <input type=\"number\" name=\"dni\" placeholder=\"Buscar por dni\" class=\"form-control\">            
            <button type=\"submit\" class=\"btn btn-info mt-1\">Buscar</button>
        </form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha_ingreso</th>
                <th>Dni/Pasaporte</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Partido</th>
                <th>Calle</th>
                <th>Numero</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for docente in docentes %}
            <tr>
                <td>{{ docente.id }}</td>
                <td>{{ docente.fechaIngreso ? docente.fechaIngreso|date('Y-m-d') : '' }}</td>
                <td>{{ docente.persona.dnipasaporte }}</td>
                <td>{{ docente.persona.nombre }}</td> 
                <td>{{ docente.persona.apellido }}</td>
                <td>{{ docente.persona.telefono }}</td> 
                <td>{{ docente.persona.partido}}</td>  
                <td>{{ docente.persona.calle }}</td>    
                <td>{{ docente.persona.numero }}</td>                 
                <td>
                    <a href=\"{{ path('app_docente_show', {'id': docente.id}) }}\">Mostrar</a>
                    <a href=\"{{ path('app_docente_edit', {'id': docente.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_docente_new') }}\">Crear nuevo</a>
{% endblock %}
", "docente/index.html.twig", "C:\\xampp\\htdocs\\practic3\\Local\\templates\\docente\\index.html.twig");
    }
}

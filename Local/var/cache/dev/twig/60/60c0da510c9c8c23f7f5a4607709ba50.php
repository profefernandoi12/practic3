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

/* alumno/index.html.twig */
class __TwigTemplate_4f24ab08e8df634735c140b02a0973ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alumno/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "alumno/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "alumno/index.html.twig", 1);
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

        yield "Estudiantes";
        
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
        yield "    <h1>Estudiantes</h1>
            <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_alumnos");
        yield "\" method=\"get\">
            <input type=\"number\" name=\"dni\" placeholder=\"Buscar por dni\" class=\"form-control\">            
            <button type=\"submit\" class=\"btn btn-info mt-1\">Buscar</button>
        </form>
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Titulo_sec</th>
                <th>Escuela_sec</th>
                <th>Anio_egreso</th>
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alumnos"]) || array_key_exists("alumnos", $context) ? $context["alumnos"] : (function () { throw new RuntimeError('Variable "alumnos" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 30
            yield "            <tr>
                
                <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "tituloSec", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "escuelaSec", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "anioEgreso", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 35), "dnipasaporte", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 36), "nombre", [], "any", false, false, false, 36), "html", null, true);
            yield "</td> 
                <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 37), "apellido", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 38), "telefono", [], "any", false, false, false, 38), "html", null, true);
            yield "</td> 
                <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 39), "partido", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>  
                <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 40), "calle", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>    
                <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "persona", [], "any", false, false, false, 41), "numero", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>                                                             
                <td>
                    <a href=\"";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">Mostrar</a>
                    ";
            // line 44
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 45
                yield "                        <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\">Editar</a>
                    ";
            }
            // line 47
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            yield "            <tr>
                <td colspan=\"5\">No se encontraron registros</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_alumno_new");
        yield "\">Nuevo Estudiante</a>
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
        return "alumno/index.html.twig";
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
        return array (  201 => 57,  196 => 54,  187 => 50,  180 => 47,  174 => 45,  172 => 44,  168 => 43,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 30,  118 => 29,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Estudiantes{% endblock %}

{% block body %}
    <h1>Estudiantes</h1>
            <form action=\"{{ path('search_alumnos') }}\" method=\"get\">
            <input type=\"number\" name=\"dni\" placeholder=\"Buscar por dni\" class=\"form-control\">            
            <button type=\"submit\" class=\"btn btn-info mt-1\">Buscar</button>
        </form>
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Titulo_sec</th>
                <th>Escuela_sec</th>
                <th>Anio_egreso</th>
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
        {% for alumno in alumnos %}
            <tr>
                
                <td>{{ alumno.tituloSec }}</td>
                <td>{{ alumno.escuelaSec }}</td>
                <td>{{ alumno.anioEgreso }}</td>
                <td>{{ alumno.persona.dnipasaporte }}</td>
                <td>{{ alumno.persona.nombre }}</td> 
                <td>{{ alumno.persona.apellido }}</td>
                <td>{{ alumno.persona.telefono }}</td> 
                <td>{{ alumno.persona.partido}}</td>  
                <td>{{ alumno.persona.calle }}</td>    
                <td>{{ alumno.persona.numero }}</td>                                                             
                <td>
                    <a href=\"{{ path('app_alumno_show', {'id': alumno.id}) }}\">Mostrar</a>
                    {% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_alumno_edit', {'id': alumno.id}) }}\">Editar</a>
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">No se encontraron registros</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_alumno_new') }}\">Nuevo Estudiante</a>
{% endblock %}
", "alumno/index.html.twig", "C:\\xampp\\htdocs\\practic3\\Local\\templates\\alumno\\index.html.twig");
    }
}

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

/* persona/index.html.twig */
class __TwigTemplate_14fb53081e68234258645c20854a4908 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "persona/index.html.twig", 1);
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

        yield "Persona index";
        
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
        yield "    <h1>Persona index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha_nacimiento</th>
                <th>Dni_pasaporte</th>
                <th>Genero</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Partido</th>
                <th>Calle</th>
                <th>Numero</th>
                <th>Piso</th>
                <th>Departamento</th>
                <th>Pasillo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["personas"]) || array_key_exists("personas", $context) ? $context["personas"] : (function () { throw new RuntimeError('Variable "personas" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 30
            yield "            <tr>
                <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "nombre", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "apellido", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            ((CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "fechaNacimiento", [], "any", false, false, false, 34)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "fechaNacimiento", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "dniPasaporte", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "genero", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "email", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "telefono", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "partido", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "calle", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "numero", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "piso", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "departamento", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "pasillo", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Mostrar</a>
                    <a href=\"";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["persona"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            yield "            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_new");
        yield "\">Crear nueva</a>
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
        return "persona/index.html.twig";
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
        return array (  207 => 58,  202 => 55,  193 => 51,  184 => 47,  180 => 46,  175 => 44,  171 => 43,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  120 => 30,  115 => 29,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Persona index{% endblock %}

{% block body %}
    <h1>Persona index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha_nacimiento</th>
                <th>Dni_pasaporte</th>
                <th>Genero</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Partido</th>
                <th>Calle</th>
                <th>Numero</th>
                <th>Piso</th>
                <th>Departamento</th>
                <th>Pasillo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for persona in personas %}
            <tr>
                <td>{{ persona.id }}</td>
                <td>{{ persona.nombre }}</td>
                <td>{{ persona.apellido }}</td>
                <td>{{ persona.fechaNacimiento ? persona.fechaNacimiento|date('Y-m-d') : '' }}</td>
                <td>{{ persona.dniPasaporte }}</td>
                <td>{{ persona.genero }}</td>
                <td>{{ persona.email }}</td>
                <td>{{ persona.telefono }}</td>
                <td>{{ persona.partido }}</td>
                <td>{{ persona.calle }}</td>
                <td>{{ persona.numero }}</td>
                <td>{{ persona.piso }}</td>
                <td>{{ persona.departamento }}</td>
                <td>{{ persona.pasillo }}</td>
                <td>
                    <a href=\"{{ path('app_persona_show', {'id': persona.id}) }}\">Mostrar</a>
                    <a href=\"{{ path('app_persona_edit', {'id': persona.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_persona_new') }}\">Crear nueva</a>
{% endblock %}
", "persona/index.html.twig", "F:\\xampp\\htdocs\\Local\\templates\\persona\\index.html.twig");
    }
}

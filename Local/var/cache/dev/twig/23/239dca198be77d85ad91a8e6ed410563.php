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

/* persona/show.html.twig */
class __TwigTemplate_2cb09c98ba9d7ae1bbea0940db418935 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "persona/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "persona/show.html.twig", 1);
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

        yield "Persona";
        
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
        yield "    <h1>Persona</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nommbre</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 16, $this->source); })()), "nommbre", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 20, $this->source); })()), "apellido", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Fecha_nacimiento</th>
                <td>";
        // line 24
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 24, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 24, $this->source); })()), "fechaNacimiento", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Dni_pasaporte</th>
                <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 28, $this->source); })()), "dniPasaporte", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 32, $this->source); })()), "genero", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 40, $this->source); })()), "telefono", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Partido</th>
                <td>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 44, $this->source); })()), "partido", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Calle</th>
                <td>";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 48, $this->source); })()), "calle", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 52, $this->source); })()), "numero", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Piso</th>
                <td>";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 56, $this->source); })()), "piso", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Departamento</th>
                <td>";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 60, $this->source); })()), "departamento", [], "any", false, false, false, 60), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Pasillo</th>
                <td>";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 64, $this->source); })()), "pasillo", [], "any", false, false, false, 64), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_persona_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["persona"]) || array_key_exists("persona", $context) ? $context["persona"] : (function () { throw new RuntimeError('Variable "persona" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 73
        yield Twig\Extension\CoreExtension::include($this->env, $context, "persona/_delete_form.html.twig");
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
        return "persona/show.html.twig";
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
        return array (  207 => 73,  202 => 71,  197 => 69,  189 => 64,  182 => 60,  175 => 56,  168 => 52,  161 => 48,  154 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Persona{% endblock %}

{% block body %}
    <h1>Persona</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ persona.id }}</td>
            </tr>
            <tr>
                <th>Nommbre</th>
                <td>{{ persona.nommbre }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ persona.apellido }}</td>
            </tr>
            <tr>
                <th>Fecha_nacimiento</th>
                <td>{{ persona.fechaNacimiento ? persona.fechaNacimiento|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Dni_pasaporte</th>
                <td>{{ persona.dniPasaporte }}</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>{{ persona.genero }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ persona.email }}</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ persona.telefono }}</td>
            </tr>
            <tr>
                <th>Partido</th>
                <td>{{ persona.partido }}</td>
            </tr>
            <tr>
                <th>Calle</th>
                <td>{{ persona.calle }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ persona.numero }}</td>
            </tr>
            <tr>
                <th>Piso</th>
                <td>{{ persona.piso }}</td>
            </tr>
            <tr>
                <th>Departamento</th>
                <td>{{ persona.departamento }}</td>
            </tr>
            <tr>
                <th>Pasillo</th>
                <td>{{ persona.pasillo }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_persona_index') }}\">back to list</a>

    <a href=\"{{ path('app_persona_edit', {'id': persona.id}) }}\">edit</a>

    {{ include('persona/_delete_form.html.twig') }}
{% endblock %}
", "persona/show.html.twig", "C:\\xampp\\htdocs\\Local\\templates\\persona\\show.html.twig");
    }
}

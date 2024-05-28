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

/* instituto/show.html.twig */
class __TwigTemplate_e0b7563dfadee53eab169e0b4a091e99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instituto/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instituto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "instituto/show.html.twig", 1);
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

        yield "Instituto";
        
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
        yield "    <h1>Instituto</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 20, $this->source); })()), "numero", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Url_instituto</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 24, $this->source); })()), "urlInstituto", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 28, $this->source); })()), "tipo", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Calle</th>
                <td>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 36, $this->source); })()), "calle", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Altura</th>
                <td>";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 40, $this->source); })()), "altura", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Numero_cue</th>
                <td>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 44, $this->source); })()), "numeroCue", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Instituto</th>
                <td>";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 48, $this->source); })()), "instituto", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instituto_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instituto_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["instituto"]) || array_key_exists("instituto", $context) ? $context["instituto"] : (function () { throw new RuntimeError('Variable "instituto" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "instituto/_delete_form.html.twig");
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
        return "instituto/show.html.twig";
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
        return array (  179 => 57,  174 => 55,  169 => 53,  161 => 48,  154 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Instituto{% endblock %}

{% block body %}
    <h1>Instituto</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ instituto.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ instituto.nombre }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ instituto.numero }}</td>
            </tr>
            <tr>
                <th>Url_instituto</th>
                <td>{{ instituto.urlInstituto }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ instituto.tipo }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ instituto.email }}</td>
            </tr>
            <tr>
                <th>Calle</th>
                <td>{{ instituto.calle }}</td>
            </tr>
            <tr>
                <th>Altura</th>
                <td>{{ instituto.altura }}</td>
            </tr>
            <tr>
                <th>Numero_cue</th>
                <td>{{ instituto.numeroCue }}</td>
            </tr>
            <tr>
                <th>Instituto</th>
                <td>{{ instituto.instituto }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_instituto_index') }}\">back to list</a>

    <a href=\"{{ path('app_instituto_edit', {'id': instituto.id}) }}\">edit</a>

    {{ include('instituto/_delete_form.html.twig') }}
{% endblock %}
", "instituto/show.html.twig", "C:\\xampp\\htdocs\\Local\\templates\\instituto\\show.html.twig");
    }
}

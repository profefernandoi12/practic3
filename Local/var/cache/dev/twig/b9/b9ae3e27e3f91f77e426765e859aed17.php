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

/* examen_final/show.html.twig */
class __TwigTemplate_7e3c6945c824ac7b416ae25e2e49bb65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen_final/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "examen_final/show.html.twig", 1);
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

        yield "ExamenFinal";
        
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
        yield "    <h1>ExamenFinal</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Asignatura</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 16, $this->source); })()), "asignatura", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 20
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 20, $this->source); })()), "fecha", [], "any", false, false, false, 20)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 20, $this->source); })()), "fecha", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>

            <tr>
                <th>Presidente</th>
                <td>";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 25, $this->source); })()), "Presidente", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                <td><a href=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 26, $this->source); })()), "Presidente", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" style=\"display:block;\">&nbsp;Ir a docente</a></td>
                
            </tr>

            <tr>

                <th>Vocal 1</th>
                <td>";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 33, $this->source); })()), "Vocal1", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                <td><a href=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 34, $this->source); })()), "Vocal1", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" style=\"display:block;\">&nbsp;Ir a docente</a></td>
            </tr>

            <tr>
                <th>Vocal 2</th>
                <td>";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 39, $this->source); })()), "Vocal2", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                <td><a href=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_docente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 40, $this->source); })()), "Vocal2", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\" style=\"display:block;\">&nbsp;Ir a docente</a></td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_examen_final_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["examen_final"]) || array_key_exists("examen_final", $context) ? $context["examen_final"] : (function () { throw new RuntimeError('Variable "examen_final" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "examen_final/_delete_form.html.twig");
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
        return "examen_final/show.html.twig";
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
        return array (  168 => 49,  163 => 47,  158 => 45,  150 => 40,  146 => 39,  138 => 34,  134 => 33,  124 => 26,  120 => 25,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ExamenFinal{% endblock %}

{% block body %}
    <h1>ExamenFinal</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ examen_final.id }}</td>
            </tr>
            <tr>
                <th>Asignatura</th>
                <td>{{ examen_final.asignatura }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ examen_final.fecha ? examen_final.fecha|date('Y-m-d') : '' }}</td>
            </tr>

            <tr>
                <th>Presidente</th>
                <td>{{ examen_final.Presidente }}</td>
                <td><a href=\"{{ path('app_docente_show', {'id': examen_final.Presidente.id}) }}\" style=\"display:block;\">&nbsp;Ir a docente</a></td>
                
            </tr>

            <tr>

                <th>Vocal 1</th>
                <td>{{ examen_final.Vocal1 }}</td>
                <td><a href=\"{{ path('app_docente_show', {'id': examen_final.Vocal1.id}) }}\" style=\"display:block;\">&nbsp;Ir a docente</a></td>
            </tr>

            <tr>
                <th>Vocal 2</th>
                <td>{{ examen_final.Vocal2 }}</td>
                <td><a href=\"{{ path('app_docente_show', {'id': examen_final.Vocal2.id}) }}\" style=\"display:block;\">&nbsp;Ir a docente</a></td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_examen_final_index') }}\">back to list</a>

    <a href=\"{{ path('app_examen_final_edit', {'id': examen_final.id}) }}\">edit</a>

    {{ include('examen_final/_delete_form.html.twig') }}
{% endblock %}
", "examen_final/show.html.twig", "C:\\xampp\\htdocs\\Local\\templates\\examen_final\\show.html.twig");
    }
}

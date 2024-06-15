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

/* correlativa/index.html.twig */
class __TwigTemplate_c5b5b72cb57f71b36a566efe5e417960 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correlativa/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correlativa/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "correlativa/index.html.twig", 1);
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

        yield "Correlativa index";
        
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
        yield "    <h1>Lista de Correlativas</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tecnicatura</th>
                <th>Para aprobar</th>
                <th>Deberá tener aprobado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["correlativas"]) || array_key_exists("correlativas", $context) ? $context["correlativas"] : (function () { throw new RuntimeError('Variable "correlativas" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["correlativa"]) {
            // line 20
            yield "            <tr>
                <td>";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["correlativa"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["correlativa"], "asignatura", [], "any", false, false, false, 22), "Tecnicatura", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["correlativa"], "asignatura", [], "any", false, false, false, 23), "nombre", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["correlativa"], "asignatura", [], "any", false, false, false, 25));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["asignatura"]) {
                // line 26
                yield "                        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["asignatura"], "nombre", [], "any", false, false, false, 26), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                    yield ", ";
                }
                // line 27
                yield "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignatura'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                </td>
              
                <td>
                    <a href=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["correlativa"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">Mostrar</a>
                    ";
            // line 32
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 33
                yield "
                        <a href=\"";
                // line 34
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["correlativa"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\">Editar</a>
                    ";
            }
            // line 36
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            yield "            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correlativa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </tbody>

    </table>
";
        // line 46
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 47
            yield "
    <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correlativa_new");
            yield "\">Crear Nueva Correlativa</a>
";
        }
        // line 49
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
        return "correlativa/index.html.twig";
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
        return array (  213 => 49,  208 => 48,  205 => 47,  203 => 46,  198 => 43,  189 => 39,  182 => 36,  177 => 34,  174 => 33,  172 => 32,  168 => 31,  163 => 28,  149 => 27,  143 => 26,  126 => 25,  121 => 23,  117 => 22,  113 => 21,  110 => 20,  105 => 19,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Correlativa index{% endblock %}

{% block body %}
    <h1>Lista de Correlativas</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tecnicatura</th>
                <th>Para aprobar</th>
                <th>Deberá tener aprobado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for correlativa in correlativas %}
            <tr>
                <td>{{ correlativa.id }}</td>
                <td>{{correlativa.asignatura.Tecnicatura}}</td>
                <td>{{ correlativa.asignatura.nombre }}</td>
                <td>
                    {% for asignatura in correlativa.asignatura %}
                        {{ asignatura.nombre }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                </td>
              
                <td>
                    <a href=\"{{ path('app_correlativa_show', {'id': correlativa.id}) }}\">Mostrar</a>
                    {% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}

                        <a href=\"{{ path('app_correlativa_edit', {'id': correlativa.id}) }}\">Editar</a>
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>

    </table>
{% if is_granted ('ROLE_SUPER_ADMIN') or is_granted ('ROLE_ADMIN') %}

    <a href=\"{{ path('app_correlativa_new') }}\">Crear Nueva Correlativa</a>
{% endif %}    
{% endblock %}
", "correlativa/index.html.twig", "C:\\xampp\\htdocs\\practic3\\Local\\templates\\correlativa\\index.html.twig");
    }
}

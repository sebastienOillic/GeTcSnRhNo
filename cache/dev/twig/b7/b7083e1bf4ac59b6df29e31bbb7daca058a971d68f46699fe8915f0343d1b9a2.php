<?php

/* AppBundle:StyleDanse:show.html.twig */
class __TwigTemplate_c6d6ae5a13c8dff1b42331f41a2894d45006e50e066811498166c36fea96bdb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:StyleDanse:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd8ebe3a5eb9e20fe55af937aa26f2f3ab3aa6f60f5c2f21a1e408817460c1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8ebe3a5eb9e20fe55af937aa26f2f3ab3aa6f60f5c2f21a1e408817460c1cf->enter($__internal_dd8ebe3a5eb9e20fe55af937aa26f2f3ab3aa6f60f5c2f21a1e408817460c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:StyleDanse:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd8ebe3a5eb9e20fe55af937aa26f2f3ab3aa6f60f5c2f21a1e408817460c1cf->leave($__internal_dd8ebe3a5eb9e20fe55af937aa26f2f3ab3aa6f60f5c2f21a1e408817460c1cf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fae424348bdd9f21181e932cae1c6be131cdfced7eabcbd11a061608d0b231a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae424348bdd9f21181e932cae1c6be131cdfced7eabcbd11a061608d0b231a7->enter($__internal_fae424348bdd9f21181e932cae1c6be131cdfced7eabcbd11a061608d0b231a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Styles de danse</h1>
    <hr>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["styleDanse"] ?? $this->getContext($context, "styleDanse")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["styleDanse"] ?? $this->getContext($context, "styleDanse")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["styleDanse"] ?? $this->getContext($context, "styleDanse")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_index");
        echo "\" class=\"btn btn-sm btn-default\">
                Liste des Danses
            </a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_edit", array("id" => $this->getAttribute(($context["styleDanse"] ?? $this->getContext($context, "styleDanse")), "id", array()))), "html", null, true);
        echo "\"
                class=\"btn btn-sm btn-warning\">
                Modifier
            </a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-sm btn-danger\">
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fae424348bdd9f21181e932cae1c6be131cdfced7eabcbd11a061608d0b231a7->leave($__internal_fae424348bdd9f21181e932cae1c6be131cdfced7eabcbd11a061608d0b231a7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:StyleDanse:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  89 => 36,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block content %}
    <h1>Styles de danse</h1>
    <hr>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ styleDanse.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ styleDanse.nom }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ styleDanse.description }}</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"{{ path('app_admin_styleDanse_index') }}\" class=\"btn btn-sm btn-default\">
                Liste des Danses
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_admin_styleDanse_edit', { 'id': styleDanse.id }) }}\"
                class=\"btn btn-sm btn-warning\">
                Modifier
            </a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-sm btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AppBundle:StyleDanse:show.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/StyleDanse/show.html.twig");
    }
}

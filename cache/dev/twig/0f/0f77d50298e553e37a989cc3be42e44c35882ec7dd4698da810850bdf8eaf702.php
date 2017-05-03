<?php

/* AppBundle:StyleDanse:new.html.twig */
class __TwigTemplate_8a12f066de49dd39084aa2eb78f770d46e0f3a15d5788318e57ad262a4d97dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:StyleDanse:new.html.twig", 1);
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
        $__internal_314256954afc3d46301d5c63ea47fa689b9351c84af31ad2a378a1e08c2ddaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314256954afc3d46301d5c63ea47fa689b9351c84af31ad2a378a1e08c2ddaed->enter($__internal_314256954afc3d46301d5c63ea47fa689b9351c84af31ad2a378a1e08c2ddaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:StyleDanse:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314256954afc3d46301d5c63ea47fa689b9351c84af31ad2a378a1e08c2ddaed->leave($__internal_314256954afc3d46301d5c63ea47fa689b9351c84af31ad2a378a1e08c2ddaed_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_248007fb7c93fad68926f63580a2bfe5017b74dbbe8f770f9ee628cce013760d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248007fb7c93fad68926f63580a2bfe5017b74dbbe8f770f9ee628cce013760d->enter($__internal_248007fb7c93fad68926f63580a2bfe5017b74dbbe8f770f9ee628cce013760d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Création d'un style de danse</h1>
    <hr>
    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_index");
        echo "\" class=\"btn btn-sm btn-default\">
                Back to the list
            </a>
        </li>
    </ul>
";
        
        $__internal_248007fb7c93fad68926f63580a2bfe5017b74dbbe8f770f9ee628cce013760d->leave($__internal_248007fb7c93fad68926f63580a2bfe5017b74dbbe8f770f9ee628cce013760d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:StyleDanse:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Création d'un style de danse</h1>
    <hr>
    {{ form_start(form) }}
        {{ form_widget(form) }}
    {{ form_end(form) }}
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"{{ path('app_admin_styleDanse_index') }}\" class=\"btn btn-sm btn-default\">
                Back to the list
            </a>
        </li>
    </ul>
{% endblock %}
", "AppBundle:StyleDanse:new.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/StyleDanse/new.html.twig");
    }
}

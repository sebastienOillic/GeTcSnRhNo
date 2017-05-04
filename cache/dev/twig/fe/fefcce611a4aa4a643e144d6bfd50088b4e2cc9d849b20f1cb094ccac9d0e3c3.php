<?php

/* AppBundle:StyleDanse:edit.html.twig */
class __TwigTemplate_0fd57b9713174c8df872b5f55483d40323d32f87cae9c12983b71bbe75923858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:StyleDanse:edit.html.twig", 1);
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
        $__internal_32c8e6bc9b0711bee6d327f3116f12828a30a205b4941117ba77b71cfae175bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c8e6bc9b0711bee6d327f3116f12828a30a205b4941117ba77b71cfae175bd->enter($__internal_32c8e6bc9b0711bee6d327f3116f12828a30a205b4941117ba77b71cfae175bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:StyleDanse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c8e6bc9b0711bee6d327f3116f12828a30a205b4941117ba77b71cfae175bd->leave($__internal_32c8e6bc9b0711bee6d327f3116f12828a30a205b4941117ba77b71cfae175bd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_534766a86d2c1c55e6ab7e938e852b65ff18f342184d9bd09a427a8a7b5edb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534766a86d2c1c55e6ab7e938e852b65ff18f342184d9bd09a427a8a7b5edb8c->enter($__internal_534766a86d2c1c55e6ab7e938e852b65ff18f342184d9bd09a427a8a7b5edb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1>Modifier Style de danses</h1>
    <hr>
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_index");
        echo "\" class=\"btn btn-sm btn-default\">
                Liste des styles de danse
            </a>
        </li>
        <li>
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-sm btn-danger\">
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_534766a86d2c1c55e6ab7e938e852b65ff18f342184d9bd09a427a8a7b5edb8c->leave($__internal_534766a86d2c1c55e6ab7e938e852b65ff18f342184d9bd09a427a8a7b5edb8c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:StyleDanse:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  67 => 21,  59 => 16,  52 => 12,  48 => 11,  44 => 10,  40 => 8,  34 => 7,  11 => 1,);
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
    <h1>Modifier Style de danses</h1>
    <hr>
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    {{ form_end(edit_form) }}
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"{{ path('app_admin_styleDanse_index') }}\" class=\"btn btn-sm btn-default\">
                Liste des styles de danse
            </a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-sm btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}

", "AppBundle:StyleDanse:edit.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/StyleDanse/edit.html.twig");
    }
}

<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_35f28841e71d7b1fe657db55262073b2c2a2c7292df3a4e6d90a5aace1a6053b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bf1a06611ec76bbf4a0d94210a940c00b2170aeeed1c6c6b231acc5f1bf2214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf1a06611ec76bbf4a0d94210a940c00b2170aeeed1c6c6b231acc5f1bf2214->enter($__internal_5bf1a06611ec76bbf4a0d94210a940c00b2170aeeed1c6c6b231acc5f1bf2214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf1a06611ec76bbf4a0d94210a940c00b2170aeeed1c6c6b231acc5f1bf2214->leave($__internal_5bf1a06611ec76bbf4a0d94210a940c00b2170aeeed1c6c6b231acc5f1bf2214_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6940a05ffb46a45f019f02ee868eea104aec62c96abc521d82041d2103b49f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6940a05ffb46a45f019f02ee868eea104aec62c96abc521d82041d2103b49f9->enter($__internal_c6940a05ffb46a45f019f02ee868eea104aec62c96abc521d82041d2103b49f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c6940a05ffb46a45f019f02ee868eea104aec62c96abc521d82041d2103b49f9->leave($__internal_c6940a05ffb46a45f019f02ee868eea104aec62c96abc521d82041d2103b49f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/media/www-dev/private/GeTcSnRhNo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}

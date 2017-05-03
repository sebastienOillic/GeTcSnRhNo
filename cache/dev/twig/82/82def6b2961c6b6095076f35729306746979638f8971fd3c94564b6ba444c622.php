<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8db69f9e47914452708bd8a1ed121e027c59e7dd5bb53a50e068e7507437edee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f047d324e405f9fa24be456b349c8122f813ff7b9847e1fd33c5ba7731d68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f047d324e405f9fa24be456b349c8122f813ff7b9847e1fd33c5ba7731d68b->enter($__internal_c2f047d324e405f9fa24be456b349c8122f813ff7b9847e1fd33c5ba7731d68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f047d324e405f9fa24be456b349c8122f813ff7b9847e1fd33c5ba7731d68b->leave($__internal_c2f047d324e405f9fa24be456b349c8122f813ff7b9847e1fd33c5ba7731d68b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91c40eef2c6da8e1c5b69f88035dae757270e86c11ef9acc1002a4cfc964628f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c40eef2c6da8e1c5b69f88035dae757270e86c11ef9acc1002a4cfc964628f->enter($__internal_91c40eef2c6da8e1c5b69f88035dae757270e86c11ef9acc1002a4cfc964628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91c40eef2c6da8e1c5b69f88035dae757270e86c11ef9acc1002a4cfc964628f->leave($__internal_91c40eef2c6da8e1c5b69f88035dae757270e86c11ef9acc1002a4cfc964628f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b52986bb84495ce1619ac3061723f6eb091499d1d47e2542dcb59c588389ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b52986bb84495ce1619ac3061723f6eb091499d1d47e2542dcb59c588389ee->enter($__internal_16b52986bb84495ce1619ac3061723f6eb091499d1d47e2542dcb59c588389ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16b52986bb84495ce1619ac3061723f6eb091499d1d47e2542dcb59c588389ee->leave($__internal_16b52986bb84495ce1619ac3061723f6eb091499d1d47e2542dcb59c588389ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_968fd8e6f26ef6c20003935e0f85cd14281216c809167067e1f756a7d237f21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968fd8e6f26ef6c20003935e0f85cd14281216c809167067e1f756a7d237f21d->enter($__internal_968fd8e6f26ef6c20003935e0f85cd14281216c809167067e1f756a7d237f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_968fd8e6f26ef6c20003935e0f85cd14281216c809167067e1f756a7d237f21d->leave($__internal_968fd8e6f26ef6c20003935e0f85cd14281216c809167067e1f756a7d237f21d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/media/www-dev/private/GeTcSnRhNo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

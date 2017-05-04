<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_73997b8471932c3623b9a088e68df7945a8824b2cb3b5e709108d1549cc8f18b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e23d7f920dacb6b909aed37f1357b9133c1263d6f59f9f8d03d51ac703f1dd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23d7f920dacb6b909aed37f1357b9133c1263d6f59f9f8d03d51ac703f1dd84->enter($__internal_e23d7f920dacb6b909aed37f1357b9133c1263d6f59f9f8d03d51ac703f1dd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e23d7f920dacb6b909aed37f1357b9133c1263d6f59f9f8d03d51ac703f1dd84->leave($__internal_e23d7f920dacb6b909aed37f1357b9133c1263d6f59f9f8d03d51ac703f1dd84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c820a7e5667906585195fb1630cc6be9c7a3718b5454edfb2aca1bbe4cbe6193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c820a7e5667906585195fb1630cc6be9c7a3718b5454edfb2aca1bbe4cbe6193->enter($__internal_c820a7e5667906585195fb1630cc6be9c7a3718b5454edfb2aca1bbe4cbe6193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

        <label for=\"password\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
        
        $__internal_c820a7e5667906585195fb1630cc6be9c7a3718b5454edfb2aca1bbe4cbe6193->leave($__internal_c820a7e5667906585195fb1630cc6be9c7a3718b5454edfb2aca1bbe4cbe6193_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  78 => 19,  71 => 15,  66 => 13,  62 => 12,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block fos_user_content %}
    {% if error %}
        <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
    {% endif %}

    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

        <label for=\"username\">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

        <label for=\"password\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
    </form>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/Security/login.html.twig");
    }
}

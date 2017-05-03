<?php

/* ::base.html.twig */
class __TwigTemplate_93d5f051a18aa20bffbf2d76c3260b23e2715f6ca343d13636011a153acec21e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82faaaf0df2644103ca901974b4db94faab998edd151b8fc4a867bfb9bfe708d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82faaaf0df2644103ca901974b4db94faab998edd151b8fc4a867bfb9bfe708d->enter($__internal_82faaaf0df2644103ca901974b4db94faab998edd151b8fc4a867bfb9bfe708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/favicon.ico"), "html", null, true);
        echo "\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <!--[if lt IE 9]>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body>
    <div id=\"container\">
        ";
        // line 28
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "
        <main>    
        ";
        // line 34
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "        </main>

        ";
        // line 39
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "   </div>
</body>
</html>
";
        
        $__internal_82faaaf0df2644103ca901974b4db94faab998edd151b8fc4a867bfb9bfe708d->leave($__internal_82faaaf0df2644103ca901974b4db94faab998edd151b8fc4a867bfb9bfe708d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c8ac00644680f8599a8de1a3015c8334f33e4003364af1be81d5e82c6cb631e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8ac00644680f8599a8de1a3015c8334f33e4003364af1be81d5e82c6cb631e->enter($__internal_8c8ac00644680f8599a8de1a3015c8334f33e4003364af1be81d5e82c6cb631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ami'Danse";
        
        $__internal_8c8ac00644680f8599a8de1a3015c8334f33e4003364af1be81d5e82c6cb631e->leave($__internal_8c8ac00644680f8599a8de1a3015c8334f33e4003364af1be81d5e82c6cb631e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_888501c18788eff46f853925bbf8bf3d6396677f28108d9e351a0cc6383014e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888501c18788eff46f853925bbf8bf3d6396677f28108d9e351a0cc6383014e2->enter($__internal_888501c18788eff46f853925bbf8bf3d6396677f28108d9e351a0cc6383014e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Dancing+Script\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\"> 
    ";
        
        $__internal_888501c18788eff46f853925bbf8bf3d6396677f28108d9e351a0cc6383014e2->leave($__internal_888501c18788eff46f853925bbf8bf3d6396677f28108d9e351a0cc6383014e2_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb37f78121f2eac7e826d6822360edcf7d3241348aad03823cdab70f37a0d82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb37f78121f2eac7e826d6822360edcf7d3241348aad03823cdab70f37a0d82a->enter($__internal_cb37f78121f2eac7e826d6822360edcf7d3241348aad03823cdab70f37a0d82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "            ";
        $this->loadTemplate("AppBundle:Layout:header.html.twig", "::base.html.twig", 29)->display($context);
        echo "            
        ";
        
        $__internal_cb37f78121f2eac7e826d6822360edcf7d3241348aad03823cdab70f37a0d82a->leave($__internal_cb37f78121f2eac7e826d6822360edcf7d3241348aad03823cdab70f37a0d82a_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_23f624122784898163635a3fc66da7bc9c68180d08cc738081b57ad9aab9f89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f624122784898163635a3fc66da7bc9c68180d08cc738081b57ad9aab9f89f->enter($__internal_23f624122784898163635a3fc66da7bc9c68180d08cc738081b57ad9aab9f89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "        ";
        
        $__internal_23f624122784898163635a3fc66da7bc9c68180d08cc738081b57ad9aab9f89f->leave($__internal_23f624122784898163635a3fc66da7bc9c68180d08cc738081b57ad9aab9f89f_prof);

    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a6fa843b0b4a8cb7b3c4eac5c4da5b5d298f355a0ad2f447d06aec805436ce88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fa843b0b4a8cb7b3c4eac5c4da5b5d298f355a0ad2f447d06aec805436ce88->enter($__internal_a6fa843b0b4a8cb7b3c4eac5c4da5b5d298f355a0ad2f447d06aec805436ce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 40
        echo "        ";
        $this->loadTemplate("AppBundle:Layout:footer.html.twig", "::base.html.twig", 40)->display($context);
        // line 41
        echo "        ";
        
        $__internal_a6fa843b0b4a8cb7b3c4eac5c4da5b5d298f355a0ad2f447d06aec805436ce88->leave($__internal_a6fa843b0b4a8cb7b3c4eac5c4da5b5d298f355a0ad2f447d06aec805436ce88_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83f504c286b5de02c49464b0b27013d3e26dc149de47e17e84cbd0903055dc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f504c286b5de02c49464b0b27013d3e26dc149de47e17e84cbd0903055dc75->enter($__internal_83f504c286b5de02c49464b0b27013d3e26dc149de47e17e84cbd0903055dc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/navbar.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_83f504c286b5de02c49464b0b27013d3e26dc149de47e17e84cbd0903055dc75->leave($__internal_83f504c286b5de02c49464b0b27013d3e26dc149de47e17e84cbd0903055dc75_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 47,  201 => 46,  197 => 45,  192 => 44,  186 => 43,  179 => 41,  176 => 40,  170 => 39,  163 => 35,  157 => 34,  147 => 29,  141 => 28,  132 => 16,  127 => 14,  123 => 13,  119 => 12,  114 => 11,  108 => 10,  96 => 8,  86 => 49,  84 => 43,  81 => 42,  78 => 39,  74 => 36,  71 => 34,  67 => 31,  64 => 28,  55 => 21,  51 => 20,  47 => 18,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('bundles/app/img/favicon.ico') }}\" />
    <title>{% block title %}Ami'Danse{% endblock %}</title>

    {% block stylesheets %}
        <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bundles/app/css/font-awesome.min.css') }}\" rel=\"stylesheet\"> 
        <link href=\"{{ asset('bundles/app/css/ie10-viewport-bug-workaround.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bundles/app/css/styles.css') }}\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Dancing+Script\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/slider.css') }}\"> 
    {% endblock stylesheets %}

    <!--[if lt IE 9]>
    <script src=\"{{ asset('bundles/app/js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/respond.min.js') }}\"></script>
    <![endif]-->
</head>

<body>
    <div id=\"container\">
        {# Header #}
        {% block header %}
            {% include \"AppBundle:Layout:header.html.twig\" %}            
        {% endblock %}

        <main>    
        {# Content #}
        {% block content %}
        {% endblock %}
        </main>

        {# Footer #}
        {% block footer %}
        {% include \"AppBundle:Layout:footer.html.twig\" %}
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('bundles/app/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/app/js/ie10-viewport-bug-workaround.js') }}\"></script>
            <script src=\"{{ asset('bundles/app/js/navbar.js') }}\"></script>
        {% endblock javascripts %}
   </div>
</body>
</html>
", "::base.html.twig", "/media/www-dev/private/GeTcSnRhNo/app/Resources/views/base.html.twig");
    }
}

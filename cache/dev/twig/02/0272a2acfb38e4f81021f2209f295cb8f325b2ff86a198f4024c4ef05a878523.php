<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_3c780afd1e8543517fe3a2241b7add24843a94f3a80cf3216a8c725825515fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee18760057b8c94ea7721c136a390c3a7b133eafd475d39a7ec350d9f5a65b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee18760057b8c94ea7721c136a390c3a7b133eafd475d39a7ec350d9f5a65b01->enter($__internal_ee18760057b8c94ea7721c136a390c3a7b133eafd475d39a7ec350d9f5a65b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"icon\" href=\"/favicon.ico\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <!--[if lt IE 9]>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body>
    ";
        // line 27
        $this->loadTemplate("AppBundle:Layout:navbar.html.twig", "AppBundle::base.html.twig", 27)->display($context);
        // line 28
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                ";
        // line 32
        $this->loadTemplate("AppBundle:Layout:flashes.html.twig", "AppBundle::base.html.twig", 32)->display($context);
        echo " ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            </div>
            <div class=\"col-sm-3 col-md-2 sidebar\">
                ";
        // line 35
        $this->loadTemplate("AppBundle:Layout:sidebar.html.twig", "AppBundle::base.html.twig", 35)->display($context);
        // line 36
        echo "            </div>
        </div>
    </div>

    ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
</body>

</html>";
        
        $__internal_ee18760057b8c94ea7721c136a390c3a7b133eafd475d39a7ec350d9f5a65b01->leave($__internal_ee18760057b8c94ea7721c136a390c3a7b133eafd475d39a7ec350d9f5a65b01_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_89dec7b834cf26d4f2fa48a0604a15ee29bdf0a9b5058d22b921f28a58518e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dec7b834cf26d4f2fa48a0604a15ee29bdf0a9b5058d22b921f28a58518e14->enter($__internal_89dec7b834cf26d4f2fa48a0604a15ee29bdf0a9b5058d22b921f28a58518e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AmiDanse";
        
        $__internal_89dec7b834cf26d4f2fa48a0604a15ee29bdf0a9b5058d22b921f28a58518e14->leave($__internal_89dec7b834cf26d4f2fa48a0604a15ee29bdf0a9b5058d22b921f28a58518e14_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dcdcdeb73a604fdab880c643e10efe6bc30d48f00c57a1e7d2f4a22cef6f704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcdcdeb73a604fdab880c643e10efe6bc30d48f00c57a1e7d2f4a22cef6f704->enter($__internal_3dcdcdeb73a604fdab880c643e10efe6bc30d48f00c57a1e7d2f4a22cef6f704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_3dcdcdeb73a604fdab880c643e10efe6bc30d48f00c57a1e7d2f4a22cef6f704->leave($__internal_3dcdcdeb73a604fdab880c643e10efe6bc30d48f00c57a1e7d2f4a22cef6f704_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_197973bb09d6c7dac407a3aa34246ad98a655d20534268ae43ed100c4f177c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197973bb09d6c7dac407a3aa34246ad98a655d20534268ae43ed100c4f177c39->enter($__internal_197973bb09d6c7dac407a3aa34246ad98a655d20534268ae43ed100c4f177c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_197973bb09d6c7dac407a3aa34246ad98a655d20534268ae43ed100c4f177c39->leave($__internal_197973bb09d6c7dac407a3aa34246ad98a655d20534268ae43ed100c4f177c39_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b079b71510b413e83482d988ca79dbacac81b23e72ac2adb10667da7fed34e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b079b71510b413e83482d988ca79dbacac81b23e72ac2adb10667da7fed34e6d->enter($__internal_b079b71510b413e83482d988ca79dbacac81b23e72ac2adb10667da7fed34e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_b079b71510b413e83482d988ca79dbacac81b23e72ac2adb10667da7fed34e6d->leave($__internal_b079b71510b413e83482d988ca79dbacac81b23e72ac2adb10667da7fed34e6d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  159 => 42,  154 => 41,  148 => 40,  137 => 32,  128 => 17,  124 => 16,  120 => 15,  115 => 14,  109 => 13,  97 => 11,  87 => 45,  85 => 40,  79 => 36,  77 => 35,  73 => 33,  69 => 32,  63 => 28,  61 => 27,  53 => 22,  49 => 21,  45 => 19,  43 => 13,  38 => 11,  26 => 1,);
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

    <link rel=\"icon\" href=\"/favicon.ico\">

    <title>{% block title 'AmiDanse' %}</title>

    {% block stylesheets %}
    <link href=\"{{ asset('bundles/app/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/ie10-viewport-bug-workaround.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/app/css/admin.css') }}\" rel=\"stylesheet\"> 
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/slider.css') }}\">
    {% endblock stylesheets %}

    <!--[if lt IE 9]>
    <script src=\"{{ asset('bundles/app/js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/respond.min.js') }}\"></script>
    <![endif]-->
</head>

<body>
    {% include 'AppBundle:Layout:navbar.html.twig' %}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                {% include 'AppBundle:Layout:flashes.html.twig' %} {% block content %}{% endblock content %}
            </div>
            <div class=\"col-sm-3 col-md-2 sidebar\">
                {% include \"AppBundle:Layout:sidebar.html.twig\" %}
            </div>
        </div>
    </div>

    {% block javascripts %}
    <script src=\"{{ asset('bundles/app/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/ie10-viewport-bug-workaround.js') }}\"></script>
    {% endblock javascripts %}

</body>

</html>", "AppBundle::base.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/base.html.twig");
    }
}

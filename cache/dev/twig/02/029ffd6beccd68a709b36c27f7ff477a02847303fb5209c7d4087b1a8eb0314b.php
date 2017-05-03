<?php

/* AppBundle:Layout:header.html.twig */
class __TwigTemplate_f510ea556387bf8107304dd751f0bd2abcb5d25c02d00c005a1829aa0c6984a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_920f429c88a72917f039f55d3c8904e9c9eaa76ef7c1ed6b1d58ed1caae2517c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920f429c88a72917f039f55d3c8904e9c9eaa76ef7c1ed6b1d58ed1caae2517c->enter($__internal_920f429c88a72917f039f55d3c8904e9c9eaa76ef7c1ed6b1d58ed1caae2517c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:header.html.twig"));

        // line 1
        echo "<header>
    <div class=\"row\" id=\"accueilHeader\">
        <div class=\"col-sm-2\" id=\"image\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo2.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"/>
        </div>
        <div class=\"col-sm-8\" id=\"titreAccueil\">
            <a href=\"/\">Ami'Danse</a>
        </div>
        <div class=\"col-sm-2\" id=\"buttonConnexion\">
            <a href=\"/login\" class=\"btn btn-default\">Connexion</a>
        </div>
    </div>
    ";
        // line 14
        echo "    ";
        $this->loadTemplate("AppBundle:Layout:navbar.html.twig", "AppBundle:Layout:header.html.twig", 14)->display($context);
        // line 15
        echo "</header>
";
        
        $__internal_920f429c88a72917f039f55d3c8904e9c9eaa76ef7c1ed6b1d58ed1caae2517c->leave($__internal_920f429c88a72917f039f55d3c8904e9c9eaa76ef7c1ed6b1d58ed1caae2517c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  39 => 14,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <div class=\"row\" id=\"accueilHeader\">
        <div class=\"col-sm-2\" id=\"image\">
            <img src=\"{{ asset('bundles/app/img/logo2.jpg') }}\" class=\"img-circle\"/>
        </div>
        <div class=\"col-sm-8\" id=\"titreAccueil\">
            <a href=\"/\">Ami'Danse</a>
        </div>
        <div class=\"col-sm-2\" id=\"buttonConnexion\">
            <a href=\"/login\" class=\"btn btn-default\">Connexion</a>
        </div>
    </div>
    {# Navbar #}
    {% include \"AppBundle:Layout:navbar.html.twig\" %}
</header>
", "AppBundle:Layout:header.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/Layout/header.html.twig");
    }
}

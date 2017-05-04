<?php

/* AppBundle:Accueil:home.html.twig */
class __TwigTemplate_d4ac4318c63dec6fe103a611dd43949f6614871bcfceee86ab18205078393831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Accueil:home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5210b1ffbcf2b49c4f66bebde62a9c0db78c3a378fae8d2d903bc88a1d6d59a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5210b1ffbcf2b49c4f66bebde62a9c0db78c3a378fae8d2d903bc88a1d6d59a9->enter($__internal_5210b1ffbcf2b49c4f66bebde62a9c0db78c3a378fae8d2d903bc88a1d6d59a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Accueil:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5210b1ffbcf2b49c4f66bebde62a9c0db78c3a378fae8d2d903bc88a1d6d59a9->leave($__internal_5210b1ffbcf2b49c4f66bebde62a9c0db78c3a378fae8d2d903bc88a1d6d59a9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_31301acdf80a68c652a1e9e0e5ff210a612e5ed52bb6692de5fc285b1c7a8cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31301acdf80a68c652a1e9e0e5ff210a612e5ed52bb6692de5fc285b1c7a8cff->enter($__internal_31301acdf80a68c652a1e9e0e5ff210a612e5ed52bb6692de5fc285b1c7a8cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<!-- <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/slider.css"), "html", null, true);
        echo "\"> -->
<!-- Lien CSS déplacé dans la partie head dans app/Resources/views/base.html.twig -->

<div class=\"contentAccueil\">
    <div class=\"row\">
        <div class=\"col-md-8\">
           <div id=\"slider\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-5.jpg"), "html", null, true);
        echo "\" alt=\"ami-danse-5\" class=\"img-thumbnail\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-1.jpg"), "html", null, true);
        echo "\" alt=\"ami-danse-1\" class=\"img-thumbnail\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-2.jpg"), "html", null, true);
        echo "\" alt=\"ami-danse-2\" class=\"img-thumbnail\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-4.jpg"), "html", null, true);
        echo "\" alt=\"ami-danse-4\" class=\"img-thumbnail\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-3.jpg"), "html", null, true);
        echo "\" alt=\"ami-danse-3\" class=\"img-thumbnail\">
           </div>
           <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/slider.js"), "html", null, true);
        echo "\"></script>
           <div class=\"row\" id=\"danseAccueil\">
                <div class=\"col-md-4\">
                   <div class=\"listedanses tomato\">
                        <h3><a href=\"#\">Danses modernes</a></h3>
                        <ul class=\"listetypesdanse\">
                            <li><a href=\"#\">Boston</a></li>
                            <li><a href=\"#\">Charleston</a></li>
                            <li><a href=\"#\">Foxtrot</a></li>
                            <li><a href=\"#\">Madison</a></li>
                            <li><a href=\"#\">One-Step</a></li>
                            <li><a href=\"#\">Paso-doble</a></li>
                            <li><a href=\"#\">Quicks Tep</a></li>
                            <li><a href=\"#\">Tango</a></li>
                            <li><a href=\"#\">Valse</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                   <div class=\"listedanses orange\">
                        <h3><a href=\"#\">Danses latines</a></h3>
                        <ul class=\"listetypesdanse\">
                            <li><a href=\"#\">Cha-cha-cha</a></li>
                            <li><a href=\"#\">Mambo</a></li>
                            <li><a href=\"#\">Paso-doble</a></li>
                            <li><a href=\"#\">Rumba</a></li>
                            <li><a href=\"#\">Samba</a></li>
                            <li><a href=\"#\">Salsa</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                   <div class=\"listedanses firebrick\">
                        <h3><a href=\"#\">Danses urbaines</a></h3>
                        <ul class=\"listetypesdanse\">
                            <li><a href=\"#\">Hip-hop</a></li>
                            <li><a href=\"#\">Pogo</a></li>
                            <li><a href=\"#\">R'N'B</a></li>
                            <li><a href=\"#\">Ragga</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <aside class=\"col-md-4\">
            ";
        // line 62
        $this->loadTemplate("AppBundle:Layout:sidebar.html.twig", "AppBundle:Accueil:home.html.twig", 62)->display($context);
        // line 63
        echo "        </aside>
    </div>
</div>
";
        
        $__internal_31301acdf80a68c652a1e9e0e5ff210a612e5ed52bb6692de5fc285b1c7a8cff->leave($__internal_31301acdf80a68c652a1e9e0e5ff210a612e5ed52bb6692de5fc285b1c7a8cff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Accueil:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  120 => 62,  72 => 17,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block content %}
<!-- <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/slider.css') }}\"> -->
<!-- Lien CSS déplacé dans la partie head dans app/Resources/views/base.html.twig -->

<div class=\"contentAccueil\">
    <div class=\"row\">
        <div class=\"col-md-8\">
           <div id=\"slider\">
                <img src=\"{{ asset('bundles/app/img/ami-danse-5.jpg') }}\" alt=\"ami-danse-5\" class=\"img-thumbnail\">
                <img src=\"{{ asset('bundles/app/img/ami-danse-1.jpg') }}\" alt=\"ami-danse-1\" class=\"img-thumbnail\">
                <img src=\"{{ asset('bundles/app/img/ami-danse-2.jpg') }}\" alt=\"ami-danse-2\" class=\"img-thumbnail\">
                <img src=\"{{ asset('bundles/app/img/ami-danse-4.jpg') }}\" alt=\"ami-danse-4\" class=\"img-thumbnail\">
                <img src=\"{{ asset('bundles/app/img/ami-danse-3.jpg') }}\" alt=\"ami-danse-3\" class=\"img-thumbnail\">
           </div>
           <script src=\"{{ asset('bundles/app/js/slider.js') }}\"></script>
           <div class=\"row\" id=\"danseAccueil\">
                <div class=\"col-md-4\">
                   <div class=\"listedanses tomato\">
                        <h3><a href=\"#\">Danses modernes</a></h3>
                        <ul class=\"listetypesdanse\">
                            <li><a href=\"#\">Boston</a></li>
                            <li><a href=\"#\">Charleston</a></li>
                            <li><a href=\"#\">Foxtrot</a></li>
                            <li><a href=\"#\">Madison</a></li>
                            <li><a href=\"#\">One-Step</a></li>
                            <li><a href=\"#\">Paso-doble</a></li>
                            <li><a href=\"#\">Quicks Tep</a></li>
                            <li><a href=\"#\">Tango</a></li>
                            <li><a href=\"#\">Valse</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                   <div class=\"listedanses orange\">
                        <h3><a href=\"#\">Danses latines</a></h3>
                        <ul class=\"listetypesdanse\">
                            <li><a href=\"#\">Cha-cha-cha</a></li>
                            <li><a href=\"#\">Mambo</a></li>
                            <li><a href=\"#\">Paso-doble</a></li>
                            <li><a href=\"#\">Rumba</a></li>
                            <li><a href=\"#\">Samba</a></li>
                            <li><a href=\"#\">Salsa</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                   <div class=\"listedanses firebrick\">
                        <h3><a href=\"#\">Danses urbaines</a></h3>
                        <ul class=\"listetypesdanse\">
                            <li><a href=\"#\">Hip-hop</a></li>
                            <li><a href=\"#\">Pogo</a></li>
                            <li><a href=\"#\">R'N'B</a></li>
                            <li><a href=\"#\">Ragga</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <aside class=\"col-md-4\">
            {% include('AppBundle:Layout:sidebar.html.twig') %}
        </aside>
    </div>
</div>
{% endblock %}

", "AppBundle:Accueil:home.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/Accueil/home.html.twig");
    }
}

<?php

/* AppBundle:Layout:navbar.html.twig */
class __TwigTemplate_4f109f91b0fa47c3bd76ffbad47b6fbc26f7e2cae7c81a04be18818ccd36067a extends Twig_Template
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
        $__internal_0b7a1afed46700188ee9788fa0aed387aa8d2a955217ff835203cc489acc971c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7a1afed46700188ee9788fa0aed387aa8d2a955217ff835203cc489acc971c->enter($__internal_0b7a1afed46700188ee9788fa0aed387aa8d2a955217ff835203cc489acc971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:navbar.html.twig"));

        // line 2
        echo "<nav class=\"navbar navbar-default navbar-static-top\" id=\"topnavbar\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"/\">Accueil</a></li>
        <li><a href=\"/styledanse/\">Danses</a></li>
        <li><a href=\"#\">Agenda</a></li>
        <li><a href=\"#\">inscriptions</a></li>
        <li><a href=\"#\">Forum</a></li>
        <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>














";
        
        $__internal_0b7a1afed46700188ee9788fa0aed387aa8d2a955217ff835203cc489acc971c->leave($__internal_0b7a1afed46700188ee9788fa0aed387aa8d2a955217ff835203cc489acc971c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# <nav class=\"navbar navbar-inverse navbar-fixed-top\" id=\"topnavbar\"> #}
<nav class=\"navbar navbar-default navbar-static-top\" id=\"topnavbar\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"/\">Accueil</a></li>
        <li><a href=\"/styledanse/\">Danses</a></li>
        <li><a href=\"#\">Agenda</a></li>
        <li><a href=\"#\">inscriptions</a></li>
        <li><a href=\"#\">Forum</a></li>
        <li><a href=\"#\">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>














", "AppBundle:Layout:navbar.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/Layout/navbar.html.twig");
    }
}

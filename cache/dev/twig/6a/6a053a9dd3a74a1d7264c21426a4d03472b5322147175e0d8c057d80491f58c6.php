<?php

/* AppBundle:Layout:sidebar.html.twig */
class __TwigTemplate_a94b76a24a046c6232e68685c45ecf30d55f3ab3263a890c0f11985a9aac094a extends Twig_Template
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
        $__internal_943cb1caff7e46b79d4b23611a4d29ddd34e8e36fdbbf69c4f873d99b0eb4e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943cb1caff7e46b79d4b23611a4d29ddd34e8e36fdbbf69c4f873d99b0eb4e3d->enter($__internal_943cb1caff7e46b79d4b23611a4d29ddd34e8e36fdbbf69c4f873d99b0eb4e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:sidebar.html.twig"));

        // line 2
        echo "
<div id=\"listeEvents\">
    <h2>L'Agenda</h2>
    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/dansemoderne1.png"), "html", null, true);
        echo "\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">25 mai 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">Modern'Danses : Concours Danses Modernes</a></div>
            <div class=\"eventTexte\">Dans le cadre des journées de la danse moderne ...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>

    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/latino1.png"), "html", null, true);
        echo "\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">02 juin 2017 - 04 juin 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">Latina for ever</a></div>
            <div class=\"eventTexte\">Pour le 21éme festival de danses latines...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>

    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-4.jpg"), "html", null, true);
        echo "\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">14 juin 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">La nuit du hip-hop</a></div>
            <div class=\"eventTexte\">Dans le cadre des journées de la vulgarisation des danses de rue ...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>

    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/ami-danse-5.jpg"), "html", null, true);
        echo "\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">18 juin 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">Soirée Country</a></div>
            <div class=\"eventTexte\">L'association des garçons vachers des Deux-Sèvres organise ...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>
</div>

 
";
        
        $__internal_943cb1caff7e46b79d4b23611a4d29ddd34e8e36fdbbf69c4f873d99b0eb4e3d->leave($__internal_943cb1caff7e46b79d4b23611a4d29ddd34e8e36fdbbf69c4f873d99b0eb4e3d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 39,  56 => 28,  42 => 17,  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# LISTES DES EVENEMENTS PAR ORDRE CHRONOLOGIQUE #}

<div id=\"listeEvents\">
    <h2>L'Agenda</h2>
    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"{{ asset('bundles/app/img/dansemoderne1.png') }}\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">25 mai 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">Modern'Danses : Concours Danses Modernes</a></div>
            <div class=\"eventTexte\">Dans le cadre des journées de la danse moderne ...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>

    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"{{ asset('bundles/app/img/latino1.png') }}\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">02 juin 2017 - 04 juin 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">Latina for ever</a></div>
            <div class=\"eventTexte\">Pour le 21éme festival de danses latines...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>

    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"{{ asset('bundles/app/img/ami-danse-4.jpg') }}\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">14 juin 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">La nuit du hip-hop</a></div>
            <div class=\"eventTexte\">Dans le cadre des journées de la vulgarisation des danses de rue ...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>

    <div class=\"eventAccueil\">
        <div class=\"imgEvent\"><img src=\"{{ asset('bundles/app/img/ami-danse-5.jpg') }}\"/></div>
        <div class=\"eventDetail\">
            <div class=\"eventDate\">18 juin 2017</div>
            <div class=\"eventTitre\"><a href=\"#\">Soirée Country</a></div>
            <div class=\"eventTexte\">L'association des garçons vachers des Deux-Sèvres organise ...</div>
            <div class=\"eventSuite\"><a href=\"#\">lire la suite</a></div>
        </div>
        <br class=\"clearboth\" />
    </div>
</div>

 
", "AppBundle:Layout:sidebar.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/Layout/sidebar.html.twig");
    }
}

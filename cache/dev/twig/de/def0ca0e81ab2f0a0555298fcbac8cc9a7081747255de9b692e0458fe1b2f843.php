<?php

/* AppBundle:StyleDanse:index.html.twig */
class __TwigTemplate_81020024330324a3b8f6e4653066e322bd072cd9f2013b002efea6c47329b56c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:StyleDanse:index.html.twig", 1);
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
        $__internal_92de6c86d193c2c0a1cbad41faf2319e060e2756229c4a3f4a798bae1688b8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92de6c86d193c2c0a1cbad41faf2319e060e2756229c4a3f4a798bae1688b8c3->enter($__internal_92de6c86d193c2c0a1cbad41faf2319e060e2756229c4a3f4a798bae1688b8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:StyleDanse:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92de6c86d193c2c0a1cbad41faf2319e060e2756229c4a3f4a798bae1688b8c3->leave($__internal_92de6c86d193c2c0a1cbad41faf2319e060e2756229c4a3f4a798bae1688b8c3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5d550287192c6e01c5066030e28db3c0d7d6076b9e58025dc27860092920172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d550287192c6e01c5066030e28db3c0d7d6076b9e58025dc27860092920172->enter($__internal_e5d550287192c6e01c5066030e28db3c0d7d6076b9e58025dc27860092920172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Styles de danse</h1>
    <hr>
    <div class=\"table-responsive\">
        <table class=\"table table-stripped table-condensed\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stylesDanse"] ?? $this->getContext($context, "stylesDanse")));
        foreach ($context['_seq'] as $context["_key"] => $context["styleDanse"]) {
            // line 17
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_show", array("id" => $this->getAttribute($context["styleDanse"], "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["styleDanse"], "id", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["styleDanse"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["styleDanse"], "description", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_show", array("id" => $this->getAttribute($context["styleDanse"], "id", array()))), "html", null, true);
            echo "\"
                                    class=\"btn btn-xs btn-primary\">
                                    Show
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_edit", array("id" => $this->getAttribute($context["styleDanse"], "id", array()))), "html", null, true);
            echo "\"
                                    class=\"btn btn-xs btn-warning\">
                                    Modifier
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styleDanse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin_styleDanse_new");
        echo "\" class=\"btn btn-sm btn-success\">
                Créer un nouveau style de danse
            </a>
        </li>
    </ul>
";
        
        $__internal_e5d550287192c6e01c5066030e28db3c0d7d6076b9e58025dc27860092920172->leave($__internal_e5d550287192c6e01c5066030e28db3c0d7d6076b9e58025dc27860092920172_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:StyleDanse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 49,  107 => 43,  92 => 34,  83 => 28,  76 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Styles de danse</h1>
    <hr>
    <div class=\"table-responsive\">
        <table class=\"table table-stripped table-condensed\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            {% for styleDanse in stylesDanse %}
                <tr>
                    <td>
                        <a href=\"{{ path('app_admin_styleDanse_show', { 'id': styleDanse.id }) }}\">
                            {{ styleDanse.id }}
                        </a>
                    </td>
                    <td>{{ styleDanse.nom }}</td>
                    <td>{{ styleDanse.description }}</td>
                    <td>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"{{ path('app_admin_styleDanse_show', { 'id': styleDanse.id }) }}\"
                                    class=\"btn btn-xs btn-primary\">
                                    Show
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_admin_styleDanse_edit', { 'id': styleDanse.id }) }}\"
                                    class=\"btn btn-xs btn-warning\">
                                    Modifier
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <hr>
    <ul class=\"list-inline\">
        <li>
            <a href=\"{{ path('app_admin_styleDanse_new') }}\" class=\"btn btn-sm btn-success\">
                Créer un nouveau style de danse
            </a>
        </li>
    </ul>
{% endblock %}
", "AppBundle:StyleDanse:index.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/StyleDanse/index.html.twig");
    }
}

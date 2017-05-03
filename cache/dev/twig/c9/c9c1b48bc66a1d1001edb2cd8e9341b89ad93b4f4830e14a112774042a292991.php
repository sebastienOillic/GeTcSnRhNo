<?php

/* AppBundle:Layout:flashes.html.twig */
class __TwigTemplate_e6eba563e1c5181a6d459f1ba6c5d996d09d9c016b29da3b47cbcd0a0cc95471 extends Twig_Template
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
        $__internal_fc5f597245af63ed91230720410846e7df5586bc9a5a6829e6b504da1abb130c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5f597245af63ed91230720410846e7df5586bc9a5a6829e6b504da1abb130c->enter($__internal_fc5f597245af63ed91230720410846e7df5586bc9a5a6829e6b504da1abb130c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layout:flashes.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array()))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 5
                    echo $context["flash"];
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_fc5f597245af63ed91230720410846e7df5586bc9a5a6829e6b504da1abb130c->leave($__internal_fc5f597245af63ed91230720410846e7df5586bc9a5a6829e6b504da1abb130c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layout:flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  39 => 5,  34 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashbag.peekAll is not empty %}
    {% for type, flashes in app.session.flashbag.all %}
        {% for flash in flashes %}
            <div class=\"alert alert-{{ type }}\">
                {{ flash|raw }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
", "AppBundle:Layout:flashes.html.twig", "/media/www-dev/private/GeTcSnRhNo/src/AppBundle/Resources/views/Layout/flashes.html.twig");
    }
}

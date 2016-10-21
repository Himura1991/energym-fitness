<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3e58edbef72afa379f63a97a694cd301d2e1bbca0c2bc8db2b2334f20474347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15dca55df1615a6f320c0f3f0776f765168712af325bf14a54d2e5c7ff6ead7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dca55df1615a6f320c0f3f0776f765168712af325bf14a54d2e5c7ff6ead7e->enter($__internal_15dca55df1615a6f320c0f3f0776f765168712af325bf14a54d2e5c7ff6ead7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dca55df1615a6f320c0f3f0776f765168712af325bf14a54d2e5c7ff6ead7e->leave($__internal_15dca55df1615a6f320c0f3f0776f765168712af325bf14a54d2e5c7ff6ead7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_636527ddf0b0c4873d19707bc6a4bf3f750624b4dc78c6a9ddf1ee3f493fb28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636527ddf0b0c4873d19707bc6a4bf3f750624b4dc78c6a9ddf1ee3f493fb28b->enter($__internal_636527ddf0b0c4873d19707bc6a4bf3f750624b4dc78c6a9ddf1ee3f493fb28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_636527ddf0b0c4873d19707bc6a4bf3f750624b4dc78c6a9ddf1ee3f493fb28b->leave($__internal_636527ddf0b0c4873d19707bc6a4bf3f750624b4dc78c6a9ddf1ee3f493fb28b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc111d2705b083c6cbcb8bfafe25c0beb09759150a86fb91995b2cc5be44e5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc111d2705b083c6cbcb8bfafe25c0beb09759150a86fb91995b2cc5be44e5c9->enter($__internal_cc111d2705b083c6cbcb8bfafe25c0beb09759150a86fb91995b2cc5be44e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc111d2705b083c6cbcb8bfafe25c0beb09759150a86fb91995b2cc5be44e5c9->leave($__internal_cc111d2705b083c6cbcb8bfafe25c0beb09759150a86fb91995b2cc5be44e5c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e89c1b80d379bff890e0c66c7e416e6b41151821bd514435a2c9e5ba8a45d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e89c1b80d379bff890e0c66c7e416e6b41151821bd514435a2c9e5ba8a45d9a->enter($__internal_6e89c1b80d379bff890e0c66c7e416e6b41151821bd514435a2c9e5ba8a45d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6e89c1b80d379bff890e0c66c7e416e6b41151821bd514435a2c9e5ba8a45d9a->leave($__internal_6e89c1b80d379bff890e0c66c7e416e6b41151821bd514435a2c9e5ba8a45d9a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}

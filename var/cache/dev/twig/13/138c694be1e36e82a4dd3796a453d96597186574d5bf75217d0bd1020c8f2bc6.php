<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_adf36668871d0c43c4bf6a5457f33bb9fc269da2d18168bd4e6db80fff9a66c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35d557a4ab2299fd1afe317d6d40ce5c3274987ab9e7cf07d9adaff178ed00c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d557a4ab2299fd1afe317d6d40ce5c3274987ab9e7cf07d9adaff178ed00c6->enter($__internal_35d557a4ab2299fd1afe317d6d40ce5c3274987ab9e7cf07d9adaff178ed00c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d557a4ab2299fd1afe317d6d40ce5c3274987ab9e7cf07d9adaff178ed00c6->leave($__internal_35d557a4ab2299fd1afe317d6d40ce5c3274987ab9e7cf07d9adaff178ed00c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_940c30937650b67c3e27c42cd64b7ccff410d50cf7c8ff2dc765b30375f39860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940c30937650b67c3e27c42cd64b7ccff410d50cf7c8ff2dc765b30375f39860->enter($__internal_940c30937650b67c3e27c42cd64b7ccff410d50cf7c8ff2dc765b30375f39860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_940c30937650b67c3e27c42cd64b7ccff410d50cf7c8ff2dc765b30375f39860->leave($__internal_940c30937650b67c3e27c42cd64b7ccff410d50cf7c8ff2dc765b30375f39860_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a777c1b23f8d7aa3eac4093cee4c4fd11335ad3f55472c7da390269164902c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a777c1b23f8d7aa3eac4093cee4c4fd11335ad3f55472c7da390269164902c0->enter($__internal_5a777c1b23f8d7aa3eac4093cee4c4fd11335ad3f55472c7da390269164902c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a777c1b23f8d7aa3eac4093cee4c4fd11335ad3f55472c7da390269164902c0->leave($__internal_5a777c1b23f8d7aa3eac4093cee4c4fd11335ad3f55472c7da390269164902c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_71277cb0e75582e2694e3fde9256ebc21c773b432cc0bee445c4b6cb6b2044af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71277cb0e75582e2694e3fde9256ebc21c773b432cc0bee445c4b6cb6b2044af->enter($__internal_71277cb0e75582e2694e3fde9256ebc21c773b432cc0bee445c4b6cb6b2044af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_71277cb0e75582e2694e3fde9256ebc21c773b432cc0bee445c4b6cb6b2044af->leave($__internal_71277cb0e75582e2694e3fde9256ebc21c773b432cc0bee445c4b6cb6b2044af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}

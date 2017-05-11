<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_84363d8e38f924db748626cf3c01201727f0f1af7e17e5832ffefed710fb7c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0e829cb7b78de8759346daa5a49bc7d2ffd16f7ffc55af79528cd23d6a65418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e829cb7b78de8759346daa5a49bc7d2ffd16f7ffc55af79528cd23d6a65418->enter($__internal_c0e829cb7b78de8759346daa5a49bc7d2ffd16f7ffc55af79528cd23d6a65418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e0b7205542440320a31576a52d0783dfd82d3de16fd9eb330cc88fe4088e27ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b7205542440320a31576a52d0783dfd82d3de16fd9eb330cc88fe4088e27ce->enter($__internal_e0b7205542440320a31576a52d0783dfd82d3de16fd9eb330cc88fe4088e27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e829cb7b78de8759346daa5a49bc7d2ffd16f7ffc55af79528cd23d6a65418->leave($__internal_c0e829cb7b78de8759346daa5a49bc7d2ffd16f7ffc55af79528cd23d6a65418_prof);

        
        $__internal_e0b7205542440320a31576a52d0783dfd82d3de16fd9eb330cc88fe4088e27ce->leave($__internal_e0b7205542440320a31576a52d0783dfd82d3de16fd9eb330cc88fe4088e27ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08e196863b60919325e1162097f7b3403c235f84ca80dc2679e973fa4f299f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e196863b60919325e1162097f7b3403c235f84ca80dc2679e973fa4f299f05->enter($__internal_08e196863b60919325e1162097f7b3403c235f84ca80dc2679e973fa4f299f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba3b1218b924b68780d891c640cb0a4567d720bacb6805cebfc59560338a0ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3b1218b924b68780d891c640cb0a4567d720bacb6805cebfc59560338a0ae2->enter($__internal_ba3b1218b924b68780d891c640cb0a4567d720bacb6805cebfc59560338a0ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ba3b1218b924b68780d891c640cb0a4567d720bacb6805cebfc59560338a0ae2->leave($__internal_ba3b1218b924b68780d891c640cb0a4567d720bacb6805cebfc59560338a0ae2_prof);

        
        $__internal_08e196863b60919325e1162097f7b3403c235f84ca80dc2679e973fa4f299f05->leave($__internal_08e196863b60919325e1162097f7b3403c235f84ca80dc2679e973fa4f299f05_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_962bc3b8bfc0ba956fe82eb9537d3d40c3675d84bd2a9a62ffcbf9406d540fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962bc3b8bfc0ba956fe82eb9537d3d40c3675d84bd2a9a62ffcbf9406d540fef->enter($__internal_962bc3b8bfc0ba956fe82eb9537d3d40c3675d84bd2a9a62ffcbf9406d540fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_959b7d52fca56b335eda0f08d1eecdabcbb204531aeb9a7a3cad7e4a7cc58d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959b7d52fca56b335eda0f08d1eecdabcbb204531aeb9a7a3cad7e4a7cc58d00->enter($__internal_959b7d52fca56b335eda0f08d1eecdabcbb204531aeb9a7a3cad7e4a7cc58d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_959b7d52fca56b335eda0f08d1eecdabcbb204531aeb9a7a3cad7e4a7cc58d00->leave($__internal_959b7d52fca56b335eda0f08d1eecdabcbb204531aeb9a7a3cad7e4a7cc58d00_prof);

        
        $__internal_962bc3b8bfc0ba956fe82eb9537d3d40c3675d84bd2a9a62ffcbf9406d540fef->leave($__internal_962bc3b8bfc0ba956fe82eb9537d3d40c3675d84bd2a9a62ffcbf9406d540fef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

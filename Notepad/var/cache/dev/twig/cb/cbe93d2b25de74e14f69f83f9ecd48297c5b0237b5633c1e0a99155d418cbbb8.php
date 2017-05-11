<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_c74ff436ed5ac1fdfab93058e54279003795ca67dcc8a12713de28910d2fdb07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_392347db85fc65a4c9f334af01d272727f0f9046b8d262ab5860d87acb7a5b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392347db85fc65a4c9f334af01d272727f0f9046b8d262ab5860d87acb7a5b1b->enter($__internal_392347db85fc65a4c9f334af01d272727f0f9046b8d262ab5860d87acb7a5b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cf4997190e92ddeab0268956b9d57bb4cd961c69d8309ed2d8f1480fd04a165b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4997190e92ddeab0268956b9d57bb4cd961c69d8309ed2d8f1480fd04a165b->enter($__internal_cf4997190e92ddeab0268956b9d57bb4cd961c69d8309ed2d8f1480fd04a165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392347db85fc65a4c9f334af01d272727f0f9046b8d262ab5860d87acb7a5b1b->leave($__internal_392347db85fc65a4c9f334af01d272727f0f9046b8d262ab5860d87acb7a5b1b_prof);

        
        $__internal_cf4997190e92ddeab0268956b9d57bb4cd961c69d8309ed2d8f1480fd04a165b->leave($__internal_cf4997190e92ddeab0268956b9d57bb4cd961c69d8309ed2d8f1480fd04a165b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b39a6d86b8460b4cbd8a7332e2951e34acb24a77d2cfa49a5027619551a5ccdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39a6d86b8460b4cbd8a7332e2951e34acb24a77d2cfa49a5027619551a5ccdb->enter($__internal_b39a6d86b8460b4cbd8a7332e2951e34acb24a77d2cfa49a5027619551a5ccdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cba373f8c599efe9569d0dd76edb9464d84fcd2ad2235a26e97bec5acd3c75d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba373f8c599efe9569d0dd76edb9464d84fcd2ad2235a26e97bec5acd3c75d3->enter($__internal_cba373f8c599efe9569d0dd76edb9464d84fcd2ad2235a26e97bec5acd3c75d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cba373f8c599efe9569d0dd76edb9464d84fcd2ad2235a26e97bec5acd3c75d3->leave($__internal_cba373f8c599efe9569d0dd76edb9464d84fcd2ad2235a26e97bec5acd3c75d3_prof);

        
        $__internal_b39a6d86b8460b4cbd8a7332e2951e34acb24a77d2cfa49a5027619551a5ccdb->leave($__internal_b39a6d86b8460b4cbd8a7332e2951e34acb24a77d2cfa49a5027619551a5ccdb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c6ac982ee2b785aaf13005d8692361a9922d6982ee81497c7058489e40e6eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6ac982ee2b785aaf13005d8692361a9922d6982ee81497c7058489e40e6eab->enter($__internal_0c6ac982ee2b785aaf13005d8692361a9922d6982ee81497c7058489e40e6eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c85f59bfb14635ecd145c1af96b9fc804a8349a1929c6dd2a6e71730b5b74b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85f59bfb14635ecd145c1af96b9fc804a8349a1929c6dd2a6e71730b5b74b02->enter($__internal_c85f59bfb14635ecd145c1af96b9fc804a8349a1929c6dd2a6e71730b5b74b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c85f59bfb14635ecd145c1af96b9fc804a8349a1929c6dd2a6e71730b5b74b02->leave($__internal_c85f59bfb14635ecd145c1af96b9fc804a8349a1929c6dd2a6e71730b5b74b02_prof);

        
        $__internal_0c6ac982ee2b785aaf13005d8692361a9922d6982ee81497c7058489e40e6eab->leave($__internal_0c6ac982ee2b785aaf13005d8692361a9922d6982ee81497c7058489e40e6eab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_17cb044f53c575c6e7ad4d842ca909d4da6a77949c75b0a50501ea280bdbf188 extends Twig_Template
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
        $__internal_92731fa397622100581fef2e11baadb832f8dc4d08eb761dfd5c87344d6bf2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92731fa397622100581fef2e11baadb832f8dc4d08eb761dfd5c87344d6bf2c7->enter($__internal_92731fa397622100581fef2e11baadb832f8dc4d08eb761dfd5c87344d6bf2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3e8ef7acfafc358d023835c232ba2d735e9fb7def7eaefc72600d32f81e9744a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8ef7acfafc358d023835c232ba2d735e9fb7def7eaefc72600d32f81e9744a->enter($__internal_3e8ef7acfafc358d023835c232ba2d735e9fb7def7eaefc72600d32f81e9744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_92731fa397622100581fef2e11baadb832f8dc4d08eb761dfd5c87344d6bf2c7->leave($__internal_92731fa397622100581fef2e11baadb832f8dc4d08eb761dfd5c87344d6bf2c7_prof);

        
        $__internal_3e8ef7acfafc358d023835c232ba2d735e9fb7def7eaefc72600d32f81e9744a->leave($__internal_3e8ef7acfafc358d023835c232ba2d735e9fb7def7eaefc72600d32f81e9744a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}

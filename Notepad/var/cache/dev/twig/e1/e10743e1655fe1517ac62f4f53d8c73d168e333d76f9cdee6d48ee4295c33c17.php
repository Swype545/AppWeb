<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_22349c9c02f2623a421c219cfe81c236d67d33c5e13b3bb7990b5347bda84043 extends Twig_Template
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
        $__internal_b8325292be59f8c41a97c5fe70fe49a30dd21125ee0b8691f9ed81cae816aa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8325292be59f8c41a97c5fe70fe49a30dd21125ee0b8691f9ed81cae816aa43->enter($__internal_b8325292be59f8c41a97c5fe70fe49a30dd21125ee0b8691f9ed81cae816aa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ce0b513ef29c1028c34d530712a742ab1feef6ab47c0eb2d69c5d51792632393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0b513ef29c1028c34d530712a742ab1feef6ab47c0eb2d69c5d51792632393->enter($__internal_ce0b513ef29c1028c34d530712a742ab1feef6ab47c0eb2d69c5d51792632393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b8325292be59f8c41a97c5fe70fe49a30dd21125ee0b8691f9ed81cae816aa43->leave($__internal_b8325292be59f8c41a97c5fe70fe49a30dd21125ee0b8691f9ed81cae816aa43_prof);

        
        $__internal_ce0b513ef29c1028c34d530712a742ab1feef6ab47c0eb2d69c5d51792632393->leave($__internal_ce0b513ef29c1028c34d530712a742ab1feef6ab47c0eb2d69c5d51792632393_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

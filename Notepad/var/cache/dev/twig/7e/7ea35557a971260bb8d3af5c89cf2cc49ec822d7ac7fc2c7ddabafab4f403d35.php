<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_29447eb37151098cc0a0d4eaae93db5dc579c97b0529375a90f7f6d27b7e92d2 extends Twig_Template
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
        $__internal_a9fb1b21a8534f027610fe490682ef722e17909c3bcd7261f3bd50c4426809d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fb1b21a8534f027610fe490682ef722e17909c3bcd7261f3bd50c4426809d3->enter($__internal_a9fb1b21a8534f027610fe490682ef722e17909c3bcd7261f3bd50c4426809d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_712f177d46c1e538236304df9678131d59b38435010de0686a0cfbc158f14236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712f177d46c1e538236304df9678131d59b38435010de0686a0cfbc158f14236->enter($__internal_712f177d46c1e538236304df9678131d59b38435010de0686a0cfbc158f14236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a9fb1b21a8534f027610fe490682ef722e17909c3bcd7261f3bd50c4426809d3->leave($__internal_a9fb1b21a8534f027610fe490682ef722e17909c3bcd7261f3bd50c4426809d3_prof);

        
        $__internal_712f177d46c1e538236304df9678131d59b38435010de0686a0cfbc158f14236->leave($__internal_712f177d46c1e538236304df9678131d59b38435010de0686a0cfbc158f14236_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

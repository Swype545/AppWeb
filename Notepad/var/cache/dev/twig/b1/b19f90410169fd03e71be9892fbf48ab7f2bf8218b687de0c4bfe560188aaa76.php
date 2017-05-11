<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e30ac7bea5cb37b0cb5f807058bdf83ee4fd80329c3bef311e2ba136ca2c8c0a extends Twig_Template
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
        $__internal_6bfb52218a902ed1fcd1b292bb356e4ba8ee7c28c5e0e2aa57c22354956d3b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfb52218a902ed1fcd1b292bb356e4ba8ee7c28c5e0e2aa57c22354956d3b75->enter($__internal_6bfb52218a902ed1fcd1b292bb356e4ba8ee7c28c5e0e2aa57c22354956d3b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_195f1ee215b99ae745530d7a6e06c78216cfeba516ab344b6b1b90497904f3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195f1ee215b99ae745530d7a6e06c78216cfeba516ab344b6b1b90497904f3e7->enter($__internal_195f1ee215b99ae745530d7a6e06c78216cfeba516ab344b6b1b90497904f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6bfb52218a902ed1fcd1b292bb356e4ba8ee7c28c5e0e2aa57c22354956d3b75->leave($__internal_6bfb52218a902ed1fcd1b292bb356e4ba8ee7c28c5e0e2aa57c22354956d3b75_prof);

        
        $__internal_195f1ee215b99ae745530d7a6e06c78216cfeba516ab344b6b1b90497904f3e7->leave($__internal_195f1ee215b99ae745530d7a6e06c78216cfeba516ab344b6b1b90497904f3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

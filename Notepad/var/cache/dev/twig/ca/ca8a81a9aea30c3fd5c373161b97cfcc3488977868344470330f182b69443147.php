<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_19925fee09a9357480e2c94c524bf84d79668a8a25013193198f8af09b9d4639 extends Twig_Template
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
        $__internal_b823575f93ebb4d05a7581a98bc34fbec9d7e6ae4dfb7512792302f01c85aec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b823575f93ebb4d05a7581a98bc34fbec9d7e6ae4dfb7512792302f01c85aec6->enter($__internal_b823575f93ebb4d05a7581a98bc34fbec9d7e6ae4dfb7512792302f01c85aec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ca1cefffe369162915e677708abc01e04c5840081476d267aa382d5feb85b926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1cefffe369162915e677708abc01e04c5840081476d267aa382d5feb85b926->enter($__internal_ca1cefffe369162915e677708abc01e04c5840081476d267aa382d5feb85b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b823575f93ebb4d05a7581a98bc34fbec9d7e6ae4dfb7512792302f01c85aec6->leave($__internal_b823575f93ebb4d05a7581a98bc34fbec9d7e6ae4dfb7512792302f01c85aec6_prof);

        
        $__internal_ca1cefffe369162915e677708abc01e04c5840081476d267aa382d5feb85b926->leave($__internal_ca1cefffe369162915e677708abc01e04c5840081476d267aa382d5feb85b926_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

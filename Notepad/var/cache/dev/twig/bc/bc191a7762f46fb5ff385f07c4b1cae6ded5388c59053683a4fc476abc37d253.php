<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0b99009d0ad98d9af82c2eba048d716d3ed09c7999b3aaff9d27a627fdb275d7 extends Twig_Template
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
        $__internal_8e911851470c8f9f5292571860209f5836deadd784c795fb4571c3472211aec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e911851470c8f9f5292571860209f5836deadd784c795fb4571c3472211aec5->enter($__internal_8e911851470c8f9f5292571860209f5836deadd784c795fb4571c3472211aec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c1cdf6b6ec97b427a32ded5613f07f304ecec87c99525710cf2e9fd0cb59dcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cdf6b6ec97b427a32ded5613f07f304ecec87c99525710cf2e9fd0cb59dcf0->enter($__internal_c1cdf6b6ec97b427a32ded5613f07f304ecec87c99525710cf2e9fd0cb59dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8e911851470c8f9f5292571860209f5836deadd784c795fb4571c3472211aec5->leave($__internal_8e911851470c8f9f5292571860209f5836deadd784c795fb4571c3472211aec5_prof);

        
        $__internal_c1cdf6b6ec97b427a32ded5613f07f304ecec87c99525710cf2e9fd0cb59dcf0->leave($__internal_c1cdf6b6ec97b427a32ded5613f07f304ecec87c99525710cf2e9fd0cb59dcf0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

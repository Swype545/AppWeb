<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_94bb94381f5368d0bc0c58122cf3f1746caa4fdd2aed912c84ee73c0c202ecbc extends Twig_Template
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
        $__internal_374b9787624ed2d92504a55b8f6f792007c90e9483a51846fb20a8614c27375b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374b9787624ed2d92504a55b8f6f792007c90e9483a51846fb20a8614c27375b->enter($__internal_374b9787624ed2d92504a55b8f6f792007c90e9483a51846fb20a8614c27375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0f36125f1c1c4852e69988611921c1d1186a56b793191716e5fd5c40acb8d6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f36125f1c1c4852e69988611921c1d1186a56b793191716e5fd5c40acb8d6b6->enter($__internal_0f36125f1c1c4852e69988611921c1d1186a56b793191716e5fd5c40acb8d6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_374b9787624ed2d92504a55b8f6f792007c90e9483a51846fb20a8614c27375b->leave($__internal_374b9787624ed2d92504a55b8f6f792007c90e9483a51846fb20a8614c27375b_prof);

        
        $__internal_0f36125f1c1c4852e69988611921c1d1186a56b793191716e5fd5c40acb8d6b6->leave($__internal_0f36125f1c1c4852e69988611921c1d1186a56b793191716e5fd5c40acb8d6b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

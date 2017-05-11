<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f4355635f09c027ad03fcb10afffdec7b008eec839f5c7dfa8de692a5b36634b extends Twig_Template
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
        $__internal_88a1339e0158e694c667924acb4add3d71e97eb5176951dbf3cf022cb47de4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a1339e0158e694c667924acb4add3d71e97eb5176951dbf3cf022cb47de4d3->enter($__internal_88a1339e0158e694c667924acb4add3d71e97eb5176951dbf3cf022cb47de4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4f1f2a4d6dd314d4a31dccf7f7560ac22972de2b5e13ca5514e3a7e7e339e805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1f2a4d6dd314d4a31dccf7f7560ac22972de2b5e13ca5514e3a7e7e339e805->enter($__internal_4f1f2a4d6dd314d4a31dccf7f7560ac22972de2b5e13ca5514e3a7e7e339e805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_88a1339e0158e694c667924acb4add3d71e97eb5176951dbf3cf022cb47de4d3->leave($__internal_88a1339e0158e694c667924acb4add3d71e97eb5176951dbf3cf022cb47de4d3_prof);

        
        $__internal_4f1f2a4d6dd314d4a31dccf7f7560ac22972de2b5e13ca5514e3a7e7e339e805->leave($__internal_4f1f2a4d6dd314d4a31dccf7f7560ac22972de2b5e13ca5514e3a7e7e339e805_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

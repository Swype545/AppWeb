<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ae3568804998b7eb9cd4815b3557c7a8064323c2c9fa52227b507dbcae41c02c extends Twig_Template
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
        $__internal_40e4e2a6a9c8828291b4bad3b664dbe0037b3aa144a082a4adccc0b011087d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e4e2a6a9c8828291b4bad3b664dbe0037b3aa144a082a4adccc0b011087d9c->enter($__internal_40e4e2a6a9c8828291b4bad3b664dbe0037b3aa144a082a4adccc0b011087d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_248b3babc3ef4abf1e0482eb6cc54a8819ef1eedbe45de5f81a28ec4fd26c8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248b3babc3ef4abf1e0482eb6cc54a8819ef1eedbe45de5f81a28ec4fd26c8e4->enter($__internal_248b3babc3ef4abf1e0482eb6cc54a8819ef1eedbe45de5f81a28ec4fd26c8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_40e4e2a6a9c8828291b4bad3b664dbe0037b3aa144a082a4adccc0b011087d9c->leave($__internal_40e4e2a6a9c8828291b4bad3b664dbe0037b3aa144a082a4adccc0b011087d9c_prof);

        
        $__internal_248b3babc3ef4abf1e0482eb6cc54a8819ef1eedbe45de5f81a28ec4fd26c8e4->leave($__internal_248b3babc3ef4abf1e0482eb6cc54a8819ef1eedbe45de5f81a28ec4fd26c8e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

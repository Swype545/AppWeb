<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5c9a0c841db1092fc0132a37a22bc51033f5eadc86d3a518da7e484ae2315ae3 extends Twig_Template
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
        $__internal_1b6194df6862223b6958126eb0ad2a4cde048e0dbb23cd21181742581b700b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6194df6862223b6958126eb0ad2a4cde048e0dbb23cd21181742581b700b5b->enter($__internal_1b6194df6862223b6958126eb0ad2a4cde048e0dbb23cd21181742581b700b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8f3ef672e9e3f1cb76830c0cf69b8ae92b1f0aff5d52e947f7cb480e6de8ae08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3ef672e9e3f1cb76830c0cf69b8ae92b1f0aff5d52e947f7cb480e6de8ae08->enter($__internal_8f3ef672e9e3f1cb76830c0cf69b8ae92b1f0aff5d52e947f7cb480e6de8ae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1b6194df6862223b6958126eb0ad2a4cde048e0dbb23cd21181742581b700b5b->leave($__internal_1b6194df6862223b6958126eb0ad2a4cde048e0dbb23cd21181742581b700b5b_prof);

        
        $__internal_8f3ef672e9e3f1cb76830c0cf69b8ae92b1f0aff5d52e947f7cb480e6de8ae08->leave($__internal_8f3ef672e9e3f1cb76830c0cf69b8ae92b1f0aff5d52e947f7cb480e6de8ae08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

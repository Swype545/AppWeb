<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4bf6bad5428d1df0283e906a5394934e0a3ac62613eaf8efab4bc4c62d69e9d4 extends Twig_Template
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
        $__internal_c419c979e0381e5c24975b2fcd8fdd2fef404bfc515d518f5407052e0386f438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c419c979e0381e5c24975b2fcd8fdd2fef404bfc515d518f5407052e0386f438->enter($__internal_c419c979e0381e5c24975b2fcd8fdd2fef404bfc515d518f5407052e0386f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_d7d612db74ee38243705a8a083a6ae33127ce41e847139d30058c91883732be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d612db74ee38243705a8a083a6ae33127ce41e847139d30058c91883732be6->enter($__internal_d7d612db74ee38243705a8a083a6ae33127ce41e847139d30058c91883732be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c419c979e0381e5c24975b2fcd8fdd2fef404bfc515d518f5407052e0386f438->leave($__internal_c419c979e0381e5c24975b2fcd8fdd2fef404bfc515d518f5407052e0386f438_prof);

        
        $__internal_d7d612db74ee38243705a8a083a6ae33127ce41e847139d30058c91883732be6->leave($__internal_d7d612db74ee38243705a8a083a6ae33127ce41e847139d30058c91883732be6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_5e228e4db6c8871ca244738605f3070809cb5b8967be92bcef677d27435584ea extends Twig_Template
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
        $__internal_a2a056114587950a59239cc3c788d0cef512afcd5c2c6716b0e814bae2d03272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a056114587950a59239cc3c788d0cef512afcd5c2c6716b0e814bae2d03272->enter($__internal_a2a056114587950a59239cc3c788d0cef512afcd5c2c6716b0e814bae2d03272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f8380f3785873031d98c2880be43978e8ea5b7c39768802532618d5816e14ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8380f3785873031d98c2880be43978e8ea5b7c39768802532618d5816e14ac4->enter($__internal_f8380f3785873031d98c2880be43978e8ea5b7c39768802532618d5816e14ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a2a056114587950a59239cc3c788d0cef512afcd5c2c6716b0e814bae2d03272->leave($__internal_a2a056114587950a59239cc3c788d0cef512afcd5c2c6716b0e814bae2d03272_prof);

        
        $__internal_f8380f3785873031d98c2880be43978e8ea5b7c39768802532618d5816e14ac4->leave($__internal_f8380f3785873031d98c2880be43978e8ea5b7c39768802532618d5816e14ac4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}

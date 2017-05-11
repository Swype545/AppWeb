<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_63f0b7c39de2aabb32bc1cced388abbc01ad6ba7044b77f383ce5d40699b993e extends Twig_Template
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
        $__internal_61a632b558766888dd04901ee1acf329f89bd03ecdc3c80181a39c715ee8f25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a632b558766888dd04901ee1acf329f89bd03ecdc3c80181a39c715ee8f25b->enter($__internal_61a632b558766888dd04901ee1acf329f89bd03ecdc3c80181a39c715ee8f25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8de73de23899b2250bc0ed755e0f5ffa1a641fffbae3cafe44f6893baa265948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de73de23899b2250bc0ed755e0f5ffa1a641fffbae3cafe44f6893baa265948->enter($__internal_8de73de23899b2250bc0ed755e0f5ffa1a641fffbae3cafe44f6893baa265948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_61a632b558766888dd04901ee1acf329f89bd03ecdc3c80181a39c715ee8f25b->leave($__internal_61a632b558766888dd04901ee1acf329f89bd03ecdc3c80181a39c715ee8f25b_prof);

        
        $__internal_8de73de23899b2250bc0ed755e0f5ffa1a641fffbae3cafe44f6893baa265948->leave($__internal_8de73de23899b2250bc0ed755e0f5ffa1a641fffbae3cafe44f6893baa265948_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

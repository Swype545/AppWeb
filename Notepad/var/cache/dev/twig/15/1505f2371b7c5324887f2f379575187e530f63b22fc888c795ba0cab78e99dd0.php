<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_336916540d3f90129450f8f8a864644fd73369d1a7cbba2c2679584bc778f32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_451684d5efeccc0ccccf7c6206d54ed9d24554de463f3df9c83427ffb7eeed83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451684d5efeccc0ccccf7c6206d54ed9d24554de463f3df9c83427ffb7eeed83->enter($__internal_451684d5efeccc0ccccf7c6206d54ed9d24554de463f3df9c83427ffb7eeed83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_42ccaa6becbfbe62621e976d61b2c4deb12c87eb8f94f2ea29c373b10ca96ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ccaa6becbfbe62621e976d61b2c4deb12c87eb8f94f2ea29c373b10ca96ac2->enter($__internal_42ccaa6becbfbe62621e976d61b2c4deb12c87eb8f94f2ea29c373b10ca96ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451684d5efeccc0ccccf7c6206d54ed9d24554de463f3df9c83427ffb7eeed83->leave($__internal_451684d5efeccc0ccccf7c6206d54ed9d24554de463f3df9c83427ffb7eeed83_prof);

        
        $__internal_42ccaa6becbfbe62621e976d61b2c4deb12c87eb8f94f2ea29c373b10ca96ac2->leave($__internal_42ccaa6becbfbe62621e976d61b2c4deb12c87eb8f94f2ea29c373b10ca96ac2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea30295c7ea7622afc0b5af90e5d706dad76f07017c6c12c667908f3c9c0387b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea30295c7ea7622afc0b5af90e5d706dad76f07017c6c12c667908f3c9c0387b->enter($__internal_ea30295c7ea7622afc0b5af90e5d706dad76f07017c6c12c667908f3c9c0387b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d0204a516323446809084ace2efa27497395931377ba4f077330c2de2362953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0204a516323446809084ace2efa27497395931377ba4f077330c2de2362953->enter($__internal_0d0204a516323446809084ace2efa27497395931377ba4f077330c2de2362953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0d0204a516323446809084ace2efa27497395931377ba4f077330c2de2362953->leave($__internal_0d0204a516323446809084ace2efa27497395931377ba4f077330c2de2362953_prof);

        
        $__internal_ea30295c7ea7622afc0b5af90e5d706dad76f07017c6c12c667908f3c9c0387b->leave($__internal_ea30295c7ea7622afc0b5af90e5d706dad76f07017c6c12c667908f3c9c0387b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_26812536384775b7d1a2cffc88cb99a8a1672a24af58b944d4bed57e0bbed6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26812536384775b7d1a2cffc88cb99a8a1672a24af58b944d4bed57e0bbed6bd->enter($__internal_26812536384775b7d1a2cffc88cb99a8a1672a24af58b944d4bed57e0bbed6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32a2831ade7002f05d754738fafd25625027ca28cbd0f07cd49df421f68ca691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a2831ade7002f05d754738fafd25625027ca28cbd0f07cd49df421f68ca691->enter($__internal_32a2831ade7002f05d754738fafd25625027ca28cbd0f07cd49df421f68ca691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_32a2831ade7002f05d754738fafd25625027ca28cbd0f07cd49df421f68ca691->leave($__internal_32a2831ade7002f05d754738fafd25625027ca28cbd0f07cd49df421f68ca691_prof);

        
        $__internal_26812536384775b7d1a2cffc88cb99a8a1672a24af58b944d4bed57e0bbed6bd->leave($__internal_26812536384775b7d1a2cffc88cb99a8a1672a24af58b944d4bed57e0bbed6bd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

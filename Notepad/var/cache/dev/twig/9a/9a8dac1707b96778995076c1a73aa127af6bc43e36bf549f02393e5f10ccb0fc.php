<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9586abd0d5251f8d6e2a2a1cf069184f0969e76d20cd724d2d36c13a5a3bd61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52cba42acd3d83da3540021bd90ce8af3587733b9953e4c7c4bface931ecde7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52cba42acd3d83da3540021bd90ce8af3587733b9953e4c7c4bface931ecde7c->enter($__internal_52cba42acd3d83da3540021bd90ce8af3587733b9953e4c7c4bface931ecde7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_374dbb24a0cb191f311a81adb0e8ac5edc455b539403d9e03b2c8ddb0d2a1f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374dbb24a0cb191f311a81adb0e8ac5edc455b539403d9e03b2c8ddb0d2a1f43->enter($__internal_374dbb24a0cb191f311a81adb0e8ac5edc455b539403d9e03b2c8ddb0d2a1f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52cba42acd3d83da3540021bd90ce8af3587733b9953e4c7c4bface931ecde7c->leave($__internal_52cba42acd3d83da3540021bd90ce8af3587733b9953e4c7c4bface931ecde7c_prof);

        
        $__internal_374dbb24a0cb191f311a81adb0e8ac5edc455b539403d9e03b2c8ddb0d2a1f43->leave($__internal_374dbb24a0cb191f311a81adb0e8ac5edc455b539403d9e03b2c8ddb0d2a1f43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a6b13a6cf7b51e2aa970cba3e5e90cea32ded28194a6cede81272c3089c9a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6b13a6cf7b51e2aa970cba3e5e90cea32ded28194a6cede81272c3089c9a42->enter($__internal_6a6b13a6cf7b51e2aa970cba3e5e90cea32ded28194a6cede81272c3089c9a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cbad88215226c0b7c8ca1ab7c4496e6a9cb60bd22a4d727a9dda8ce269823ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbad88215226c0b7c8ca1ab7c4496e6a9cb60bd22a4d727a9dda8ce269823ba3->enter($__internal_cbad88215226c0b7c8ca1ab7c4496e6a9cb60bd22a4d727a9dda8ce269823ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cbad88215226c0b7c8ca1ab7c4496e6a9cb60bd22a4d727a9dda8ce269823ba3->leave($__internal_cbad88215226c0b7c8ca1ab7c4496e6a9cb60bd22a4d727a9dda8ce269823ba3_prof);

        
        $__internal_6a6b13a6cf7b51e2aa970cba3e5e90cea32ded28194a6cede81272c3089c9a42->leave($__internal_6a6b13a6cf7b51e2aa970cba3e5e90cea32ded28194a6cede81272c3089c9a42_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b798a3d3337b15d2d287e147345650e5d620a6296ca846a43d4ea839d6a2f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b798a3d3337b15d2d287e147345650e5d620a6296ca846a43d4ea839d6a2f4d->enter($__internal_1b798a3d3337b15d2d287e147345650e5d620a6296ca846a43d4ea839d6a2f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c6e99a7b8e53efe8955396e5c64137cb3bc8f4183575b3d70e30f400cd472073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e99a7b8e53efe8955396e5c64137cb3bc8f4183575b3d70e30f400cd472073->enter($__internal_c6e99a7b8e53efe8955396e5c64137cb3bc8f4183575b3d70e30f400cd472073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6e99a7b8e53efe8955396e5c64137cb3bc8f4183575b3d70e30f400cd472073->leave($__internal_c6e99a7b8e53efe8955396e5c64137cb3bc8f4183575b3d70e30f400cd472073_prof);

        
        $__internal_1b798a3d3337b15d2d287e147345650e5d620a6296ca846a43d4ea839d6a2f4d->leave($__internal_1b798a3d3337b15d2d287e147345650e5d620a6296ca846a43d4ea839d6a2f4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d761730c0163c6c693ce2b9818bd5d63bbe786c6b57d41b2eef88182bbb35295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d761730c0163c6c693ce2b9818bd5d63bbe786c6b57d41b2eef88182bbb35295->enter($__internal_d761730c0163c6c693ce2b9818bd5d63bbe786c6b57d41b2eef88182bbb35295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e923b81a324afb6ef307b5af63e99ff6a3fcf7f9d1d9bf685f4684145cd71f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e923b81a324afb6ef307b5af63e99ff6a3fcf7f9d1d9bf685f4684145cd71f68->enter($__internal_e923b81a324afb6ef307b5af63e99ff6a3fcf7f9d1d9bf685f4684145cd71f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e923b81a324afb6ef307b5af63e99ff6a3fcf7f9d1d9bf685f4684145cd71f68->leave($__internal_e923b81a324afb6ef307b5af63e99ff6a3fcf7f9d1d9bf685f4684145cd71f68_prof);

        
        $__internal_d761730c0163c6c693ce2b9818bd5d63bbe786c6b57d41b2eef88182bbb35295->leave($__internal_d761730c0163c6c693ce2b9818bd5d63bbe786c6b57d41b2eef88182bbb35295_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

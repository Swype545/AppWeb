<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20ab53fd590c63c152a057b50391bba3c140fa8643b4c281212f53dc70999c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_69052d2b9f2ed2ed249793017e08b35d0b1d27c5b9594c87d696e49ec81a7e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69052d2b9f2ed2ed249793017e08b35d0b1d27c5b9594c87d696e49ec81a7e55->enter($__internal_69052d2b9f2ed2ed249793017e08b35d0b1d27c5b9594c87d696e49ec81a7e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9f2f38eda479d206fdb9ea6c738e9907b366fb9eb0048296733ca6af13f20a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f38eda479d206fdb9ea6c738e9907b366fb9eb0048296733ca6af13f20a9b->enter($__internal_9f2f38eda479d206fdb9ea6c738e9907b366fb9eb0048296733ca6af13f20a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69052d2b9f2ed2ed249793017e08b35d0b1d27c5b9594c87d696e49ec81a7e55->leave($__internal_69052d2b9f2ed2ed249793017e08b35d0b1d27c5b9594c87d696e49ec81a7e55_prof);

        
        $__internal_9f2f38eda479d206fdb9ea6c738e9907b366fb9eb0048296733ca6af13f20a9b->leave($__internal_9f2f38eda479d206fdb9ea6c738e9907b366fb9eb0048296733ca6af13f20a9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_124f878daddc1bce92f801f1c3e91e90214cb0f57668a9ffdbcac023e7eb86a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124f878daddc1bce92f801f1c3e91e90214cb0f57668a9ffdbcac023e7eb86a4->enter($__internal_124f878daddc1bce92f801f1c3e91e90214cb0f57668a9ffdbcac023e7eb86a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a027a5582b98ed04bdc11080cc5baa1fe8e5c38d421469e652586fc2a06ae767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a027a5582b98ed04bdc11080cc5baa1fe8e5c38d421469e652586fc2a06ae767->enter($__internal_a027a5582b98ed04bdc11080cc5baa1fe8e5c38d421469e652586fc2a06ae767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a027a5582b98ed04bdc11080cc5baa1fe8e5c38d421469e652586fc2a06ae767->leave($__internal_a027a5582b98ed04bdc11080cc5baa1fe8e5c38d421469e652586fc2a06ae767_prof);

        
        $__internal_124f878daddc1bce92f801f1c3e91e90214cb0f57668a9ffdbcac023e7eb86a4->leave($__internal_124f878daddc1bce92f801f1c3e91e90214cb0f57668a9ffdbcac023e7eb86a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af37c55bead4c1f4b16474335b8f6dd7dc35247866e52258a18df8f647154b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af37c55bead4c1f4b16474335b8f6dd7dc35247866e52258a18df8f647154b0f->enter($__internal_af37c55bead4c1f4b16474335b8f6dd7dc35247866e52258a18df8f647154b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_48b71b4f6637bdbf0daf31186c9e07f823c3dbce8151e1f83073be32b4b92c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b71b4f6637bdbf0daf31186c9e07f823c3dbce8151e1f83073be32b4b92c6b->enter($__internal_48b71b4f6637bdbf0daf31186c9e07f823c3dbce8151e1f83073be32b4b92c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_48b71b4f6637bdbf0daf31186c9e07f823c3dbce8151e1f83073be32b4b92c6b->leave($__internal_48b71b4f6637bdbf0daf31186c9e07f823c3dbce8151e1f83073be32b4b92c6b_prof);

        
        $__internal_af37c55bead4c1f4b16474335b8f6dd7dc35247866e52258a18df8f647154b0f->leave($__internal_af37c55bead4c1f4b16474335b8f6dd7dc35247866e52258a18df8f647154b0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46f2c16664d10f6aec75e74527f9516ba1762ed7e274efae17aec52ee71e429d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f2c16664d10f6aec75e74527f9516ba1762ed7e274efae17aec52ee71e429d->enter($__internal_46f2c16664d10f6aec75e74527f9516ba1762ed7e274efae17aec52ee71e429d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5dfff96845896a708abfdb6a7aa8c77200a654cdd57f5b8b482ea9469c94fd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfff96845896a708abfdb6a7aa8c77200a654cdd57f5b8b482ea9469c94fd02->enter($__internal_5dfff96845896a708abfdb6a7aa8c77200a654cdd57f5b8b482ea9469c94fd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dfff96845896a708abfdb6a7aa8c77200a654cdd57f5b8b482ea9469c94fd02->leave($__internal_5dfff96845896a708abfdb6a7aa8c77200a654cdd57f5b8b482ea9469c94fd02_prof);

        
        $__internal_46f2c16664d10f6aec75e74527f9516ba1762ed7e274efae17aec52ee71e429d->leave($__internal_46f2c16664d10f6aec75e74527f9516ba1762ed7e274efae17aec52ee71e429d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

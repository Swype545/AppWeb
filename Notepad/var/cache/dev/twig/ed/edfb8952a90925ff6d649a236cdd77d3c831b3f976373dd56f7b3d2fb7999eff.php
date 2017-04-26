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
        $__internal_382bc4f20739fbd40e0ace29eff9ad4f62c6ffe6b51583f5389f10dc1c763096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382bc4f20739fbd40e0ace29eff9ad4f62c6ffe6b51583f5389f10dc1c763096->enter($__internal_382bc4f20739fbd40e0ace29eff9ad4f62c6ffe6b51583f5389f10dc1c763096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_64ed43ae6e79fbb26ed6c988daaa0c57cab695e038cc93ea091c5e8717ec5232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ed43ae6e79fbb26ed6c988daaa0c57cab695e038cc93ea091c5e8717ec5232->enter($__internal_64ed43ae6e79fbb26ed6c988daaa0c57cab695e038cc93ea091c5e8717ec5232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382bc4f20739fbd40e0ace29eff9ad4f62c6ffe6b51583f5389f10dc1c763096->leave($__internal_382bc4f20739fbd40e0ace29eff9ad4f62c6ffe6b51583f5389f10dc1c763096_prof);

        
        $__internal_64ed43ae6e79fbb26ed6c988daaa0c57cab695e038cc93ea091c5e8717ec5232->leave($__internal_64ed43ae6e79fbb26ed6c988daaa0c57cab695e038cc93ea091c5e8717ec5232_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20959491a09b7ca51282f71f9d2f6b569521ea99d454a68a20c18b4c07f9501c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20959491a09b7ca51282f71f9d2f6b569521ea99d454a68a20c18b4c07f9501c->enter($__internal_20959491a09b7ca51282f71f9d2f6b569521ea99d454a68a20c18b4c07f9501c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8c1070ba38638d4565b75d94ef92eb9ad2052998b252ee82e5cf84c576efab48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1070ba38638d4565b75d94ef92eb9ad2052998b252ee82e5cf84c576efab48->enter($__internal_8c1070ba38638d4565b75d94ef92eb9ad2052998b252ee82e5cf84c576efab48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c1070ba38638d4565b75d94ef92eb9ad2052998b252ee82e5cf84c576efab48->leave($__internal_8c1070ba38638d4565b75d94ef92eb9ad2052998b252ee82e5cf84c576efab48_prof);

        
        $__internal_20959491a09b7ca51282f71f9d2f6b569521ea99d454a68a20c18b4c07f9501c->leave($__internal_20959491a09b7ca51282f71f9d2f6b569521ea99d454a68a20c18b4c07f9501c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a9b96434761d276b4d31f050a4ee756d1a27e53a546d7205d58837843f91a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9b96434761d276b4d31f050a4ee756d1a27e53a546d7205d58837843f91a62->enter($__internal_8a9b96434761d276b4d31f050a4ee756d1a27e53a546d7205d58837843f91a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5173e9c963b6d6213633f890c62cfd5fcf77914cb4a1f259ecfca63957d4f8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5173e9c963b6d6213633f890c62cfd5fcf77914cb4a1f259ecfca63957d4f8b0->enter($__internal_5173e9c963b6d6213633f890c62cfd5fcf77914cb4a1f259ecfca63957d4f8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5173e9c963b6d6213633f890c62cfd5fcf77914cb4a1f259ecfca63957d4f8b0->leave($__internal_5173e9c963b6d6213633f890c62cfd5fcf77914cb4a1f259ecfca63957d4f8b0_prof);

        
        $__internal_8a9b96434761d276b4d31f050a4ee756d1a27e53a546d7205d58837843f91a62->leave($__internal_8a9b96434761d276b4d31f050a4ee756d1a27e53a546d7205d58837843f91a62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01b264bc91b954f27a17b9d6089ecec8ec7d8db5f83e86c25f0d85198da34206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b264bc91b954f27a17b9d6089ecec8ec7d8db5f83e86c25f0d85198da34206->enter($__internal_01b264bc91b954f27a17b9d6089ecec8ec7d8db5f83e86c25f0d85198da34206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d9326852be6b38300f408ac0897aeeccc9f76c1a2050f2d933c69ac7eeeb6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9326852be6b38300f408ac0897aeeccc9f76c1a2050f2d933c69ac7eeeb6fa->enter($__internal_8d9326852be6b38300f408ac0897aeeccc9f76c1a2050f2d933c69ac7eeeb6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d9326852be6b38300f408ac0897aeeccc9f76c1a2050f2d933c69ac7eeeb6fa->leave($__internal_8d9326852be6b38300f408ac0897aeeccc9f76c1a2050f2d933c69ac7eeeb6fa_prof);

        
        $__internal_01b264bc91b954f27a17b9d6089ecec8ec7d8db5f83e86c25f0d85198da34206->leave($__internal_01b264bc91b954f27a17b9d6089ecec8ec7d8db5f83e86c25f0d85198da34206_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\AppWeb\\AppWeb\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

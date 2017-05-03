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
        $__internal_a1f4f605e7804a67a674a5daea9fff1cd9ca9dd21f31e39095199b10d60cabeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f4f605e7804a67a674a5daea9fff1cd9ca9dd21f31e39095199b10d60cabeb->enter($__internal_a1f4f605e7804a67a674a5daea9fff1cd9ca9dd21f31e39095199b10d60cabeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_04cb001bbc177e30d8e62cbb4bbf6ef37850cbb70205a1ec17ace8d23671db0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cb001bbc177e30d8e62cbb4bbf6ef37850cbb70205a1ec17ace8d23671db0c->enter($__internal_04cb001bbc177e30d8e62cbb4bbf6ef37850cbb70205a1ec17ace8d23671db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f4f605e7804a67a674a5daea9fff1cd9ca9dd21f31e39095199b10d60cabeb->leave($__internal_a1f4f605e7804a67a674a5daea9fff1cd9ca9dd21f31e39095199b10d60cabeb_prof);

        
        $__internal_04cb001bbc177e30d8e62cbb4bbf6ef37850cbb70205a1ec17ace8d23671db0c->leave($__internal_04cb001bbc177e30d8e62cbb4bbf6ef37850cbb70205a1ec17ace8d23671db0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46ef169c635def5d9f199a25f68ec27c399232d592cb1616426fad8317ce0f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ef169c635def5d9f199a25f68ec27c399232d592cb1616426fad8317ce0f53->enter($__internal_46ef169c635def5d9f199a25f68ec27c399232d592cb1616426fad8317ce0f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7e2a7941436290ab0162befbb1e25d2cd3d62c26e6434246a1dc51d426f6106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e2a7941436290ab0162befbb1e25d2cd3d62c26e6434246a1dc51d426f6106->enter($__internal_f7e2a7941436290ab0162befbb1e25d2cd3d62c26e6434246a1dc51d426f6106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7e2a7941436290ab0162befbb1e25d2cd3d62c26e6434246a1dc51d426f6106->leave($__internal_f7e2a7941436290ab0162befbb1e25d2cd3d62c26e6434246a1dc51d426f6106_prof);

        
        $__internal_46ef169c635def5d9f199a25f68ec27c399232d592cb1616426fad8317ce0f53->leave($__internal_46ef169c635def5d9f199a25f68ec27c399232d592cb1616426fad8317ce0f53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d744a720c3ae17c3ef269888aa9c09c90b06a9dec70aa8a09d970388252cc823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d744a720c3ae17c3ef269888aa9c09c90b06a9dec70aa8a09d970388252cc823->enter($__internal_d744a720c3ae17c3ef269888aa9c09c90b06a9dec70aa8a09d970388252cc823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_48763fd24c6076c85415b5005bfc53a5c15bca9014fea1919758ca0a01788837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48763fd24c6076c85415b5005bfc53a5c15bca9014fea1919758ca0a01788837->enter($__internal_48763fd24c6076c85415b5005bfc53a5c15bca9014fea1919758ca0a01788837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_48763fd24c6076c85415b5005bfc53a5c15bca9014fea1919758ca0a01788837->leave($__internal_48763fd24c6076c85415b5005bfc53a5c15bca9014fea1919758ca0a01788837_prof);

        
        $__internal_d744a720c3ae17c3ef269888aa9c09c90b06a9dec70aa8a09d970388252cc823->leave($__internal_d744a720c3ae17c3ef269888aa9c09c90b06a9dec70aa8a09d970388252cc823_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe5f7b807612ec72762aea6c5234aee7424ad8e7bb1b725ab7deb94e44f452d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5f7b807612ec72762aea6c5234aee7424ad8e7bb1b725ab7deb94e44f452d0->enter($__internal_fe5f7b807612ec72762aea6c5234aee7424ad8e7bb1b725ab7deb94e44f452d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_284847387b7e014cc7d074f55f327362daf9fe9181c46e13d19ff891cfc32e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284847387b7e014cc7d074f55f327362daf9fe9181c46e13d19ff891cfc32e47->enter($__internal_284847387b7e014cc7d074f55f327362daf9fe9181c46e13d19ff891cfc32e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_284847387b7e014cc7d074f55f327362daf9fe9181c46e13d19ff891cfc32e47->leave($__internal_284847387b7e014cc7d074f55f327362daf9fe9181c46e13d19ff891cfc32e47_prof);

        
        $__internal_fe5f7b807612ec72762aea6c5234aee7424ad8e7bb1b725ab7deb94e44f452d0->leave($__internal_fe5f7b807612ec72762aea6c5234aee7424ad8e7bb1b725ab7deb94e44f452d0_prof);

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

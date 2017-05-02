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
        $__internal_31c9c32294539f3af3e45ed86fedc9c4443a439edd278ee77f96957e2551a02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c9c32294539f3af3e45ed86fedc9c4443a439edd278ee77f96957e2551a02e->enter($__internal_31c9c32294539f3af3e45ed86fedc9c4443a439edd278ee77f96957e2551a02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c7bc1c579929ff540f6357d3ec23e8efc4276bb0ee5002705f5234c3060f4aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bc1c579929ff540f6357d3ec23e8efc4276bb0ee5002705f5234c3060f4aa6->enter($__internal_c7bc1c579929ff540f6357d3ec23e8efc4276bb0ee5002705f5234c3060f4aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c9c32294539f3af3e45ed86fedc9c4443a439edd278ee77f96957e2551a02e->leave($__internal_31c9c32294539f3af3e45ed86fedc9c4443a439edd278ee77f96957e2551a02e_prof);

        
        $__internal_c7bc1c579929ff540f6357d3ec23e8efc4276bb0ee5002705f5234c3060f4aa6->leave($__internal_c7bc1c579929ff540f6357d3ec23e8efc4276bb0ee5002705f5234c3060f4aa6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07f0fa986069b45d85b7bf4c1e9e35243a4cce2c772ac947a6d36fe87bb72f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f0fa986069b45d85b7bf4c1e9e35243a4cce2c772ac947a6d36fe87bb72f4c->enter($__internal_07f0fa986069b45d85b7bf4c1e9e35243a4cce2c772ac947a6d36fe87bb72f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd1a3578dc91a255d66d19adee3408716217f0b194bab8015929947f31330adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1a3578dc91a255d66d19adee3408716217f0b194bab8015929947f31330adc->enter($__internal_cd1a3578dc91a255d66d19adee3408716217f0b194bab8015929947f31330adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd1a3578dc91a255d66d19adee3408716217f0b194bab8015929947f31330adc->leave($__internal_cd1a3578dc91a255d66d19adee3408716217f0b194bab8015929947f31330adc_prof);

        
        $__internal_07f0fa986069b45d85b7bf4c1e9e35243a4cce2c772ac947a6d36fe87bb72f4c->leave($__internal_07f0fa986069b45d85b7bf4c1e9e35243a4cce2c772ac947a6d36fe87bb72f4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_619de083bd1bb14c7629b6dae0522e74d25121a2dbabf6bd592ef092b6a0ea77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619de083bd1bb14c7629b6dae0522e74d25121a2dbabf6bd592ef092b6a0ea77->enter($__internal_619de083bd1bb14c7629b6dae0522e74d25121a2dbabf6bd592ef092b6a0ea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2caab10676187b9e65407cec68133016f3b2c8027c098d0c8fdb05f445c474d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caab10676187b9e65407cec68133016f3b2c8027c098d0c8fdb05f445c474d3->enter($__internal_2caab10676187b9e65407cec68133016f3b2c8027c098d0c8fdb05f445c474d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2caab10676187b9e65407cec68133016f3b2c8027c098d0c8fdb05f445c474d3->leave($__internal_2caab10676187b9e65407cec68133016f3b2c8027c098d0c8fdb05f445c474d3_prof);

        
        $__internal_619de083bd1bb14c7629b6dae0522e74d25121a2dbabf6bd592ef092b6a0ea77->leave($__internal_619de083bd1bb14c7629b6dae0522e74d25121a2dbabf6bd592ef092b6a0ea77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2839efb9d410218187217896a27127eb374c99d03c6a7284b0f600d398fa3d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2839efb9d410218187217896a27127eb374c99d03c6a7284b0f600d398fa3d07->enter($__internal_2839efb9d410218187217896a27127eb374c99d03c6a7284b0f600d398fa3d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acf180248bf5a8a1b5bb95756c64e72a4779d0e42a9e192d2f146736c6e5479f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf180248bf5a8a1b5bb95756c64e72a4779d0e42a9e192d2f146736c6e5479f->enter($__internal_acf180248bf5a8a1b5bb95756c64e72a4779d0e42a9e192d2f146736c6e5479f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_acf180248bf5a8a1b5bb95756c64e72a4779d0e42a9e192d2f146736c6e5479f->leave($__internal_acf180248bf5a8a1b5bb95756c64e72a4779d0e42a9e192d2f146736c6e5479f_prof);

        
        $__internal_2839efb9d410218187217896a27127eb374c99d03c6a7284b0f600d398fa3d07->leave($__internal_2839efb9d410218187217896a27127eb374c99d03c6a7284b0f600d398fa3d07_prof);

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

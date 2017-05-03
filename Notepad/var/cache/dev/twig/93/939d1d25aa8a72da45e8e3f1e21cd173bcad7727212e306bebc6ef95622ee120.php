<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_898f7db85f267ccc4ed1dc82b03581135a033dfa8744f42285f4a8fbf704b43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0291659910ce0f11dc42fa3120323f15423b112121741d71005d730ed9619fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0291659910ce0f11dc42fa3120323f15423b112121741d71005d730ed9619fd3->enter($__internal_0291659910ce0f11dc42fa3120323f15423b112121741d71005d730ed9619fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2bd296e081ef545d410ccf316884566c7a2fcafc81afc2562aa193ec21b7105c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd296e081ef545d410ccf316884566c7a2fcafc81afc2562aa193ec21b7105c->enter($__internal_2bd296e081ef545d410ccf316884566c7a2fcafc81afc2562aa193ec21b7105c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0291659910ce0f11dc42fa3120323f15423b112121741d71005d730ed9619fd3->leave($__internal_0291659910ce0f11dc42fa3120323f15423b112121741d71005d730ed9619fd3_prof);

        
        $__internal_2bd296e081ef545d410ccf316884566c7a2fcafc81afc2562aa193ec21b7105c->leave($__internal_2bd296e081ef545d410ccf316884566c7a2fcafc81afc2562aa193ec21b7105c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c44e95c0e3f3806432e1cb1a7164d2189ef603c136e11005e33965095692118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c44e95c0e3f3806432e1cb1a7164d2189ef603c136e11005e33965095692118->enter($__internal_6c44e95c0e3f3806432e1cb1a7164d2189ef603c136e11005e33965095692118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca14bcaaa02c01297d03c20a569b3bdc9b350188febc87ff2678cbc698da7ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca14bcaaa02c01297d03c20a569b3bdc9b350188febc87ff2678cbc698da7ba7->enter($__internal_ca14bcaaa02c01297d03c20a569b3bdc9b350188febc87ff2678cbc698da7ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ca14bcaaa02c01297d03c20a569b3bdc9b350188febc87ff2678cbc698da7ba7->leave($__internal_ca14bcaaa02c01297d03c20a569b3bdc9b350188febc87ff2678cbc698da7ba7_prof);

        
        $__internal_6c44e95c0e3f3806432e1cb1a7164d2189ef603c136e11005e33965095692118->leave($__internal_6c44e95c0e3f3806432e1cb1a7164d2189ef603c136e11005e33965095692118_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c0825c810b65b6ef524fd7cc4a16ea9b496ff6296878584ef3d7a173aab4c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0825c810b65b6ef524fd7cc4a16ea9b496ff6296878584ef3d7a173aab4c9a->enter($__internal_1c0825c810b65b6ef524fd7cc4a16ea9b496ff6296878584ef3d7a173aab4c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55e0a35646e23da49eeb10383eeb7fe81fee17c6d75f7f4e2b81c85af6d9f65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e0a35646e23da49eeb10383eeb7fe81fee17c6d75f7f4e2b81c85af6d9f65d->enter($__internal_55e0a35646e23da49eeb10383eeb7fe81fee17c6d75f7f4e2b81c85af6d9f65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_55e0a35646e23da49eeb10383eeb7fe81fee17c6d75f7f4e2b81c85af6d9f65d->leave($__internal_55e0a35646e23da49eeb10383eeb7fe81fee17c6d75f7f4e2b81c85af6d9f65d_prof);

        
        $__internal_1c0825c810b65b6ef524fd7cc4a16ea9b496ff6296878584ef3d7a173aab4c9a->leave($__internal_1c0825c810b65b6ef524fd7cc4a16ea9b496ff6296878584ef3d7a173aab4c9a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5b6663cd3e434719c7df4bad14270dae61484306e82339c76350ca46d791c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b6663cd3e434719c7df4bad14270dae61484306e82339c76350ca46d791c01->enter($__internal_f5b6663cd3e434719c7df4bad14270dae61484306e82339c76350ca46d791c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0109de09de2ae82f3adcaa29ac4a2d0b832e2d16c661fcfb551b01ae50bbf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0109de09de2ae82f3adcaa29ac4a2d0b832e2d16c661fcfb551b01ae50bbf47->enter($__internal_a0109de09de2ae82f3adcaa29ac4a2d0b832e2d16c661fcfb551b01ae50bbf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a0109de09de2ae82f3adcaa29ac4a2d0b832e2d16c661fcfb551b01ae50bbf47->leave($__internal_a0109de09de2ae82f3adcaa29ac4a2d0b832e2d16c661fcfb551b01ae50bbf47_prof);

        
        $__internal_f5b6663cd3e434719c7df4bad14270dae61484306e82339c76350ca46d791c01->leave($__internal_f5b6663cd3e434719c7df4bad14270dae61484306e82339c76350ca46d791c01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

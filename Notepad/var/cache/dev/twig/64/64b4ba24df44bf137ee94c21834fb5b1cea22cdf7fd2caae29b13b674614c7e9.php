<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
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
        $__internal_be592318ca887130573b2346b16c14750faf7ed3afdc137ec0d7275b1f92122a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be592318ca887130573b2346b16c14750faf7ed3afdc137ec0d7275b1f92122a->enter($__internal_be592318ca887130573b2346b16c14750faf7ed3afdc137ec0d7275b1f92122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a05b49a8d719080365c1c5a7546a12fec1d2cc934f5028293a1a821ae243a6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05b49a8d719080365c1c5a7546a12fec1d2cc934f5028293a1a821ae243a6b0->enter($__internal_a05b49a8d719080365c1c5a7546a12fec1d2cc934f5028293a1a821ae243a6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be592318ca887130573b2346b16c14750faf7ed3afdc137ec0d7275b1f92122a->leave($__internal_be592318ca887130573b2346b16c14750faf7ed3afdc137ec0d7275b1f92122a_prof);

        
        $__internal_a05b49a8d719080365c1c5a7546a12fec1d2cc934f5028293a1a821ae243a6b0->leave($__internal_a05b49a8d719080365c1c5a7546a12fec1d2cc934f5028293a1a821ae243a6b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a9dc55d2c8c8b4098a573d05c76019c9412e44dcb562beea0db240e2f9c6d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9dc55d2c8c8b4098a573d05c76019c9412e44dcb562beea0db240e2f9c6d0a->enter($__internal_5a9dc55d2c8c8b4098a573d05c76019c9412e44dcb562beea0db240e2f9c6d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_94be3a54e1b33cc0b1a6949ba3bfd1bee0d3df659c4213c78e15822392793aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94be3a54e1b33cc0b1a6949ba3bfd1bee0d3df659c4213c78e15822392793aeb->enter($__internal_94be3a54e1b33cc0b1a6949ba3bfd1bee0d3df659c4213c78e15822392793aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_94be3a54e1b33cc0b1a6949ba3bfd1bee0d3df659c4213c78e15822392793aeb->leave($__internal_94be3a54e1b33cc0b1a6949ba3bfd1bee0d3df659c4213c78e15822392793aeb_prof);

        
        $__internal_5a9dc55d2c8c8b4098a573d05c76019c9412e44dcb562beea0db240e2f9c6d0a->leave($__internal_5a9dc55d2c8c8b4098a573d05c76019c9412e44dcb562beea0db240e2f9c6d0a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_023daf951b4f825a2625469ae09037b0d72f4289df7ff412b0fa4bd9c4c64a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023daf951b4f825a2625469ae09037b0d72f4289df7ff412b0fa4bd9c4c64a09->enter($__internal_023daf951b4f825a2625469ae09037b0d72f4289df7ff412b0fa4bd9c4c64a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77681230ff8c5b1af07ea406f7745baf735e22804b2c95029e29719b08e5cce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77681230ff8c5b1af07ea406f7745baf735e22804b2c95029e29719b08e5cce5->enter($__internal_77681230ff8c5b1af07ea406f7745baf735e22804b2c95029e29719b08e5cce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_77681230ff8c5b1af07ea406f7745baf735e22804b2c95029e29719b08e5cce5->leave($__internal_77681230ff8c5b1af07ea406f7745baf735e22804b2c95029e29719b08e5cce5_prof);

        
        $__internal_023daf951b4f825a2625469ae09037b0d72f4289df7ff412b0fa4bd9c4c64a09->leave($__internal_023daf951b4f825a2625469ae09037b0d72f4289df7ff412b0fa4bd9c4c64a09_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84a873a54c3b33cf7a112d5a405c1f4f3a252bb7eb4c5a4cb66e7b6309a093f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a873a54c3b33cf7a112d5a405c1f4f3a252bb7eb4c5a4cb66e7b6309a093f2->enter($__internal_84a873a54c3b33cf7a112d5a405c1f4f3a252bb7eb4c5a4cb66e7b6309a093f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26c5b2d307e424a783d9e74fafc19d0ae5a7b160c29abb0aa8ea9375b7e91581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c5b2d307e424a783d9e74fafc19d0ae5a7b160c29abb0aa8ea9375b7e91581->enter($__internal_26c5b2d307e424a783d9e74fafc19d0ae5a7b160c29abb0aa8ea9375b7e91581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_26c5b2d307e424a783d9e74fafc19d0ae5a7b160c29abb0aa8ea9375b7e91581->leave($__internal_26c5b2d307e424a783d9e74fafc19d0ae5a7b160c29abb0aa8ea9375b7e91581_prof);

        
        $__internal_84a873a54c3b33cf7a112d5a405c1f4f3a252bb7eb4c5a4cb66e7b6309a093f2->leave($__internal_84a873a54c3b33cf7a112d5a405c1f4f3a252bb7eb4c5a4cb66e7b6309a093f2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

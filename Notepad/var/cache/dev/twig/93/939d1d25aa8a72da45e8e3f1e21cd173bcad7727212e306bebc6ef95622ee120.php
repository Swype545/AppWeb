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
        $__internal_6eb2edb4cb97623ce121e9ffc1efa97e3b13bef494f9d1968e16348d601717ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb2edb4cb97623ce121e9ffc1efa97e3b13bef494f9d1968e16348d601717ca->enter($__internal_6eb2edb4cb97623ce121e9ffc1efa97e3b13bef494f9d1968e16348d601717ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b0c45ee7d2f45630038140d65d2566bb28ca6ff5e0cebcbd88198d91065ff3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c45ee7d2f45630038140d65d2566bb28ca6ff5e0cebcbd88198d91065ff3cf->enter($__internal_b0c45ee7d2f45630038140d65d2566bb28ca6ff5e0cebcbd88198d91065ff3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb2edb4cb97623ce121e9ffc1efa97e3b13bef494f9d1968e16348d601717ca->leave($__internal_6eb2edb4cb97623ce121e9ffc1efa97e3b13bef494f9d1968e16348d601717ca_prof);

        
        $__internal_b0c45ee7d2f45630038140d65d2566bb28ca6ff5e0cebcbd88198d91065ff3cf->leave($__internal_b0c45ee7d2f45630038140d65d2566bb28ca6ff5e0cebcbd88198d91065ff3cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d59fea98fbdac3ae7855e12574901fd121090b18ddc2a18697482fc3795f620d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59fea98fbdac3ae7855e12574901fd121090b18ddc2a18697482fc3795f620d->enter($__internal_d59fea98fbdac3ae7855e12574901fd121090b18ddc2a18697482fc3795f620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_670e8a2539b9e6fb69a313031f33b3b243629c1f5bb8bd2909892c635771f924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670e8a2539b9e6fb69a313031f33b3b243629c1f5bb8bd2909892c635771f924->enter($__internal_670e8a2539b9e6fb69a313031f33b3b243629c1f5bb8bd2909892c635771f924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_670e8a2539b9e6fb69a313031f33b3b243629c1f5bb8bd2909892c635771f924->leave($__internal_670e8a2539b9e6fb69a313031f33b3b243629c1f5bb8bd2909892c635771f924_prof);

        
        $__internal_d59fea98fbdac3ae7855e12574901fd121090b18ddc2a18697482fc3795f620d->leave($__internal_d59fea98fbdac3ae7855e12574901fd121090b18ddc2a18697482fc3795f620d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbc88971cfd4f172d621f321229b90df70231d3fea30732bf6b06bb981ab2732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc88971cfd4f172d621f321229b90df70231d3fea30732bf6b06bb981ab2732->enter($__internal_dbc88971cfd4f172d621f321229b90df70231d3fea30732bf6b06bb981ab2732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_82ed9aa111c3a104d5f4d5dcb746a7e3e9793845ec48c478edb0f639fc424cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ed9aa111c3a104d5f4d5dcb746a7e3e9793845ec48c478edb0f639fc424cf3->enter($__internal_82ed9aa111c3a104d5f4d5dcb746a7e3e9793845ec48c478edb0f639fc424cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_82ed9aa111c3a104d5f4d5dcb746a7e3e9793845ec48c478edb0f639fc424cf3->leave($__internal_82ed9aa111c3a104d5f4d5dcb746a7e3e9793845ec48c478edb0f639fc424cf3_prof);

        
        $__internal_dbc88971cfd4f172d621f321229b90df70231d3fea30732bf6b06bb981ab2732->leave($__internal_dbc88971cfd4f172d621f321229b90df70231d3fea30732bf6b06bb981ab2732_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b24b2a86a70a6f1273c4854c238bf57bb826811f064616a4ef38216f2d92d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b24b2a86a70a6f1273c4854c238bf57bb826811f064616a4ef38216f2d92d41->enter($__internal_8b24b2a86a70a6f1273c4854c238bf57bb826811f064616a4ef38216f2d92d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f18731427432fd73f9ce01dcfa14f6b0de690bd6b3fc8f40c9761bf5fc53ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f18731427432fd73f9ce01dcfa14f6b0de690bd6b3fc8f40c9761bf5fc53ddb->enter($__internal_6f18731427432fd73f9ce01dcfa14f6b0de690bd6b3fc8f40c9761bf5fc53ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6f18731427432fd73f9ce01dcfa14f6b0de690bd6b3fc8f40c9761bf5fc53ddb->leave($__internal_6f18731427432fd73f9ce01dcfa14f6b0de690bd6b3fc8f40c9761bf5fc53ddb_prof);

        
        $__internal_8b24b2a86a70a6f1273c4854c238bf57bb826811f064616a4ef38216f2d92d41->leave($__internal_8b24b2a86a70a6f1273c4854c238bf57bb826811f064616a4ef38216f2d92d41_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\AppWeb\\AppWeb\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

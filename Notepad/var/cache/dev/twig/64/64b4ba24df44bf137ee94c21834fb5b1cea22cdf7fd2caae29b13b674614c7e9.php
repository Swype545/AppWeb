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
        $__internal_a05128f4a918bc0a630644262087d88e9504b4d633931f44f3a22464be203b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05128f4a918bc0a630644262087d88e9504b4d633931f44f3a22464be203b28->enter($__internal_a05128f4a918bc0a630644262087d88e9504b4d633931f44f3a22464be203b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5abde6a975f5e31d886399307cefb31bbe5da421dd1dd667d7d5b6b7c8ba6f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abde6a975f5e31d886399307cefb31bbe5da421dd1dd667d7d5b6b7c8ba6f2d->enter($__internal_5abde6a975f5e31d886399307cefb31bbe5da421dd1dd667d7d5b6b7c8ba6f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05128f4a918bc0a630644262087d88e9504b4d633931f44f3a22464be203b28->leave($__internal_a05128f4a918bc0a630644262087d88e9504b4d633931f44f3a22464be203b28_prof);

        
        $__internal_5abde6a975f5e31d886399307cefb31bbe5da421dd1dd667d7d5b6b7c8ba6f2d->leave($__internal_5abde6a975f5e31d886399307cefb31bbe5da421dd1dd667d7d5b6b7c8ba6f2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d884a1bab084ec2cfa0a71f515d4b5a1cf9b3877d520dea1c344772690da34ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d884a1bab084ec2cfa0a71f515d4b5a1cf9b3877d520dea1c344772690da34ba->enter($__internal_d884a1bab084ec2cfa0a71f515d4b5a1cf9b3877d520dea1c344772690da34ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7df262a93c41ea5f22732790abf253fe4f2cff326bf97201e2c8d71a11c061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7df262a93c41ea5f22732790abf253fe4f2cff326bf97201e2c8d71a11c061c->enter($__internal_b7df262a93c41ea5f22732790abf253fe4f2cff326bf97201e2c8d71a11c061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b7df262a93c41ea5f22732790abf253fe4f2cff326bf97201e2c8d71a11c061c->leave($__internal_b7df262a93c41ea5f22732790abf253fe4f2cff326bf97201e2c8d71a11c061c_prof);

        
        $__internal_d884a1bab084ec2cfa0a71f515d4b5a1cf9b3877d520dea1c344772690da34ba->leave($__internal_d884a1bab084ec2cfa0a71f515d4b5a1cf9b3877d520dea1c344772690da34ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b641bc5faa79b8c20ba8fa274e2f857e46e31554d2e16fdd97770fccff8c4f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b641bc5faa79b8c20ba8fa274e2f857e46e31554d2e16fdd97770fccff8c4f60->enter($__internal_b641bc5faa79b8c20ba8fa274e2f857e46e31554d2e16fdd97770fccff8c4f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6688b7e77d359ac3f648adf7347f3b320d766ec45752005db31f1c199308e109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6688b7e77d359ac3f648adf7347f3b320d766ec45752005db31f1c199308e109->enter($__internal_6688b7e77d359ac3f648adf7347f3b320d766ec45752005db31f1c199308e109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6688b7e77d359ac3f648adf7347f3b320d766ec45752005db31f1c199308e109->leave($__internal_6688b7e77d359ac3f648adf7347f3b320d766ec45752005db31f1c199308e109_prof);

        
        $__internal_b641bc5faa79b8c20ba8fa274e2f857e46e31554d2e16fdd97770fccff8c4f60->leave($__internal_b641bc5faa79b8c20ba8fa274e2f857e46e31554d2e16fdd97770fccff8c4f60_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_147ab1949af21d7a610dbcd6536b718389e40c045ba2783bde7a2af32f879fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147ab1949af21d7a610dbcd6536b718389e40c045ba2783bde7a2af32f879fb6->enter($__internal_147ab1949af21d7a610dbcd6536b718389e40c045ba2783bde7a2af32f879fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f211d6e549152a226fd8e075d1d2f74e2a151d2fb74a722dc9e769a92d9b57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f211d6e549152a226fd8e075d1d2f74e2a151d2fb74a722dc9e769a92d9b57f->enter($__internal_1f211d6e549152a226fd8e075d1d2f74e2a151d2fb74a722dc9e769a92d9b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1f211d6e549152a226fd8e075d1d2f74e2a151d2fb74a722dc9e769a92d9b57f->leave($__internal_1f211d6e549152a226fd8e075d1d2f74e2a151d2fb74a722dc9e769a92d9b57f_prof);

        
        $__internal_147ab1949af21d7a610dbcd6536b718389e40c045ba2783bde7a2af32f879fb6->leave($__internal_147ab1949af21d7a610dbcd6536b718389e40c045ba2783bde7a2af32f879fb6_prof);

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

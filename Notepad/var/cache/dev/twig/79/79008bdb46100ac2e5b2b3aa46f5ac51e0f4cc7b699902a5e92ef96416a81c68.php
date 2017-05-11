<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4b01e5928f66a950b6e2c63f6c07a66829f3e6a722ea6ab5751cc905cd12998b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_6ddeb0eb7ef64d9c7d1207d6d75bc9adf7358206de8d0532217aa49b924fa681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddeb0eb7ef64d9c7d1207d6d75bc9adf7358206de8d0532217aa49b924fa681->enter($__internal_6ddeb0eb7ef64d9c7d1207d6d75bc9adf7358206de8d0532217aa49b924fa681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_43c8a01566e83e37a47f75f27c3db4e78e769cdf6f4ec82779082eb595281e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c8a01566e83e37a47f75f27c3db4e78e769cdf6f4ec82779082eb595281e4c->enter($__internal_43c8a01566e83e37a47f75f27c3db4e78e769cdf6f4ec82779082eb595281e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ddeb0eb7ef64d9c7d1207d6d75bc9adf7358206de8d0532217aa49b924fa681->leave($__internal_6ddeb0eb7ef64d9c7d1207d6d75bc9adf7358206de8d0532217aa49b924fa681_prof);

        
        $__internal_43c8a01566e83e37a47f75f27c3db4e78e769cdf6f4ec82779082eb595281e4c->leave($__internal_43c8a01566e83e37a47f75f27c3db4e78e769cdf6f4ec82779082eb595281e4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40afe4db61c69a460dbb66e71f694f561c86af9bcca4a1ecba9a5aa125a0d386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40afe4db61c69a460dbb66e71f694f561c86af9bcca4a1ecba9a5aa125a0d386->enter($__internal_40afe4db61c69a460dbb66e71f694f561c86af9bcca4a1ecba9a5aa125a0d386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b267b45cb2a7885287e65e88156285bf85bb63294b56afa70493a35004dcbe13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b267b45cb2a7885287e65e88156285bf85bb63294b56afa70493a35004dcbe13->enter($__internal_b267b45cb2a7885287e65e88156285bf85bb63294b56afa70493a35004dcbe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b267b45cb2a7885287e65e88156285bf85bb63294b56afa70493a35004dcbe13->leave($__internal_b267b45cb2a7885287e65e88156285bf85bb63294b56afa70493a35004dcbe13_prof);

        
        $__internal_40afe4db61c69a460dbb66e71f694f561c86af9bcca4a1ecba9a5aa125a0d386->leave($__internal_40afe4db61c69a460dbb66e71f694f561c86af9bcca4a1ecba9a5aa125a0d386_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e73175100217ba9b0bbab6fc10d612d32b4170c2d764c17167aadd9b6bd829f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e73175100217ba9b0bbab6fc10d612d32b4170c2d764c17167aadd9b6bd829f->enter($__internal_2e73175100217ba9b0bbab6fc10d612d32b4170c2d764c17167aadd9b6bd829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3844b53e4587f3906eb2d2d319b9e5fa08d530e22e441605e899adf622c74d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3844b53e4587f3906eb2d2d319b9e5fa08d530e22e441605e899adf622c74d87->enter($__internal_3844b53e4587f3906eb2d2d319b9e5fa08d530e22e441605e899adf622c74d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3844b53e4587f3906eb2d2d319b9e5fa08d530e22e441605e899adf622c74d87->leave($__internal_3844b53e4587f3906eb2d2d319b9e5fa08d530e22e441605e899adf622c74d87_prof);

        
        $__internal_2e73175100217ba9b0bbab6fc10d612d32b4170c2d764c17167aadd9b6bd829f->leave($__internal_2e73175100217ba9b0bbab6fc10d612d32b4170c2d764c17167aadd9b6bd829f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6574fad00756f901db801e45a55ad5c0f2af413f7d3625d27172439a5de75791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6574fad00756f901db801e45a55ad5c0f2af413f7d3625d27172439a5de75791->enter($__internal_6574fad00756f901db801e45a55ad5c0f2af413f7d3625d27172439a5de75791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7fa9efa94391279ba140a9eb222ed13b744f3b4afe7489e48c06d7f56319319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fa9efa94391279ba140a9eb222ed13b744f3b4afe7489e48c06d7f56319319->enter($__internal_b7fa9efa94391279ba140a9eb222ed13b744f3b4afe7489e48c06d7f56319319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b7fa9efa94391279ba140a9eb222ed13b744f3b4afe7489e48c06d7f56319319->leave($__internal_b7fa9efa94391279ba140a9eb222ed13b744f3b4afe7489e48c06d7f56319319_prof);

        
        $__internal_6574fad00756f901db801e45a55ad5c0f2af413f7d3625d27172439a5de75791->leave($__internal_6574fad00756f901db801e45a55ad5c0f2af413f7d3625d27172439a5de75791_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

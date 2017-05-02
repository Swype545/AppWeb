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
        $__internal_0270712a717a0759ca6c6a4ca9ea4f26365560e3b730de30b7fb60b01e10715c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0270712a717a0759ca6c6a4ca9ea4f26365560e3b730de30b7fb60b01e10715c->enter($__internal_0270712a717a0759ca6c6a4ca9ea4f26365560e3b730de30b7fb60b01e10715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1fd0cf0f170806db237587ed20f76f677b329c03c5424290ed8dbc535c45d7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd0cf0f170806db237587ed20f76f677b329c03c5424290ed8dbc535c45d7ab->enter($__internal_1fd0cf0f170806db237587ed20f76f677b329c03c5424290ed8dbc535c45d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0270712a717a0759ca6c6a4ca9ea4f26365560e3b730de30b7fb60b01e10715c->leave($__internal_0270712a717a0759ca6c6a4ca9ea4f26365560e3b730de30b7fb60b01e10715c_prof);

        
        $__internal_1fd0cf0f170806db237587ed20f76f677b329c03c5424290ed8dbc535c45d7ab->leave($__internal_1fd0cf0f170806db237587ed20f76f677b329c03c5424290ed8dbc535c45d7ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b85ffb0ab857ffa1b41db1670db9010fdfe16271ddc58a2bda8bfb0246f1547e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85ffb0ab857ffa1b41db1670db9010fdfe16271ddc58a2bda8bfb0246f1547e->enter($__internal_b85ffb0ab857ffa1b41db1670db9010fdfe16271ddc58a2bda8bfb0246f1547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a85e25ad921c6a8c30f23644eab4a209ec8a1f008d886b677e5a14a348cdae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a85e25ad921c6a8c30f23644eab4a209ec8a1f008d886b677e5a14a348cdae3->enter($__internal_4a85e25ad921c6a8c30f23644eab4a209ec8a1f008d886b677e5a14a348cdae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4a85e25ad921c6a8c30f23644eab4a209ec8a1f008d886b677e5a14a348cdae3->leave($__internal_4a85e25ad921c6a8c30f23644eab4a209ec8a1f008d886b677e5a14a348cdae3_prof);

        
        $__internal_b85ffb0ab857ffa1b41db1670db9010fdfe16271ddc58a2bda8bfb0246f1547e->leave($__internal_b85ffb0ab857ffa1b41db1670db9010fdfe16271ddc58a2bda8bfb0246f1547e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d38bca670c0c08250f49eee587c7d9b00a0cc5087a08ca81e891982509d9ec22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38bca670c0c08250f49eee587c7d9b00a0cc5087a08ca81e891982509d9ec22->enter($__internal_d38bca670c0c08250f49eee587c7d9b00a0cc5087a08ca81e891982509d9ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1790d8eecf2b0fefb44a754067b18f2faab45c0b6609ec57034339c55c889fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1790d8eecf2b0fefb44a754067b18f2faab45c0b6609ec57034339c55c889fdd->enter($__internal_1790d8eecf2b0fefb44a754067b18f2faab45c0b6609ec57034339c55c889fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1790d8eecf2b0fefb44a754067b18f2faab45c0b6609ec57034339c55c889fdd->leave($__internal_1790d8eecf2b0fefb44a754067b18f2faab45c0b6609ec57034339c55c889fdd_prof);

        
        $__internal_d38bca670c0c08250f49eee587c7d9b00a0cc5087a08ca81e891982509d9ec22->leave($__internal_d38bca670c0c08250f49eee587c7d9b00a0cc5087a08ca81e891982509d9ec22_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5df8e97e47ed4ba880a8c3fbce6b881a6ce7aeecab2d9f14017b831514fbf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5df8e97e47ed4ba880a8c3fbce6b881a6ce7aeecab2d9f14017b831514fbf54->enter($__internal_c5df8e97e47ed4ba880a8c3fbce6b881a6ce7aeecab2d9f14017b831514fbf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c29a3de1404a12678fce1c7926b13668f016862280d5c88706774ba043086f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29a3de1404a12678fce1c7926b13668f016862280d5c88706774ba043086f34->enter($__internal_c29a3de1404a12678fce1c7926b13668f016862280d5c88706774ba043086f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c29a3de1404a12678fce1c7926b13668f016862280d5c88706774ba043086f34->leave($__internal_c29a3de1404a12678fce1c7926b13668f016862280d5c88706774ba043086f34_prof);

        
        $__internal_c5df8e97e47ed4ba880a8c3fbce6b881a6ce7aeecab2d9f14017b831514fbf54->leave($__internal_c5df8e97e47ed4ba880a8c3fbce6b881a6ce7aeecab2d9f14017b831514fbf54_prof);

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

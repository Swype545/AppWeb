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
        $__internal_78678280b4b69f2b66f4919b81b550d0c8640f936d6397491cefae6c9df059e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78678280b4b69f2b66f4919b81b550d0c8640f936d6397491cefae6c9df059e3->enter($__internal_78678280b4b69f2b66f4919b81b550d0c8640f936d6397491cefae6c9df059e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0eb4f325d26cf01e364fbb8df87e863ca1182a827d7eb3e6fab7b7a5688f4245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb4f325d26cf01e364fbb8df87e863ca1182a827d7eb3e6fab7b7a5688f4245->enter($__internal_0eb4f325d26cf01e364fbb8df87e863ca1182a827d7eb3e6fab7b7a5688f4245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78678280b4b69f2b66f4919b81b550d0c8640f936d6397491cefae6c9df059e3->leave($__internal_78678280b4b69f2b66f4919b81b550d0c8640f936d6397491cefae6c9df059e3_prof);

        
        $__internal_0eb4f325d26cf01e364fbb8df87e863ca1182a827d7eb3e6fab7b7a5688f4245->leave($__internal_0eb4f325d26cf01e364fbb8df87e863ca1182a827d7eb3e6fab7b7a5688f4245_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9b593579891f1cada08288a3837750148e0e84aa37e99f3ddf951f04adf09f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b593579891f1cada08288a3837750148e0e84aa37e99f3ddf951f04adf09f0->enter($__internal_c9b593579891f1cada08288a3837750148e0e84aa37e99f3ddf951f04adf09f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef5c4ada49bfb1c0bc258bade3e109b5bb2095d616e22248c62cd8a047b18d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5c4ada49bfb1c0bc258bade3e109b5bb2095d616e22248c62cd8a047b18d94->enter($__internal_ef5c4ada49bfb1c0bc258bade3e109b5bb2095d616e22248c62cd8a047b18d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ef5c4ada49bfb1c0bc258bade3e109b5bb2095d616e22248c62cd8a047b18d94->leave($__internal_ef5c4ada49bfb1c0bc258bade3e109b5bb2095d616e22248c62cd8a047b18d94_prof);

        
        $__internal_c9b593579891f1cada08288a3837750148e0e84aa37e99f3ddf951f04adf09f0->leave($__internal_c9b593579891f1cada08288a3837750148e0e84aa37e99f3ddf951f04adf09f0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b52b04bd55edbf394fb13748b1403eadd6f396e2b2f822a513b20ba7f24817b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52b04bd55edbf394fb13748b1403eadd6f396e2b2f822a513b20ba7f24817b8->enter($__internal_b52b04bd55edbf394fb13748b1403eadd6f396e2b2f822a513b20ba7f24817b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e4ce033afe2b7b8fcae1a55bd2d90a0567a7c0159a57e81f59a9d982ad9a853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4ce033afe2b7b8fcae1a55bd2d90a0567a7c0159a57e81f59a9d982ad9a853->enter($__internal_8e4ce033afe2b7b8fcae1a55bd2d90a0567a7c0159a57e81f59a9d982ad9a853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8e4ce033afe2b7b8fcae1a55bd2d90a0567a7c0159a57e81f59a9d982ad9a853->leave($__internal_8e4ce033afe2b7b8fcae1a55bd2d90a0567a7c0159a57e81f59a9d982ad9a853_prof);

        
        $__internal_b52b04bd55edbf394fb13748b1403eadd6f396e2b2f822a513b20ba7f24817b8->leave($__internal_b52b04bd55edbf394fb13748b1403eadd6f396e2b2f822a513b20ba7f24817b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d478e5d74ae8698b7c560741cce9c64c691b79552415eae29328c4daf0992084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d478e5d74ae8698b7c560741cce9c64c691b79552415eae29328c4daf0992084->enter($__internal_d478e5d74ae8698b7c560741cce9c64c691b79552415eae29328c4daf0992084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28f936cd5b7a3859172c6ce3f6d1a1c33d5f392dc61db464b71523fadff8abc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f936cd5b7a3859172c6ce3f6d1a1c33d5f392dc61db464b71523fadff8abc1->enter($__internal_28f936cd5b7a3859172c6ce3f6d1a1c33d5f392dc61db464b71523fadff8abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_28f936cd5b7a3859172c6ce3f6d1a1c33d5f392dc61db464b71523fadff8abc1->leave($__internal_28f936cd5b7a3859172c6ce3f6d1a1c33d5f392dc61db464b71523fadff8abc1_prof);

        
        $__internal_d478e5d74ae8698b7c560741cce9c64c691b79552415eae29328c4daf0992084->leave($__internal_d478e5d74ae8698b7c560741cce9c64c691b79552415eae29328c4daf0992084_prof);

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

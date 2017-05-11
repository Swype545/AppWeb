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
        $__internal_14f5a15d7d9f7ec5451001ba7a8c3c557f28baea71445ffdd880392073c57f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f5a15d7d9f7ec5451001ba7a8c3c557f28baea71445ffdd880392073c57f65->enter($__internal_14f5a15d7d9f7ec5451001ba7a8c3c557f28baea71445ffdd880392073c57f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_29753575b942f1c3faf6603ddd352e68c26b9fc6efe948d4de95b64fe830498a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29753575b942f1c3faf6603ddd352e68c26b9fc6efe948d4de95b64fe830498a->enter($__internal_29753575b942f1c3faf6603ddd352e68c26b9fc6efe948d4de95b64fe830498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14f5a15d7d9f7ec5451001ba7a8c3c557f28baea71445ffdd880392073c57f65->leave($__internal_14f5a15d7d9f7ec5451001ba7a8c3c557f28baea71445ffdd880392073c57f65_prof);

        
        $__internal_29753575b942f1c3faf6603ddd352e68c26b9fc6efe948d4de95b64fe830498a->leave($__internal_29753575b942f1c3faf6603ddd352e68c26b9fc6efe948d4de95b64fe830498a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7346631f6cfae0fe7df9d46b221b06b771add6b2b00ee938beca5be0c7d893f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7346631f6cfae0fe7df9d46b221b06b771add6b2b00ee938beca5be0c7d893f7->enter($__internal_7346631f6cfae0fe7df9d46b221b06b771add6b2b00ee938beca5be0c7d893f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e209db4ed074d9af4e68e5a782a8dbe4bca3b8070513a0d9af9df7d7adeb77f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e209db4ed074d9af4e68e5a782a8dbe4bca3b8070513a0d9af9df7d7adeb77f7->enter($__internal_e209db4ed074d9af4e68e5a782a8dbe4bca3b8070513a0d9af9df7d7adeb77f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e209db4ed074d9af4e68e5a782a8dbe4bca3b8070513a0d9af9df7d7adeb77f7->leave($__internal_e209db4ed074d9af4e68e5a782a8dbe4bca3b8070513a0d9af9df7d7adeb77f7_prof);

        
        $__internal_7346631f6cfae0fe7df9d46b221b06b771add6b2b00ee938beca5be0c7d893f7->leave($__internal_7346631f6cfae0fe7df9d46b221b06b771add6b2b00ee938beca5be0c7d893f7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7e32b8765a2bc1876fc0f207c6fc2b18f7168f344945e557c2dfb5548c26ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e32b8765a2bc1876fc0f207c6fc2b18f7168f344945e557c2dfb5548c26ce7->enter($__internal_b7e32b8765a2bc1876fc0f207c6fc2b18f7168f344945e557c2dfb5548c26ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_336b9459a93e53fc3721c282cef3c130a48cafa56ab541de9ffdda2176e1ec84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336b9459a93e53fc3721c282cef3c130a48cafa56ab541de9ffdda2176e1ec84->enter($__internal_336b9459a93e53fc3721c282cef3c130a48cafa56ab541de9ffdda2176e1ec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_336b9459a93e53fc3721c282cef3c130a48cafa56ab541de9ffdda2176e1ec84->leave($__internal_336b9459a93e53fc3721c282cef3c130a48cafa56ab541de9ffdda2176e1ec84_prof);

        
        $__internal_b7e32b8765a2bc1876fc0f207c6fc2b18f7168f344945e557c2dfb5548c26ce7->leave($__internal_b7e32b8765a2bc1876fc0f207c6fc2b18f7168f344945e557c2dfb5548c26ce7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8cf2c61c70bab56de64b2b62b66da22f42db352c6bc2d6d259933d9f4361ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cf2c61c70bab56de64b2b62b66da22f42db352c6bc2d6d259933d9f4361ead->enter($__internal_f8cf2c61c70bab56de64b2b62b66da22f42db352c6bc2d6d259933d9f4361ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c41d7d8bf044f41f2555b82a4cc143a7e297dc69e1177b84e6dc31dc951f5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41d7d8bf044f41f2555b82a4cc143a7e297dc69e1177b84e6dc31dc951f5ff->enter($__internal_8c41d7d8bf044f41f2555b82a4cc143a7e297dc69e1177b84e6dc31dc951f5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8c41d7d8bf044f41f2555b82a4cc143a7e297dc69e1177b84e6dc31dc951f5ff->leave($__internal_8c41d7d8bf044f41f2555b82a4cc143a7e297dc69e1177b84e6dc31dc951f5ff_prof);

        
        $__internal_f8cf2c61c70bab56de64b2b62b66da22f42db352c6bc2d6d259933d9f4361ead->leave($__internal_f8cf2c61c70bab56de64b2b62b66da22f42db352c6bc2d6d259933d9f4361ead_prof);

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

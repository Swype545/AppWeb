<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_16d071fb16238fd62748b76cfc4d766e278e0fab2d0613fc6ea9a19f9fce4e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d071fb16238fd62748b76cfc4d766e278e0fab2d0613fc6ea9a19f9fce4e49->enter($__internal_16d071fb16238fd62748b76cfc4d766e278e0fab2d0613fc6ea9a19f9fce4e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_20f1ac87b072af01a34a9d83a89242b5fccd826014aa3d550e9e3642ff64f691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f1ac87b072af01a34a9d83a89242b5fccd826014aa3d550e9e3642ff64f691->enter($__internal_20f1ac87b072af01a34a9d83a89242b5fccd826014aa3d550e9e3642ff64f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d071fb16238fd62748b76cfc4d766e278e0fab2d0613fc6ea9a19f9fce4e49->leave($__internal_16d071fb16238fd62748b76cfc4d766e278e0fab2d0613fc6ea9a19f9fce4e49_prof);

        
        $__internal_20f1ac87b072af01a34a9d83a89242b5fccd826014aa3d550e9e3642ff64f691->leave($__internal_20f1ac87b072af01a34a9d83a89242b5fccd826014aa3d550e9e3642ff64f691_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_364f9c1a77e113cd4be88975aad08d627c0d5654c62162225e55f6f923e4a2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364f9c1a77e113cd4be88975aad08d627c0d5654c62162225e55f6f923e4a2f8->enter($__internal_364f9c1a77e113cd4be88975aad08d627c0d5654c62162225e55f6f923e4a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e5333a00d37613d6f74c5fdb05a8cb68fd68cd5e00da7488dd93879d657a477b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5333a00d37613d6f74c5fdb05a8cb68fd68cd5e00da7488dd93879d657a477b->enter($__internal_e5333a00d37613d6f74c5fdb05a8cb68fd68cd5e00da7488dd93879d657a477b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5333a00d37613d6f74c5fdb05a8cb68fd68cd5e00da7488dd93879d657a477b->leave($__internal_e5333a00d37613d6f74c5fdb05a8cb68fd68cd5e00da7488dd93879d657a477b_prof);

        
        $__internal_364f9c1a77e113cd4be88975aad08d627c0d5654c62162225e55f6f923e4a2f8->leave($__internal_364f9c1a77e113cd4be88975aad08d627c0d5654c62162225e55f6f923e4a2f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb9f1c24b64485da395860789109c85dc08d1c0167b2984551394b9f70213803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9f1c24b64485da395860789109c85dc08d1c0167b2984551394b9f70213803->enter($__internal_eb9f1c24b64485da395860789109c85dc08d1c0167b2984551394b9f70213803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_024ee439a2c522383162591bbb59ea1f3b739a0071683028dd16bcc58cc7262d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024ee439a2c522383162591bbb59ea1f3b739a0071683028dd16bcc58cc7262d->enter($__internal_024ee439a2c522383162591bbb59ea1f3b739a0071683028dd16bcc58cc7262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_024ee439a2c522383162591bbb59ea1f3b739a0071683028dd16bcc58cc7262d->leave($__internal_024ee439a2c522383162591bbb59ea1f3b739a0071683028dd16bcc58cc7262d_prof);

        
        $__internal_eb9f1c24b64485da395860789109c85dc08d1c0167b2984551394b9f70213803->leave($__internal_eb9f1c24b64485da395860789109c85dc08d1c0167b2984551394b9f70213803_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1823295ef0d81df8f71e31ffa187ef39bb8655a753d8f5098f1634ed58d45d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1823295ef0d81df8f71e31ffa187ef39bb8655a753d8f5098f1634ed58d45d3->enter($__internal_f1823295ef0d81df8f71e31ffa187ef39bb8655a753d8f5098f1634ed58d45d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8dafe0325cd6b9cbe68e05352b0692186e3d0270ef2ba6b577af5b913e398a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dafe0325cd6b9cbe68e05352b0692186e3d0270ef2ba6b577af5b913e398a8f->enter($__internal_8dafe0325cd6b9cbe68e05352b0692186e3d0270ef2ba6b577af5b913e398a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8dafe0325cd6b9cbe68e05352b0692186e3d0270ef2ba6b577af5b913e398a8f->leave($__internal_8dafe0325cd6b9cbe68e05352b0692186e3d0270ef2ba6b577af5b913e398a8f_prof);

        
        $__internal_f1823295ef0d81df8f71e31ffa187ef39bb8655a753d8f5098f1634ed58d45d3->leave($__internal_f1823295ef0d81df8f71e31ffa187ef39bb8655a753d8f5098f1634ed58d45d3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

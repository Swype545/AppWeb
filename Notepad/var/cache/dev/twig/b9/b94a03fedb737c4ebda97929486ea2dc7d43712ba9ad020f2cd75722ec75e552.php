<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f695677720145e4a4e4963f6f9a9a80d16ab7ef6a14fa5386f0123454403ed5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15b740d9c8ec3b106dd186c716cb8a7e1f5d9e5d074161bc3dc21a3192f49f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b740d9c8ec3b106dd186c716cb8a7e1f5d9e5d074161bc3dc21a3192f49f16->enter($__internal_15b740d9c8ec3b106dd186c716cb8a7e1f5d9e5d074161bc3dc21a3192f49f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_90c043f7a641eedd17cd1eafecdb506bcac9d3ef09f3c7d01be449c57069c0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c043f7a641eedd17cd1eafecdb506bcac9d3ef09f3c7d01be449c57069c0a8->enter($__internal_90c043f7a641eedd17cd1eafecdb506bcac9d3ef09f3c7d01be449c57069c0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b740d9c8ec3b106dd186c716cb8a7e1f5d9e5d074161bc3dc21a3192f49f16->leave($__internal_15b740d9c8ec3b106dd186c716cb8a7e1f5d9e5d074161bc3dc21a3192f49f16_prof);

        
        $__internal_90c043f7a641eedd17cd1eafecdb506bcac9d3ef09f3c7d01be449c57069c0a8->leave($__internal_90c043f7a641eedd17cd1eafecdb506bcac9d3ef09f3c7d01be449c57069c0a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ea3ef4708182ba4574dd01091bb277be3835389c2de88e9d41b5e94deb1863f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea3ef4708182ba4574dd01091bb277be3835389c2de88e9d41b5e94deb1863f->enter($__internal_4ea3ef4708182ba4574dd01091bb277be3835389c2de88e9d41b5e94deb1863f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1f4c75845722fb3a0e1f47a50910614b7e4e7832fbb638b66e29a3c4c7463aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4c75845722fb3a0e1f47a50910614b7e4e7832fbb638b66e29a3c4c7463aca->enter($__internal_1f4c75845722fb3a0e1f47a50910614b7e4e7832fbb638b66e29a3c4c7463aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1f4c75845722fb3a0e1f47a50910614b7e4e7832fbb638b66e29a3c4c7463aca->leave($__internal_1f4c75845722fb3a0e1f47a50910614b7e4e7832fbb638b66e29a3c4c7463aca_prof);

        
        $__internal_4ea3ef4708182ba4574dd01091bb277be3835389c2de88e9d41b5e94deb1863f->leave($__internal_4ea3ef4708182ba4574dd01091bb277be3835389c2de88e9d41b5e94deb1863f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

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
        $__internal_9f7d1743910b38ce84ab406e0981c70adc04c278a4fcea5bd02661a4a034b51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7d1743910b38ce84ab406e0981c70adc04c278a4fcea5bd02661a4a034b51f->enter($__internal_9f7d1743910b38ce84ab406e0981c70adc04c278a4fcea5bd02661a4a034b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_eee5b318dd210fba9eb246476eff357cf7e271397c2cde5021274a918a4debff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee5b318dd210fba9eb246476eff357cf7e271397c2cde5021274a918a4debff->enter($__internal_eee5b318dd210fba9eb246476eff357cf7e271397c2cde5021274a918a4debff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7d1743910b38ce84ab406e0981c70adc04c278a4fcea5bd02661a4a034b51f->leave($__internal_9f7d1743910b38ce84ab406e0981c70adc04c278a4fcea5bd02661a4a034b51f_prof);

        
        $__internal_eee5b318dd210fba9eb246476eff357cf7e271397c2cde5021274a918a4debff->leave($__internal_eee5b318dd210fba9eb246476eff357cf7e271397c2cde5021274a918a4debff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ed15f587dac26c3b96177661eb105fda0228718e7cc92e7f0d23df7cc076828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed15f587dac26c3b96177661eb105fda0228718e7cc92e7f0d23df7cc076828->enter($__internal_2ed15f587dac26c3b96177661eb105fda0228718e7cc92e7f0d23df7cc076828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4a447e6534dc9ce85dcf541c9ed66ec1cecc5d922e4fba31f1a7bb3fa30637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a447e6534dc9ce85dcf541c9ed66ec1cecc5d922e4fba31f1a7bb3fa30637a->enter($__internal_a4a447e6534dc9ce85dcf541c9ed66ec1cecc5d922e4fba31f1a7bb3fa30637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a4a447e6534dc9ce85dcf541c9ed66ec1cecc5d922e4fba31f1a7bb3fa30637a->leave($__internal_a4a447e6534dc9ce85dcf541c9ed66ec1cecc5d922e4fba31f1a7bb3fa30637a_prof);

        
        $__internal_2ed15f587dac26c3b96177661eb105fda0228718e7cc92e7f0d23df7cc076828->leave($__internal_2ed15f587dac26c3b96177661eb105fda0228718e7cc92e7f0d23df7cc076828_prof);

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

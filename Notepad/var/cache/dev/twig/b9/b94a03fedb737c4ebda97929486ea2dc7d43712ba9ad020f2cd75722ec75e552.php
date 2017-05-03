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
        $__internal_afb1ceef039fbe9e5c383adafa470a1f48dd870d6408cb1de27a7bfc75e2e0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb1ceef039fbe9e5c383adafa470a1f48dd870d6408cb1de27a7bfc75e2e0a4->enter($__internal_afb1ceef039fbe9e5c383adafa470a1f48dd870d6408cb1de27a7bfc75e2e0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f417e17496411e73f27568b44b8b64efb4df7f10ca4aac51976b1fe262dbdd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f417e17496411e73f27568b44b8b64efb4df7f10ca4aac51976b1fe262dbdd39->enter($__internal_f417e17496411e73f27568b44b8b64efb4df7f10ca4aac51976b1fe262dbdd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afb1ceef039fbe9e5c383adafa470a1f48dd870d6408cb1de27a7bfc75e2e0a4->leave($__internal_afb1ceef039fbe9e5c383adafa470a1f48dd870d6408cb1de27a7bfc75e2e0a4_prof);

        
        $__internal_f417e17496411e73f27568b44b8b64efb4df7f10ca4aac51976b1fe262dbdd39->leave($__internal_f417e17496411e73f27568b44b8b64efb4df7f10ca4aac51976b1fe262dbdd39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1333533ce4230d3dc2df110f8651cdc7115a4d135fb375dee69fabada18bdda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1333533ce4230d3dc2df110f8651cdc7115a4d135fb375dee69fabada18bdda7->enter($__internal_1333533ce4230d3dc2df110f8651cdc7115a4d135fb375dee69fabada18bdda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0660195f486b1d423e95ef3b82aead303fceb80281842489de3befc772c8bb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0660195f486b1d423e95ef3b82aead303fceb80281842489de3befc772c8bb74->enter($__internal_0660195f486b1d423e95ef3b82aead303fceb80281842489de3befc772c8bb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0660195f486b1d423e95ef3b82aead303fceb80281842489de3befc772c8bb74->leave($__internal_0660195f486b1d423e95ef3b82aead303fceb80281842489de3befc772c8bb74_prof);

        
        $__internal_1333533ce4230d3dc2df110f8651cdc7115a4d135fb375dee69fabada18bdda7->leave($__internal_1333533ce4230d3dc2df110f8651cdc7115a4d135fb375dee69fabada18bdda7_prof);

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

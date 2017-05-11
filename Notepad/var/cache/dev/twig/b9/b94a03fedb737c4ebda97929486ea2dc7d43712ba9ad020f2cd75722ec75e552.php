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
        $__internal_c80240103a182a217c5f8048f879a2a39ba409b975594324d28f08f914a8ac12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80240103a182a217c5f8048f879a2a39ba409b975594324d28f08f914a8ac12->enter($__internal_c80240103a182a217c5f8048f879a2a39ba409b975594324d28f08f914a8ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b99a49d8445925b099d8614442a46fb12162ccaae0ac6ee7d585b4ca229dcd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99a49d8445925b099d8614442a46fb12162ccaae0ac6ee7d585b4ca229dcd2d->enter($__internal_b99a49d8445925b099d8614442a46fb12162ccaae0ac6ee7d585b4ca229dcd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80240103a182a217c5f8048f879a2a39ba409b975594324d28f08f914a8ac12->leave($__internal_c80240103a182a217c5f8048f879a2a39ba409b975594324d28f08f914a8ac12_prof);

        
        $__internal_b99a49d8445925b099d8614442a46fb12162ccaae0ac6ee7d585b4ca229dcd2d->leave($__internal_b99a49d8445925b099d8614442a46fb12162ccaae0ac6ee7d585b4ca229dcd2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed5f9be3d6b277ffe30b19a766d10dd4c485648d7419eb8bf772f974bf750c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5f9be3d6b277ffe30b19a766d10dd4c485648d7419eb8bf772f974bf750c4c->enter($__internal_ed5f9be3d6b277ffe30b19a766d10dd4c485648d7419eb8bf772f974bf750c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_812671c7e66074c976580bdca8c37b8e6a3493808dcb9cd98abced8946e91d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812671c7e66074c976580bdca8c37b8e6a3493808dcb9cd98abced8946e91d8b->enter($__internal_812671c7e66074c976580bdca8c37b8e6a3493808dcb9cd98abced8946e91d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_812671c7e66074c976580bdca8c37b8e6a3493808dcb9cd98abced8946e91d8b->leave($__internal_812671c7e66074c976580bdca8c37b8e6a3493808dcb9cd98abced8946e91d8b_prof);

        
        $__internal_ed5f9be3d6b277ffe30b19a766d10dd4c485648d7419eb8bf772f974bf750c4c->leave($__internal_ed5f9be3d6b277ffe30b19a766d10dd4c485648d7419eb8bf772f974bf750c4c_prof);

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

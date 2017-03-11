<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbf598c7f12aa7a0d654c73192cbd1a9866931e5c470aea81040e1555b77d73a extends Twig_Template
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
        $__internal_78f0fea43b8be9f428362894ee94c305d18378d31ee8b11dad6cf7b85885191e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f0fea43b8be9f428362894ee94c305d18378d31ee8b11dad6cf7b85885191e->enter($__internal_78f0fea43b8be9f428362894ee94c305d18378d31ee8b11dad6cf7b85885191e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_97f518320043a422170ecf6e4006bbe2cfcf65e119d43a9c0ee45c7b210af054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f518320043a422170ecf6e4006bbe2cfcf65e119d43a9c0ee45c7b210af054->enter($__internal_97f518320043a422170ecf6e4006bbe2cfcf65e119d43a9c0ee45c7b210af054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f0fea43b8be9f428362894ee94c305d18378d31ee8b11dad6cf7b85885191e->leave($__internal_78f0fea43b8be9f428362894ee94c305d18378d31ee8b11dad6cf7b85885191e_prof);

        
        $__internal_97f518320043a422170ecf6e4006bbe2cfcf65e119d43a9c0ee45c7b210af054->leave($__internal_97f518320043a422170ecf6e4006bbe2cfcf65e119d43a9c0ee45c7b210af054_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64e8780e1b72cdb4da2a002f828ec5ccd92698458b19aace62d2d9f23d063b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e8780e1b72cdb4da2a002f828ec5ccd92698458b19aace62d2d9f23d063b90->enter($__internal_64e8780e1b72cdb4da2a002f828ec5ccd92698458b19aace62d2d9f23d063b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d31c1731a987ee51472263e1f96192f86a8b7ac7fd863c04b0c5c27f3a3c8f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31c1731a987ee51472263e1f96192f86a8b7ac7fd863c04b0c5c27f3a3c8f6a->enter($__internal_d31c1731a987ee51472263e1f96192f86a8b7ac7fd863c04b0c5c27f3a3c8f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d31c1731a987ee51472263e1f96192f86a8b7ac7fd863c04b0c5c27f3a3c8f6a->leave($__internal_d31c1731a987ee51472263e1f96192f86a8b7ac7fd863c04b0c5c27f3a3c8f6a_prof);

        
        $__internal_64e8780e1b72cdb4da2a002f828ec5ccd92698458b19aace62d2d9f23d063b90->leave($__internal_64e8780e1b72cdb4da2a002f828ec5ccd92698458b19aace62d2d9f23d063b90_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

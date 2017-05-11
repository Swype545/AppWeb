<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_693460a281f1549fe796d17469bf9c823df61f9f2abf199ea9dd1a09bb51a122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_b1e90d3d2c2b5bb7b411c03a41e2a7760ed8f1ed86e1b6cbc8e74b2fbcf4aeb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e90d3d2c2b5bb7b411c03a41e2a7760ed8f1ed86e1b6cbc8e74b2fbcf4aeb9->enter($__internal_b1e90d3d2c2b5bb7b411c03a41e2a7760ed8f1ed86e1b6cbc8e74b2fbcf4aeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6423813cc409bdc5832aac46a84dc6ffc4d392e9bd855ba9e57dc114885f4b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6423813cc409bdc5832aac46a84dc6ffc4d392e9bd855ba9e57dc114885f4b4b->enter($__internal_6423813cc409bdc5832aac46a84dc6ffc4d392e9bd855ba9e57dc114885f4b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e90d3d2c2b5bb7b411c03a41e2a7760ed8f1ed86e1b6cbc8e74b2fbcf4aeb9->leave($__internal_b1e90d3d2c2b5bb7b411c03a41e2a7760ed8f1ed86e1b6cbc8e74b2fbcf4aeb9_prof);

        
        $__internal_6423813cc409bdc5832aac46a84dc6ffc4d392e9bd855ba9e57dc114885f4b4b->leave($__internal_6423813cc409bdc5832aac46a84dc6ffc4d392e9bd855ba9e57dc114885f4b4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78ec0ab7e6558245add65f1747cb1a671360b949f9b99678bc1568be426b21ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ec0ab7e6558245add65f1747cb1a671360b949f9b99678bc1568be426b21ab->enter($__internal_78ec0ab7e6558245add65f1747cb1a671360b949f9b99678bc1568be426b21ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45f34450b10cc782e50929d96e4d19e164d15da5e0e971893c6602ea647718a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f34450b10cc782e50929d96e4d19e164d15da5e0e971893c6602ea647718a9->enter($__internal_45f34450b10cc782e50929d96e4d19e164d15da5e0e971893c6602ea647718a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_45f34450b10cc782e50929d96e4d19e164d15da5e0e971893c6602ea647718a9->leave($__internal_45f34450b10cc782e50929d96e4d19e164d15da5e0e971893c6602ea647718a9_prof);

        
        $__internal_78ec0ab7e6558245add65f1747cb1a671360b949f9b99678bc1568be426b21ab->leave($__internal_78ec0ab7e6558245add65f1747cb1a671360b949f9b99678bc1568be426b21ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

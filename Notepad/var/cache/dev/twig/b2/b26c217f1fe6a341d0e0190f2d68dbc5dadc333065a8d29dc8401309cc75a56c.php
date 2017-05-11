<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3a47b3ba6a7a9eb83065b6a9750b9124f6ac5970a310240a9d754959586722e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3eb78ca1633733dc63ad9b561b3e1857a6848c61a98e2306f2e01edccb64fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3eb78ca1633733dc63ad9b561b3e1857a6848c61a98e2306f2e01edccb64fa0->enter($__internal_c3eb78ca1633733dc63ad9b561b3e1857a6848c61a98e2306f2e01edccb64fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2cde851941365a4698a11d79cacb3fd2cb7b3fcd3aa3cfe285a557937151c394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cde851941365a4698a11d79cacb3fd2cb7b3fcd3aa3cfe285a557937151c394->enter($__internal_2cde851941365a4698a11d79cacb3fd2cb7b3fcd3aa3cfe285a557937151c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3eb78ca1633733dc63ad9b561b3e1857a6848c61a98e2306f2e01edccb64fa0->leave($__internal_c3eb78ca1633733dc63ad9b561b3e1857a6848c61a98e2306f2e01edccb64fa0_prof);

        
        $__internal_2cde851941365a4698a11d79cacb3fd2cb7b3fcd3aa3cfe285a557937151c394->leave($__internal_2cde851941365a4698a11d79cacb3fd2cb7b3fcd3aa3cfe285a557937151c394_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_66b02a7c9220c4b6a9c0f9675e4e95927f57612ff8f7f500f7bd2187b28b3a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b02a7c9220c4b6a9c0f9675e4e95927f57612ff8f7f500f7bd2187b28b3a90->enter($__internal_66b02a7c9220c4b6a9c0f9675e4e95927f57612ff8f7f500f7bd2187b28b3a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1f0f8b41e5ca3567d13d48902e4815e8d09709154d7e64dabd583b4043b40840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0f8b41e5ca3567d13d48902e4815e8d09709154d7e64dabd583b4043b40840->enter($__internal_1f0f8b41e5ca3567d13d48902e4815e8d09709154d7e64dabd583b4043b40840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1f0f8b41e5ca3567d13d48902e4815e8d09709154d7e64dabd583b4043b40840->leave($__internal_1f0f8b41e5ca3567d13d48902e4815e8d09709154d7e64dabd583b4043b40840_prof);

        
        $__internal_66b02a7c9220c4b6a9c0f9675e4e95927f57612ff8f7f500f7bd2187b28b3a90->leave($__internal_66b02a7c9220c4b6a9c0f9675e4e95927f57612ff8f7f500f7bd2187b28b3a90_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bbb5eccf855d3305df905d30b102c50e27b6d2bbfd216aa919023fec074406c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bbb5eccf855d3305df905d30b102c50e27b6d2bbfd216aa919023fec074406c->enter($__internal_6bbb5eccf855d3305df905d30b102c50e27b6d2bbfd216aa919023fec074406c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c34f648e2f952061f1e2a533b8d381aad4f84d650916cff36d9261d93a87b03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34f648e2f952061f1e2a533b8d381aad4f84d650916cff36d9261d93a87b03a->enter($__internal_c34f648e2f952061f1e2a533b8d381aad4f84d650916cff36d9261d93a87b03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c34f648e2f952061f1e2a533b8d381aad4f84d650916cff36d9261d93a87b03a->leave($__internal_c34f648e2f952061f1e2a533b8d381aad4f84d650916cff36d9261d93a87b03a_prof);

        
        $__internal_6bbb5eccf855d3305df905d30b102c50e27b6d2bbfd216aa919023fec074406c->leave($__internal_6bbb5eccf855d3305df905d30b102c50e27b6d2bbfd216aa919023fec074406c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11ebcee873e77cf1a82c05c481743450d25729f7497f829dc4b3176696aba47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c33d91bfeea3f084a40223c611b0fd3eb250628a8cc6c47018ce283cd2313a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c33d91bfeea3f084a40223c611b0fd3eb250628a8cc6c47018ce283cd2313a1->enter($__internal_7c33d91bfeea3f084a40223c611b0fd3eb250628a8cc6c47018ce283cd2313a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f15e5410232b239905ee4dec1dd9aaf894d4be4a3280e38f0c53801399d5db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f15e5410232b239905ee4dec1dd9aaf894d4be4a3280e38f0c53801399d5db9->enter($__internal_1f15e5410232b239905ee4dec1dd9aaf894d4be4a3280e38f0c53801399d5db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c33d91bfeea3f084a40223c611b0fd3eb250628a8cc6c47018ce283cd2313a1->leave($__internal_7c33d91bfeea3f084a40223c611b0fd3eb250628a8cc6c47018ce283cd2313a1_prof);

        
        $__internal_1f15e5410232b239905ee4dec1dd9aaf894d4be4a3280e38f0c53801399d5db9->leave($__internal_1f15e5410232b239905ee4dec1dd9aaf894d4be4a3280e38f0c53801399d5db9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac548c9cf3a33c15ce96c217f6a67846abf7c2a7d47aa298aac98072f821ff24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac548c9cf3a33c15ce96c217f6a67846abf7c2a7d47aa298aac98072f821ff24->enter($__internal_ac548c9cf3a33c15ce96c217f6a67846abf7c2a7d47aa298aac98072f821ff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b40f9421b394706f71ac6ada83f3c3313779ff5aae41244cdbf4b16758b63e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40f9421b394706f71ac6ada83f3c3313779ff5aae41244cdbf4b16758b63e5->enter($__internal_2b40f9421b394706f71ac6ada83f3c3313779ff5aae41244cdbf4b16758b63e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2b40f9421b394706f71ac6ada83f3c3313779ff5aae41244cdbf4b16758b63e5->leave($__internal_2b40f9421b394706f71ac6ada83f3c3313779ff5aae41244cdbf4b16758b63e5_prof);

        
        $__internal_ac548c9cf3a33c15ce96c217f6a67846abf7c2a7d47aa298aac98072f821ff24->leave($__internal_ac548c9cf3a33c15ce96c217f6a67846abf7c2a7d47aa298aac98072f821ff24_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f58d79a95994af4b7cf3fdbfce61dd85bea4fa16a5b84f484296b97fad95cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f58d79a95994af4b7cf3fdbfce61dd85bea4fa16a5b84f484296b97fad95cf0->enter($__internal_0f58d79a95994af4b7cf3fdbfce61dd85bea4fa16a5b84f484296b97fad95cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91c388903a85133cdde4989c38a7a3b08b6da26facb5433b34df7741b97be883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c388903a85133cdde4989c38a7a3b08b6da26facb5433b34df7741b97be883->enter($__internal_91c388903a85133cdde4989c38a7a3b08b6da26facb5433b34df7741b97be883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91c388903a85133cdde4989c38a7a3b08b6da26facb5433b34df7741b97be883->leave($__internal_91c388903a85133cdde4989c38a7a3b08b6da26facb5433b34df7741b97be883_prof);

        
        $__internal_0f58d79a95994af4b7cf3fdbfce61dd85bea4fa16a5b84f484296b97fad95cf0->leave($__internal_0f58d79a95994af4b7cf3fdbfce61dd85bea4fa16a5b84f484296b97fad95cf0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c015957e479dd98d49b5d89554b1eebf4c41d9ab5ec09bb84c0aa44fc1ba42d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c015957e479dd98d49b5d89554b1eebf4c41d9ab5ec09bb84c0aa44fc1ba42d7->enter($__internal_c015957e479dd98d49b5d89554b1eebf4c41d9ab5ec09bb84c0aa44fc1ba42d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3730f081511ef84cceb965dbebe66b4eb1cd273ee285a40ebd46333ea0e6471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3730f081511ef84cceb965dbebe66b4eb1cd273ee285a40ebd46333ea0e6471->enter($__internal_c3730f081511ef84cceb965dbebe66b4eb1cd273ee285a40ebd46333ea0e6471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c3730f081511ef84cceb965dbebe66b4eb1cd273ee285a40ebd46333ea0e6471->leave($__internal_c3730f081511ef84cceb965dbebe66b4eb1cd273ee285a40ebd46333ea0e6471_prof);

        
        $__internal_c015957e479dd98d49b5d89554b1eebf4c41d9ab5ec09bb84c0aa44fc1ba42d7->leave($__internal_c015957e479dd98d49b5d89554b1eebf4c41d9ab5ec09bb84c0aa44fc1ba42d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

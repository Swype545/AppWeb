<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e458cef60b0e18302b3d04e05b3804163183e201e8568def1d4e078018d6c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ff47be800482fa284d6e40ef4149693e2ada6ea918af57c35226b247db8b0043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff47be800482fa284d6e40ef4149693e2ada6ea918af57c35226b247db8b0043->enter($__internal_ff47be800482fa284d6e40ef4149693e2ada6ea918af57c35226b247db8b0043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_54ebefb4fda35c04350b39b6bf3705995008db106a992ca7bdb10e0b99a96853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ebefb4fda35c04350b39b6bf3705995008db106a992ca7bdb10e0b99a96853->enter($__internal_54ebefb4fda35c04350b39b6bf3705995008db106a992ca7bdb10e0b99a96853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff47be800482fa284d6e40ef4149693e2ada6ea918af57c35226b247db8b0043->leave($__internal_ff47be800482fa284d6e40ef4149693e2ada6ea918af57c35226b247db8b0043_prof);

        
        $__internal_54ebefb4fda35c04350b39b6bf3705995008db106a992ca7bdb10e0b99a96853->leave($__internal_54ebefb4fda35c04350b39b6bf3705995008db106a992ca7bdb10e0b99a96853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa9d351bc1701f9c0b4255a92a1d594e6f2da93d7c3bbf511da59431d64dee86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9d351bc1701f9c0b4255a92a1d594e6f2da93d7c3bbf511da59431d64dee86->enter($__internal_fa9d351bc1701f9c0b4255a92a1d594e6f2da93d7c3bbf511da59431d64dee86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8487e6b9f8aebb8dfbdfaf62c2f3ebf0bd7632c61cbb3d829b6a94ef79c8bb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8487e6b9f8aebb8dfbdfaf62c2f3ebf0bd7632c61cbb3d829b6a94ef79c8bb8f->enter($__internal_8487e6b9f8aebb8dfbdfaf62c2f3ebf0bd7632c61cbb3d829b6a94ef79c8bb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8487e6b9f8aebb8dfbdfaf62c2f3ebf0bd7632c61cbb3d829b6a94ef79c8bb8f->leave($__internal_8487e6b9f8aebb8dfbdfaf62c2f3ebf0bd7632c61cbb3d829b6a94ef79c8bb8f_prof);

        
        $__internal_fa9d351bc1701f9c0b4255a92a1d594e6f2da93d7c3bbf511da59431d64dee86->leave($__internal_fa9d351bc1701f9c0b4255a92a1d594e6f2da93d7c3bbf511da59431d64dee86_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a75cb8ffddcf566dc2e78be989aaaf970a7c1db2f1bf04cd0de0446c6cb44afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75cb8ffddcf566dc2e78be989aaaf970a7c1db2f1bf04cd0de0446c6cb44afb->enter($__internal_a75cb8ffddcf566dc2e78be989aaaf970a7c1db2f1bf04cd0de0446c6cb44afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ce40cd1f1bbc9a6b099d0117640030879f5918779b44dde5ebe7817b4b3867d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce40cd1f1bbc9a6b099d0117640030879f5918779b44dde5ebe7817b4b3867d->enter($__internal_7ce40cd1f1bbc9a6b099d0117640030879f5918779b44dde5ebe7817b4b3867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ce40cd1f1bbc9a6b099d0117640030879f5918779b44dde5ebe7817b4b3867d->leave($__internal_7ce40cd1f1bbc9a6b099d0117640030879f5918779b44dde5ebe7817b4b3867d_prof);

        
        $__internal_a75cb8ffddcf566dc2e78be989aaaf970a7c1db2f1bf04cd0de0446c6cb44afb->leave($__internal_a75cb8ffddcf566dc2e78be989aaaf970a7c1db2f1bf04cd0de0446c6cb44afb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bffc9485ea376d3c35ba4ec2eb2744ffa809d165cdf4d18de92b9301bb9bde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bffc9485ea376d3c35ba4ec2eb2744ffa809d165cdf4d18de92b9301bb9bde2->enter($__internal_0bffc9485ea376d3c35ba4ec2eb2744ffa809d165cdf4d18de92b9301bb9bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d84bf1da231569517baa3791d9fe4b2a5165f2fbd01f3510249fa24a2cf19ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84bf1da231569517baa3791d9fe4b2a5165f2fbd01f3510249fa24a2cf19ea7->enter($__internal_d84bf1da231569517baa3791d9fe4b2a5165f2fbd01f3510249fa24a2cf19ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d84bf1da231569517baa3791d9fe4b2a5165f2fbd01f3510249fa24a2cf19ea7->leave($__internal_d84bf1da231569517baa3791d9fe4b2a5165f2fbd01f3510249fa24a2cf19ea7_prof);

        
        $__internal_0bffc9485ea376d3c35ba4ec2eb2744ffa809d165cdf4d18de92b9301bb9bde2->leave($__internal_0bffc9485ea376d3c35ba4ec2eb2744ffa809d165cdf4d18de92b9301bb9bde2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c4e29e0b034cd1b24fd67f6d39d3b1b47e01b8ffa0ab0c477fb4fe0e083fec75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_227717bae12d16b8f5778a2630b2ccb4e9bb94a57c7f15619fc108f214f6881b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227717bae12d16b8f5778a2630b2ccb4e9bb94a57c7f15619fc108f214f6881b->enter($__internal_227717bae12d16b8f5778a2630b2ccb4e9bb94a57c7f15619fc108f214f6881b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_57e682087cf01f0f8a8164a245351997219d8408f2d3e07c0878df4bec408bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e682087cf01f0f8a8164a245351997219d8408f2d3e07c0878df4bec408bd0->enter($__internal_57e682087cf01f0f8a8164a245351997219d8408f2d3e07c0878df4bec408bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227717bae12d16b8f5778a2630b2ccb4e9bb94a57c7f15619fc108f214f6881b->leave($__internal_227717bae12d16b8f5778a2630b2ccb4e9bb94a57c7f15619fc108f214f6881b_prof);

        
        $__internal_57e682087cf01f0f8a8164a245351997219d8408f2d3e07c0878df4bec408bd0->leave($__internal_57e682087cf01f0f8a8164a245351997219d8408f2d3e07c0878df4bec408bd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a7e51ba712cedeee9130812dd03cbad62f58434b1384a7cb800e64e08e5deca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7e51ba712cedeee9130812dd03cbad62f58434b1384a7cb800e64e08e5deca->enter($__internal_1a7e51ba712cedeee9130812dd03cbad62f58434b1384a7cb800e64e08e5deca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae295108472be6db214a85303ffd0c871172c89ef7ab0484671a12066b15b110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae295108472be6db214a85303ffd0c871172c89ef7ab0484671a12066b15b110->enter($__internal_ae295108472be6db214a85303ffd0c871172c89ef7ab0484671a12066b15b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae295108472be6db214a85303ffd0c871172c89ef7ab0484671a12066b15b110->leave($__internal_ae295108472be6db214a85303ffd0c871172c89ef7ab0484671a12066b15b110_prof);

        
        $__internal_1a7e51ba712cedeee9130812dd03cbad62f58434b1384a7cb800e64e08e5deca->leave($__internal_1a7e51ba712cedeee9130812dd03cbad62f58434b1384a7cb800e64e08e5deca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f07e865797afe9bac4e9650773900ba570c29c44dc12437c858bc13abb5ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f07e865797afe9bac4e9650773900ba570c29c44dc12437c858bc13abb5ecd->enter($__internal_a9f07e865797afe9bac4e9650773900ba570c29c44dc12437c858bc13abb5ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de6ada8e05d590605a7098227e436a0c6f26e825180a051b6982ab36e07a7610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6ada8e05d590605a7098227e436a0c6f26e825180a051b6982ab36e07a7610->enter($__internal_de6ada8e05d590605a7098227e436a0c6f26e825180a051b6982ab36e07a7610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_de6ada8e05d590605a7098227e436a0c6f26e825180a051b6982ab36e07a7610->leave($__internal_de6ada8e05d590605a7098227e436a0c6f26e825180a051b6982ab36e07a7610_prof);

        
        $__internal_a9f07e865797afe9bac4e9650773900ba570c29c44dc12437c858bc13abb5ecd->leave($__internal_a9f07e865797afe9bac4e9650773900ba570c29c44dc12437c858bc13abb5ecd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

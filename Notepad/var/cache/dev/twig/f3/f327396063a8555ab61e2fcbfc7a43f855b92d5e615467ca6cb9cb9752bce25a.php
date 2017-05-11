<?php

/* base.html.twig */
class __TwigTemplate_97ad37b275166cc4c5cb94d70b94c48618c5d06d63bfb3687da9bc03b8a359ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ea82f530895262754108bc8c19da19e2045257e8546ee1a696bbe1549f8b812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea82f530895262754108bc8c19da19e2045257e8546ee1a696bbe1549f8b812->enter($__internal_7ea82f530895262754108bc8c19da19e2045257e8546ee1a696bbe1549f8b812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fccaf45b82c9325af348fcd4e8fa65a8a1993cc91646edb5fbe76228f1f7d150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccaf45b82c9325af348fcd4e8fa65a8a1993cc91646edb5fbe76228f1f7d150->enter($__internal_fccaf45b82c9325af348fcd4e8fa65a8a1993cc91646edb5fbe76228f1f7d150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7ea82f530895262754108bc8c19da19e2045257e8546ee1a696bbe1549f8b812->leave($__internal_7ea82f530895262754108bc8c19da19e2045257e8546ee1a696bbe1549f8b812_prof);

        
        $__internal_fccaf45b82c9325af348fcd4e8fa65a8a1993cc91646edb5fbe76228f1f7d150->leave($__internal_fccaf45b82c9325af348fcd4e8fa65a8a1993cc91646edb5fbe76228f1f7d150_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fad1c977744c061e66a2c980b07696160a3b88fce6c40222ad452ba280535b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad1c977744c061e66a2c980b07696160a3b88fce6c40222ad452ba280535b01->enter($__internal_fad1c977744c061e66a2c980b07696160a3b88fce6c40222ad452ba280535b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7aaf3c5a24fd3ab8c5597a0bb2a04ea942bd419c43e529383486db9c05199835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaf3c5a24fd3ab8c5597a0bb2a04ea942bd419c43e529383486db9c05199835->enter($__internal_7aaf3c5a24fd3ab8c5597a0bb2a04ea942bd419c43e529383486db9c05199835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7aaf3c5a24fd3ab8c5597a0bb2a04ea942bd419c43e529383486db9c05199835->leave($__internal_7aaf3c5a24fd3ab8c5597a0bb2a04ea942bd419c43e529383486db9c05199835_prof);

        
        $__internal_fad1c977744c061e66a2c980b07696160a3b88fce6c40222ad452ba280535b01->leave($__internal_fad1c977744c061e66a2c980b07696160a3b88fce6c40222ad452ba280535b01_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9de24e62df5643f216d30abbe20f5f3b716e037429953e31519b578d5e3cf33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de24e62df5643f216d30abbe20f5f3b716e037429953e31519b578d5e3cf33a->enter($__internal_9de24e62df5643f216d30abbe20f5f3b716e037429953e31519b578d5e3cf33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f22c99d3684a98daa518ee9ac9ff82a646b631ff4a017318d40d07a7ef0e39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f22c99d3684a98daa518ee9ac9ff82a646b631ff4a017318d40d07a7ef0e39c->enter($__internal_7f22c99d3684a98daa518ee9ac9ff82a646b631ff4a017318d40d07a7ef0e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f22c99d3684a98daa518ee9ac9ff82a646b631ff4a017318d40d07a7ef0e39c->leave($__internal_7f22c99d3684a98daa518ee9ac9ff82a646b631ff4a017318d40d07a7ef0e39c_prof);

        
        $__internal_9de24e62df5643f216d30abbe20f5f3b716e037429953e31519b578d5e3cf33a->leave($__internal_9de24e62df5643f216d30abbe20f5f3b716e037429953e31519b578d5e3cf33a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54a3ba4a2af2ef6c53997c1ff5e4860f9de32cbf7b24429911900e9e6b2ad33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54a3ba4a2af2ef6c53997c1ff5e4860f9de32cbf7b24429911900e9e6b2ad33->enter($__internal_d54a3ba4a2af2ef6c53997c1ff5e4860f9de32cbf7b24429911900e9e6b2ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_303cd787db6baf772f51565e2de73645f0a3a92f13dbf9c635da3f35ea94d6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303cd787db6baf772f51565e2de73645f0a3a92f13dbf9c635da3f35ea94d6fa->enter($__internal_303cd787db6baf772f51565e2de73645f0a3a92f13dbf9c635da3f35ea94d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_303cd787db6baf772f51565e2de73645f0a3a92f13dbf9c635da3f35ea94d6fa->leave($__internal_303cd787db6baf772f51565e2de73645f0a3a92f13dbf9c635da3f35ea94d6fa_prof);

        
        $__internal_d54a3ba4a2af2ef6c53997c1ff5e4860f9de32cbf7b24429911900e9e6b2ad33->leave($__internal_d54a3ba4a2af2ef6c53997c1ff5e4860f9de32cbf7b24429911900e9e6b2ad33_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0922929312faf2e5dbbbf96b0f39ccf39a8f2ead871f1deceed9aa1309b9c545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0922929312faf2e5dbbbf96b0f39ccf39a8f2ead871f1deceed9aa1309b9c545->enter($__internal_0922929312faf2e5dbbbf96b0f39ccf39a8f2ead871f1deceed9aa1309b9c545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b28e260684db1b303ab4dd873024a7c9a78907b988476d300cd5884f13070a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b28e260684db1b303ab4dd873024a7c9a78907b988476d300cd5884f13070a1->enter($__internal_9b28e260684db1b303ab4dd873024a7c9a78907b988476d300cd5884f13070a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b28e260684db1b303ab4dd873024a7c9a78907b988476d300cd5884f13070a1->leave($__internal_9b28e260684db1b303ab4dd873024a7c9a78907b988476d300cd5884f13070a1_prof);

        
        $__internal_0922929312faf2e5dbbbf96b0f39ccf39a8f2ead871f1deceed9aa1309b9c545->leave($__internal_0922929312faf2e5dbbbf96b0f39ccf39a8f2ead871f1deceed9aa1309b9c545_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\app\\Resources\\views\\base.html.twig");
    }
}

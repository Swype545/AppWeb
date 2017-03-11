<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
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
        $__internal_fcca3c8e709d24a86b33bd9cc83aa0122bb21f227801205d7c0dd92a326f3914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcca3c8e709d24a86b33bd9cc83aa0122bb21f227801205d7c0dd92a326f3914->enter($__internal_fcca3c8e709d24a86b33bd9cc83aa0122bb21f227801205d7c0dd92a326f3914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_32ff3c1a75d6b85fc9415f6fdf5910b8ad38a4616dd59ad5b5d8b068812b2873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ff3c1a75d6b85fc9415f6fdf5910b8ad38a4616dd59ad5b5d8b068812b2873->enter($__internal_32ff3c1a75d6b85fc9415f6fdf5910b8ad38a4616dd59ad5b5d8b068812b2873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fcca3c8e709d24a86b33bd9cc83aa0122bb21f227801205d7c0dd92a326f3914->leave($__internal_fcca3c8e709d24a86b33bd9cc83aa0122bb21f227801205d7c0dd92a326f3914_prof);

        
        $__internal_32ff3c1a75d6b85fc9415f6fdf5910b8ad38a4616dd59ad5b5d8b068812b2873->leave($__internal_32ff3c1a75d6b85fc9415f6fdf5910b8ad38a4616dd59ad5b5d8b068812b2873_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d372143880ce979ede0e0ae2bc7bb67f5e7d9268dc3abaefbc229f220b54c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d372143880ce979ede0e0ae2bc7bb67f5e7d9268dc3abaefbc229f220b54c92->enter($__internal_9d372143880ce979ede0e0ae2bc7bb67f5e7d9268dc3abaefbc229f220b54c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bffa5d33dbb16991917b591aaa3b3cde49929b05b309a9bf84d6461e084b095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bffa5d33dbb16991917b591aaa3b3cde49929b05b309a9bf84d6461e084b095->enter($__internal_1bffa5d33dbb16991917b591aaa3b3cde49929b05b309a9bf84d6461e084b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bffa5d33dbb16991917b591aaa3b3cde49929b05b309a9bf84d6461e084b095->leave($__internal_1bffa5d33dbb16991917b591aaa3b3cde49929b05b309a9bf84d6461e084b095_prof);

        
        $__internal_9d372143880ce979ede0e0ae2bc7bb67f5e7d9268dc3abaefbc229f220b54c92->leave($__internal_9d372143880ce979ede0e0ae2bc7bb67f5e7d9268dc3abaefbc229f220b54c92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c8744430be1670905293ff4417d5ae47fd58cabb2f286fe19e689e535250ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8744430be1670905293ff4417d5ae47fd58cabb2f286fe19e689e535250ccd->enter($__internal_0c8744430be1670905293ff4417d5ae47fd58cabb2f286fe19e689e535250ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_908cf171e4797d9005ad6b41f65d0dbfaa63a8105ae8a923d4de9be2a2fc772e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908cf171e4797d9005ad6b41f65d0dbfaa63a8105ae8a923d4de9be2a2fc772e->enter($__internal_908cf171e4797d9005ad6b41f65d0dbfaa63a8105ae8a923d4de9be2a2fc772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_908cf171e4797d9005ad6b41f65d0dbfaa63a8105ae8a923d4de9be2a2fc772e->leave($__internal_908cf171e4797d9005ad6b41f65d0dbfaa63a8105ae8a923d4de9be2a2fc772e_prof);

        
        $__internal_0c8744430be1670905293ff4417d5ae47fd58cabb2f286fe19e689e535250ccd->leave($__internal_0c8744430be1670905293ff4417d5ae47fd58cabb2f286fe19e689e535250ccd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dfc6d654e891421d1b1b1e63c5b534630b3b3a34e2e0775ee0578b70df5deec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dfc6d654e891421d1b1b1e63c5b534630b3b3a34e2e0775ee0578b70df5deec->enter($__internal_4dfc6d654e891421d1b1b1e63c5b534630b3b3a34e2e0775ee0578b70df5deec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8ae26c9fe5f0b82f0b0f1c8662c735d6f0dd6958e3a9ad3bc02ceb17b351f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ae26c9fe5f0b82f0b0f1c8662c735d6f0dd6958e3a9ad3bc02ceb17b351f37->enter($__internal_e8ae26c9fe5f0b82f0b0f1c8662c735d6f0dd6958e3a9ad3bc02ceb17b351f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8ae26c9fe5f0b82f0b0f1c8662c735d6f0dd6958e3a9ad3bc02ceb17b351f37->leave($__internal_e8ae26c9fe5f0b82f0b0f1c8662c735d6f0dd6958e3a9ad3bc02ceb17b351f37_prof);

        
        $__internal_4dfc6d654e891421d1b1b1e63c5b534630b3b3a34e2e0775ee0578b70df5deec->leave($__internal_4dfc6d654e891421d1b1b1e63c5b534630b3b3a34e2e0775ee0578b70df5deec_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed9fe87fa3dcf7fa4ca1fb607a52f3f34a2cb2a681c93145db47333b35e28cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9fe87fa3dcf7fa4ca1fb607a52f3f34a2cb2a681c93145db47333b35e28cf8->enter($__internal_ed9fe87fa3dcf7fa4ca1fb607a52f3f34a2cb2a681c93145db47333b35e28cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c380822b7718e00b1a74bd32fe0458174cf51125e697d2e0da52f127c6a8087d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c380822b7718e00b1a74bd32fe0458174cf51125e697d2e0da52f127c6a8087d->enter($__internal_c380822b7718e00b1a74bd32fe0458174cf51125e697d2e0da52f127c6a8087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c380822b7718e00b1a74bd32fe0458174cf51125e697d2e0da52f127c6a8087d->leave($__internal_c380822b7718e00b1a74bd32fe0458174cf51125e697d2e0da52f127c6a8087d_prof);

        
        $__internal_ed9fe87fa3dcf7fa4ca1fb607a52f3f34a2cb2a681c93145db47333b35e28cf8->leave($__internal_ed9fe87fa3dcf7fa4ca1fb607a52f3f34a2cb2a681c93145db47333b35e28cf8_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\app\\Resources\\views\\base.html.twig");
    }
}

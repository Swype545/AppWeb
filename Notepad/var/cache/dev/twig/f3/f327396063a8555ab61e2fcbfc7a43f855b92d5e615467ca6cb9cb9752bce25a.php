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
        $__internal_88649b170311d948f850a4dbd2726eb83b7bbe8d0aa2324020a168f12b9f45bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88649b170311d948f850a4dbd2726eb83b7bbe8d0aa2324020a168f12b9f45bc->enter($__internal_88649b170311d948f850a4dbd2726eb83b7bbe8d0aa2324020a168f12b9f45bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5b18fe76e81bb92af583c763d15bb9b0bf7d2d9a3a42b2900c6fac0257f2fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b18fe76e81bb92af583c763d15bb9b0bf7d2d9a3a42b2900c6fac0257f2fe6b->enter($__internal_5b18fe76e81bb92af583c763d15bb9b0bf7d2d9a3a42b2900c6fac0257f2fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_88649b170311d948f850a4dbd2726eb83b7bbe8d0aa2324020a168f12b9f45bc->leave($__internal_88649b170311d948f850a4dbd2726eb83b7bbe8d0aa2324020a168f12b9f45bc_prof);

        
        $__internal_5b18fe76e81bb92af583c763d15bb9b0bf7d2d9a3a42b2900c6fac0257f2fe6b->leave($__internal_5b18fe76e81bb92af583c763d15bb9b0bf7d2d9a3a42b2900c6fac0257f2fe6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcfd86e67d61150daa05e14ff5a2f6b48f9b8c0fdd8f9181bbac348c097b7492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfd86e67d61150daa05e14ff5a2f6b48f9b8c0fdd8f9181bbac348c097b7492->enter($__internal_dcfd86e67d61150daa05e14ff5a2f6b48f9b8c0fdd8f9181bbac348c097b7492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7b98aa7d7e94381b046d21692f3dd54724a312469408739bdb0e7f9320e06bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b98aa7d7e94381b046d21692f3dd54724a312469408739bdb0e7f9320e06bd->enter($__internal_c7b98aa7d7e94381b046d21692f3dd54724a312469408739bdb0e7f9320e06bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7b98aa7d7e94381b046d21692f3dd54724a312469408739bdb0e7f9320e06bd->leave($__internal_c7b98aa7d7e94381b046d21692f3dd54724a312469408739bdb0e7f9320e06bd_prof);

        
        $__internal_dcfd86e67d61150daa05e14ff5a2f6b48f9b8c0fdd8f9181bbac348c097b7492->leave($__internal_dcfd86e67d61150daa05e14ff5a2f6b48f9b8c0fdd8f9181bbac348c097b7492_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58dae1f3102b930ffa4107688a4b394cb418b5fbef3e9c518f6734777cbb2847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58dae1f3102b930ffa4107688a4b394cb418b5fbef3e9c518f6734777cbb2847->enter($__internal_58dae1f3102b930ffa4107688a4b394cb418b5fbef3e9c518f6734777cbb2847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2857c0a11eea8a0e882eafe812439d1e4302652468e158c3927abba41eb583e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2857c0a11eea8a0e882eafe812439d1e4302652468e158c3927abba41eb583e->enter($__internal_d2857c0a11eea8a0e882eafe812439d1e4302652468e158c3927abba41eb583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d2857c0a11eea8a0e882eafe812439d1e4302652468e158c3927abba41eb583e->leave($__internal_d2857c0a11eea8a0e882eafe812439d1e4302652468e158c3927abba41eb583e_prof);

        
        $__internal_58dae1f3102b930ffa4107688a4b394cb418b5fbef3e9c518f6734777cbb2847->leave($__internal_58dae1f3102b930ffa4107688a4b394cb418b5fbef3e9c518f6734777cbb2847_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_760462bc65bb8a4d176a8303fa5a33339575bcb8c374ce9679f633bbaa2a9cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760462bc65bb8a4d176a8303fa5a33339575bcb8c374ce9679f633bbaa2a9cbd->enter($__internal_760462bc65bb8a4d176a8303fa5a33339575bcb8c374ce9679f633bbaa2a9cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4330913617dad8c5a0fab946b85e6041d849e33d9bbcd9f7fbdb233ddd98b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4330913617dad8c5a0fab946b85e6041d849e33d9bbcd9f7fbdb233ddd98b82->enter($__internal_f4330913617dad8c5a0fab946b85e6041d849e33d9bbcd9f7fbdb233ddd98b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4330913617dad8c5a0fab946b85e6041d849e33d9bbcd9f7fbdb233ddd98b82->leave($__internal_f4330913617dad8c5a0fab946b85e6041d849e33d9bbcd9f7fbdb233ddd98b82_prof);

        
        $__internal_760462bc65bb8a4d176a8303fa5a33339575bcb8c374ce9679f633bbaa2a9cbd->leave($__internal_760462bc65bb8a4d176a8303fa5a33339575bcb8c374ce9679f633bbaa2a9cbd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49c700f564fe2db1964957fc1cfd5522b32691ff05b89530c56ddfe39dfefe96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c700f564fe2db1964957fc1cfd5522b32691ff05b89530c56ddfe39dfefe96->enter($__internal_49c700f564fe2db1964957fc1cfd5522b32691ff05b89530c56ddfe39dfefe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_61f51691ab4501431f819d46494d887771103c260d64a5f5e3ca8ce18f257c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f51691ab4501431f819d46494d887771103c260d64a5f5e3ca8ce18f257c94->enter($__internal_61f51691ab4501431f819d46494d887771103c260d64a5f5e3ca8ce18f257c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_61f51691ab4501431f819d46494d887771103c260d64a5f5e3ca8ce18f257c94->leave($__internal_61f51691ab4501431f819d46494d887771103c260d64a5f5e3ca8ce18f257c94_prof);

        
        $__internal_49c700f564fe2db1964957fc1cfd5522b32691ff05b89530c56ddfe39dfefe96->leave($__internal_49c700f564fe2db1964957fc1cfd5522b32691ff05b89530c56ddfe39dfefe96_prof);

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
", "base.html.twig", "C:\\wamp\\www\\AppWeb\\AppWeb\\AppWeb\\Notepad\\app\\Resources\\views\\base.html.twig");
    }
}

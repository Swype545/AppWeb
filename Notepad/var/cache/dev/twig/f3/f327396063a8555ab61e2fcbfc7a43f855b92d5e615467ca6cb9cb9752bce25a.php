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
        $__internal_2f06e9093fab700336589bda7985ad9a115c0ac4b7313ef88ab6c12dffe5fc10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f06e9093fab700336589bda7985ad9a115c0ac4b7313ef88ab6c12dffe5fc10->enter($__internal_2f06e9093fab700336589bda7985ad9a115c0ac4b7313ef88ab6c12dffe5fc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_24043dd4ee1559c3fbfbc3c2982b525a3c1bbb0982f14d5505318a927780f6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24043dd4ee1559c3fbfbc3c2982b525a3c1bbb0982f14d5505318a927780f6ec->enter($__internal_24043dd4ee1559c3fbfbc3c2982b525a3c1bbb0982f14d5505318a927780f6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2f06e9093fab700336589bda7985ad9a115c0ac4b7313ef88ab6c12dffe5fc10->leave($__internal_2f06e9093fab700336589bda7985ad9a115c0ac4b7313ef88ab6c12dffe5fc10_prof);

        
        $__internal_24043dd4ee1559c3fbfbc3c2982b525a3c1bbb0982f14d5505318a927780f6ec->leave($__internal_24043dd4ee1559c3fbfbc3c2982b525a3c1bbb0982f14d5505318a927780f6ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60bbcf37f6605a4b29e0d401d24e81acd6a58e599ae792ac6a5d395fd2662bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bbcf37f6605a4b29e0d401d24e81acd6a58e599ae792ac6a5d395fd2662bce->enter($__internal_60bbcf37f6605a4b29e0d401d24e81acd6a58e599ae792ac6a5d395fd2662bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57fc49154ffb621bcaa49b23f6038485dd711d7998c7d9f2da4e507cd33053a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fc49154ffb621bcaa49b23f6038485dd711d7998c7d9f2da4e507cd33053a1->enter($__internal_57fc49154ffb621bcaa49b23f6038485dd711d7998c7d9f2da4e507cd33053a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57fc49154ffb621bcaa49b23f6038485dd711d7998c7d9f2da4e507cd33053a1->leave($__internal_57fc49154ffb621bcaa49b23f6038485dd711d7998c7d9f2da4e507cd33053a1_prof);

        
        $__internal_60bbcf37f6605a4b29e0d401d24e81acd6a58e599ae792ac6a5d395fd2662bce->leave($__internal_60bbcf37f6605a4b29e0d401d24e81acd6a58e599ae792ac6a5d395fd2662bce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4656a9db6f700bb28fac4fdfca962679700222297c25160526f668dce82b7b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4656a9db6f700bb28fac4fdfca962679700222297c25160526f668dce82b7b9f->enter($__internal_4656a9db6f700bb28fac4fdfca962679700222297c25160526f668dce82b7b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c2626065ab0831aad5d2a2b8231ecd52f2604d0bb494f6f891085cdf07c924db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2626065ab0831aad5d2a2b8231ecd52f2604d0bb494f6f891085cdf07c924db->enter($__internal_c2626065ab0831aad5d2a2b8231ecd52f2604d0bb494f6f891085cdf07c924db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2626065ab0831aad5d2a2b8231ecd52f2604d0bb494f6f891085cdf07c924db->leave($__internal_c2626065ab0831aad5d2a2b8231ecd52f2604d0bb494f6f891085cdf07c924db_prof);

        
        $__internal_4656a9db6f700bb28fac4fdfca962679700222297c25160526f668dce82b7b9f->leave($__internal_4656a9db6f700bb28fac4fdfca962679700222297c25160526f668dce82b7b9f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62d005e0bfb3e589d2b86d75e2d5a3866b10828e775a7b824cdb021ba865f8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d005e0bfb3e589d2b86d75e2d5a3866b10828e775a7b824cdb021ba865f8e1->enter($__internal_62d005e0bfb3e589d2b86d75e2d5a3866b10828e775a7b824cdb021ba865f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa15d00d0fbcb566d52ef6e7bb86fb165ccadc7b63eb988366e4051f8906739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa15d00d0fbcb566d52ef6e7bb86fb165ccadc7b63eb988366e4051f8906739->enter($__internal_1fa15d00d0fbcb566d52ef6e7bb86fb165ccadc7b63eb988366e4051f8906739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1fa15d00d0fbcb566d52ef6e7bb86fb165ccadc7b63eb988366e4051f8906739->leave($__internal_1fa15d00d0fbcb566d52ef6e7bb86fb165ccadc7b63eb988366e4051f8906739_prof);

        
        $__internal_62d005e0bfb3e589d2b86d75e2d5a3866b10828e775a7b824cdb021ba865f8e1->leave($__internal_62d005e0bfb3e589d2b86d75e2d5a3866b10828e775a7b824cdb021ba865f8e1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfdf5e9b3d180578e12c61ab57853136cf2e9519a7f7be990f65303b317d512d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdf5e9b3d180578e12c61ab57853136cf2e9519a7f7be990f65303b317d512d->enter($__internal_cfdf5e9b3d180578e12c61ab57853136cf2e9519a7f7be990f65303b317d512d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f33344a0e2bd3c9882226b025a5a63110ce813e5ebea3460e4fc6172e19f72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f33344a0e2bd3c9882226b025a5a63110ce813e5ebea3460e4fc6172e19f72d->enter($__internal_7f33344a0e2bd3c9882226b025a5a63110ce813e5ebea3460e4fc6172e19f72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f33344a0e2bd3c9882226b025a5a63110ce813e5ebea3460e4fc6172e19f72d->leave($__internal_7f33344a0e2bd3c9882226b025a5a63110ce813e5ebea3460e4fc6172e19f72d_prof);

        
        $__internal_cfdf5e9b3d180578e12c61ab57853136cf2e9519a7f7be990f65303b317d512d->leave($__internal_cfdf5e9b3d180578e12c61ab57853136cf2e9519a7f7be990f65303b317d512d_prof);

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

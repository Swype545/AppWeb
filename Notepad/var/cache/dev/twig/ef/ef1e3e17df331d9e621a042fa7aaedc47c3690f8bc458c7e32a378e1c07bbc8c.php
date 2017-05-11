<?php

/* ::base.html.twig */
class __TwigTemplate_b976f460ddc8cffce8c268c3ece254eda36ce735938fecf191e7a5d3301c746c extends Twig_Template
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
        $__internal_e4207bf001312b1f23024393a27d1deb563c34f41666829ed5beefc38112c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4207bf001312b1f23024393a27d1deb563c34f41666829ed5beefc38112c471->enter($__internal_e4207bf001312b1f23024393a27d1deb563c34f41666829ed5beefc38112c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0d1fd7a877f3af0c5d5a0342982047e36f4e0351a6b16b764194d93c85336bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1fd7a877f3af0c5d5a0342982047e36f4e0351a6b16b764194d93c85336bf2->enter($__internal_0d1fd7a877f3af0c5d5a0342982047e36f4e0351a6b16b764194d93c85336bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e4207bf001312b1f23024393a27d1deb563c34f41666829ed5beefc38112c471->leave($__internal_e4207bf001312b1f23024393a27d1deb563c34f41666829ed5beefc38112c471_prof);

        
        $__internal_0d1fd7a877f3af0c5d5a0342982047e36f4e0351a6b16b764194d93c85336bf2->leave($__internal_0d1fd7a877f3af0c5d5a0342982047e36f4e0351a6b16b764194d93c85336bf2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dd4f7b42afef05fec5b32e5cb4c2eb0a77624be6e2a4f46045536727948502c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd4f7b42afef05fec5b32e5cb4c2eb0a77624be6e2a4f46045536727948502c->enter($__internal_9dd4f7b42afef05fec5b32e5cb4c2eb0a77624be6e2a4f46045536727948502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc3935e6bc685162b5e8cf43833524dc060beb6c080e31f9cfe6faec0039b63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3935e6bc685162b5e8cf43833524dc060beb6c080e31f9cfe6faec0039b63f->enter($__internal_bc3935e6bc685162b5e8cf43833524dc060beb6c080e31f9cfe6faec0039b63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc3935e6bc685162b5e8cf43833524dc060beb6c080e31f9cfe6faec0039b63f->leave($__internal_bc3935e6bc685162b5e8cf43833524dc060beb6c080e31f9cfe6faec0039b63f_prof);

        
        $__internal_9dd4f7b42afef05fec5b32e5cb4c2eb0a77624be6e2a4f46045536727948502c->leave($__internal_9dd4f7b42afef05fec5b32e5cb4c2eb0a77624be6e2a4f46045536727948502c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d90a1c58dc7b838d37edd3c2413456e5d0556d8ac716c1a606c4d09972dafde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90a1c58dc7b838d37edd3c2413456e5d0556d8ac716c1a606c4d09972dafde1->enter($__internal_d90a1c58dc7b838d37edd3c2413456e5d0556d8ac716c1a606c4d09972dafde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c521b39d0bd68c012101277bb654a1b28a8f46d384b3d8b3678b2f8b2e5870f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c521b39d0bd68c012101277bb654a1b28a8f46d384b3d8b3678b2f8b2e5870f3->enter($__internal_c521b39d0bd68c012101277bb654a1b28a8f46d384b3d8b3678b2f8b2e5870f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c521b39d0bd68c012101277bb654a1b28a8f46d384b3d8b3678b2f8b2e5870f3->leave($__internal_c521b39d0bd68c012101277bb654a1b28a8f46d384b3d8b3678b2f8b2e5870f3_prof);

        
        $__internal_d90a1c58dc7b838d37edd3c2413456e5d0556d8ac716c1a606c4d09972dafde1->leave($__internal_d90a1c58dc7b838d37edd3c2413456e5d0556d8ac716c1a606c4d09972dafde1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4285d2d475d1d25736d26a3e2eff8c71bcce48b4263a4e2492c8ef1d92f8c0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4285d2d475d1d25736d26a3e2eff8c71bcce48b4263a4e2492c8ef1d92f8c0da->enter($__internal_4285d2d475d1d25736d26a3e2eff8c71bcce48b4263a4e2492c8ef1d92f8c0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a89768bddf4a448eec3dc1325da611c93fc97c9a5fea5440d26054a7c9eacf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89768bddf4a448eec3dc1325da611c93fc97c9a5fea5440d26054a7c9eacf0b->enter($__internal_a89768bddf4a448eec3dc1325da611c93fc97c9a5fea5440d26054a7c9eacf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a89768bddf4a448eec3dc1325da611c93fc97c9a5fea5440d26054a7c9eacf0b->leave($__internal_a89768bddf4a448eec3dc1325da611c93fc97c9a5fea5440d26054a7c9eacf0b_prof);

        
        $__internal_4285d2d475d1d25736d26a3e2eff8c71bcce48b4263a4e2492c8ef1d92f8c0da->leave($__internal_4285d2d475d1d25736d26a3e2eff8c71bcce48b4263a4e2492c8ef1d92f8c0da_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6d8be7e34b3abfc659ca3e3dbf042b3b93d661be461a2409370ce03402a48c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d8be7e34b3abfc659ca3e3dbf042b3b93d661be461a2409370ce03402a48c3->enter($__internal_d6d8be7e34b3abfc659ca3e3dbf042b3b93d661be461a2409370ce03402a48c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af061e896d4f54d8d4c1c764db374058677635ed445fe53fb874c7af71e4f7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af061e896d4f54d8d4c1c764db374058677635ed445fe53fb874c7af71e4f7ba->enter($__internal_af061e896d4f54d8d4c1c764db374058677635ed445fe53fb874c7af71e4f7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af061e896d4f54d8d4c1c764db374058677635ed445fe53fb874c7af71e4f7ba->leave($__internal_af061e896d4f54d8d4c1c764db374058677635ed445fe53fb874c7af71e4f7ba_prof);

        
        $__internal_d6d8be7e34b3abfc659ca3e3dbf042b3b93d661be461a2409370ce03402a48c3->leave($__internal_d6d8be7e34b3abfc659ca3e3dbf042b3b93d661be461a2409370ce03402a48c3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\app/Resources\\views/base.html.twig");
    }
}

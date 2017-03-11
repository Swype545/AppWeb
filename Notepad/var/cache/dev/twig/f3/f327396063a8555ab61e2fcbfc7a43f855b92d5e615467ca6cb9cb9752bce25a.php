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
        $__internal_094105e30a23549b9ab58f541c9ccd9270de63405d4a5e65073bea3dd8185a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094105e30a23549b9ab58f541c9ccd9270de63405d4a5e65073bea3dd8185a27->enter($__internal_094105e30a23549b9ab58f541c9ccd9270de63405d4a5e65073bea3dd8185a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b1ddeb53f309bfb7d9bdaf6d0ffdd0c75ac357ca583490beec03709eae939906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ddeb53f309bfb7d9bdaf6d0ffdd0c75ac357ca583490beec03709eae939906->enter($__internal_b1ddeb53f309bfb7d9bdaf6d0ffdd0c75ac357ca583490beec03709eae939906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_094105e30a23549b9ab58f541c9ccd9270de63405d4a5e65073bea3dd8185a27->leave($__internal_094105e30a23549b9ab58f541c9ccd9270de63405d4a5e65073bea3dd8185a27_prof);

        
        $__internal_b1ddeb53f309bfb7d9bdaf6d0ffdd0c75ac357ca583490beec03709eae939906->leave($__internal_b1ddeb53f309bfb7d9bdaf6d0ffdd0c75ac357ca583490beec03709eae939906_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6a922906109c1501e287498b3095b8197a033e5ff6ab3d0bfce5d8afb9c4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6a922906109c1501e287498b3095b8197a033e5ff6ab3d0bfce5d8afb9c4af->enter($__internal_5e6a922906109c1501e287498b3095b8197a033e5ff6ab3d0bfce5d8afb9c4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b078a4bd877f89a172838aafcc4f2fac59acffd8a4867474336b700a87faf0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b078a4bd877f89a172838aafcc4f2fac59acffd8a4867474336b700a87faf0e5->enter($__internal_b078a4bd877f89a172838aafcc4f2fac59acffd8a4867474336b700a87faf0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b078a4bd877f89a172838aafcc4f2fac59acffd8a4867474336b700a87faf0e5->leave($__internal_b078a4bd877f89a172838aafcc4f2fac59acffd8a4867474336b700a87faf0e5_prof);

        
        $__internal_5e6a922906109c1501e287498b3095b8197a033e5ff6ab3d0bfce5d8afb9c4af->leave($__internal_5e6a922906109c1501e287498b3095b8197a033e5ff6ab3d0bfce5d8afb9c4af_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d124189236a5caa7a8c66c5a8253f10994c4e26f95fbcb7f9498e1ef6c08897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d124189236a5caa7a8c66c5a8253f10994c4e26f95fbcb7f9498e1ef6c08897->enter($__internal_0d124189236a5caa7a8c66c5a8253f10994c4e26f95fbcb7f9498e1ef6c08897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eeca8422297ce67220a44a05c607d39d2fa9725d5f9d72851d19603028e3de83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeca8422297ce67220a44a05c607d39d2fa9725d5f9d72851d19603028e3de83->enter($__internal_eeca8422297ce67220a44a05c607d39d2fa9725d5f9d72851d19603028e3de83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eeca8422297ce67220a44a05c607d39d2fa9725d5f9d72851d19603028e3de83->leave($__internal_eeca8422297ce67220a44a05c607d39d2fa9725d5f9d72851d19603028e3de83_prof);

        
        $__internal_0d124189236a5caa7a8c66c5a8253f10994c4e26f95fbcb7f9498e1ef6c08897->leave($__internal_0d124189236a5caa7a8c66c5a8253f10994c4e26f95fbcb7f9498e1ef6c08897_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c1b3e26973172a16a747b73a5a6589d1523371132b7a5c11de3dab35001ae20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1b3e26973172a16a747b73a5a6589d1523371132b7a5c11de3dab35001ae20->enter($__internal_1c1b3e26973172a16a747b73a5a6589d1523371132b7a5c11de3dab35001ae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbf6a938edc6357ecdf75cdca33817ea14353ce3cbef8890981de30d73dca149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf6a938edc6357ecdf75cdca33817ea14353ce3cbef8890981de30d73dca149->enter($__internal_bbf6a938edc6357ecdf75cdca33817ea14353ce3cbef8890981de30d73dca149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bbf6a938edc6357ecdf75cdca33817ea14353ce3cbef8890981de30d73dca149->leave($__internal_bbf6a938edc6357ecdf75cdca33817ea14353ce3cbef8890981de30d73dca149_prof);

        
        $__internal_1c1b3e26973172a16a747b73a5a6589d1523371132b7a5c11de3dab35001ae20->leave($__internal_1c1b3e26973172a16a747b73a5a6589d1523371132b7a5c11de3dab35001ae20_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6eeed61ebb2951373250e3bf5d1fbd0331bf041be8e79d3e1c4d829018ddbaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eeed61ebb2951373250e3bf5d1fbd0331bf041be8e79d3e1c4d829018ddbaca->enter($__internal_6eeed61ebb2951373250e3bf5d1fbd0331bf041be8e79d3e1c4d829018ddbaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b9ca87281fa3857bee162e8cb60624ba7bee02b0748e51ef12d7069151bdaf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ca87281fa3857bee162e8cb60624ba7bee02b0748e51ef12d7069151bdaf34->enter($__internal_b9ca87281fa3857bee162e8cb60624ba7bee02b0748e51ef12d7069151bdaf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9ca87281fa3857bee162e8cb60624ba7bee02b0748e51ef12d7069151bdaf34->leave($__internal_b9ca87281fa3857bee162e8cb60624ba7bee02b0748e51ef12d7069151bdaf34_prof);

        
        $__internal_6eeed61ebb2951373250e3bf5d1fbd0331bf041be8e79d3e1c4d829018ddbaca->leave($__internal_6eeed61ebb2951373250e3bf5d1fbd0331bf041be8e79d3e1c4d829018ddbaca_prof);

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

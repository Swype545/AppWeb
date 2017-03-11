<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e4dcba22589f30a644501bb35a0ad6bd96a0b1c0facdc8e31b3d55ced51fd8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b24d60764450b103d4d2e39e00bbeea154fae5d1c34820ef0e8df35340177366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24d60764450b103d4d2e39e00bbeea154fae5d1c34820ef0e8df35340177366->enter($__internal_b24d60764450b103d4d2e39e00bbeea154fae5d1c34820ef0e8df35340177366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_2b67b2db423d8cf85ac43bda0ef879993d0cc1cd4bacaf6f9ec8264c22f9b716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b67b2db423d8cf85ac43bda0ef879993d0cc1cd4bacaf6f9ec8264c22f9b716->enter($__internal_2b67b2db423d8cf85ac43bda0ef879993d0cc1cd4bacaf6f9ec8264c22f9b716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b24d60764450b103d4d2e39e00bbeea154fae5d1c34820ef0e8df35340177366->leave($__internal_b24d60764450b103d4d2e39e00bbeea154fae5d1c34820ef0e8df35340177366_prof);

        
        $__internal_2b67b2db423d8cf85ac43bda0ef879993d0cc1cd4bacaf6f9ec8264c22f9b716->leave($__internal_2b67b2db423d8cf85ac43bda0ef879993d0cc1cd4bacaf6f9ec8264c22f9b716_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

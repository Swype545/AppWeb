<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_59fdf75b82525fcd92cdf63150ec453ca42a7d9655c7235e519b4fb6407831bd extends Twig_Template
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
        $__internal_ce90bcf768c1efebe7de1b3968c300a4eee97076d602b1af9c639a4bf32e90b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce90bcf768c1efebe7de1b3968c300a4eee97076d602b1af9c639a4bf32e90b3->enter($__internal_ce90bcf768c1efebe7de1b3968c300a4eee97076d602b1af9c639a4bf32e90b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_a0835978f874e19270f5ca370a62be3f61250d4d699584a7b81e7a0f6cde08c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0835978f874e19270f5ca370a62be3f61250d4d699584a7b81e7a0f6cde08c5->enter($__internal_a0835978f874e19270f5ca370a62be3f61250d4d699584a7b81e7a0f6cde08c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ce90bcf768c1efebe7de1b3968c300a4eee97076d602b1af9c639a4bf32e90b3->leave($__internal_ce90bcf768c1efebe7de1b3968c300a4eee97076d602b1af9c639a4bf32e90b3_prof);

        
        $__internal_a0835978f874e19270f5ca370a62be3f61250d4d699584a7b81e7a0f6cde08c5->leave($__internal_a0835978f874e19270f5ca370a62be3f61250d4d699584a7b81e7a0f6cde08c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}

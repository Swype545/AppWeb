<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_97a7b4e6a917162a50765234b66c574babb971ab6b89bc306b3921d4cd5a0a7f extends Twig_Template
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
        $__internal_8b8db129c331b36b6ea4211af11b060818b290e69b7bb5821bc0b19ea338ddb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8db129c331b36b6ea4211af11b060818b290e69b7bb5821bc0b19ea338ddb1->enter($__internal_8b8db129c331b36b6ea4211af11b060818b290e69b7bb5821bc0b19ea338ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_d702a2610f38f1abe8abb38f94f2781f92bf8e7efa897ac23736dc028e8bf512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d702a2610f38f1abe8abb38f94f2781f92bf8e7efa897ac23736dc028e8bf512->enter($__internal_d702a2610f38f1abe8abb38f94f2781f92bf8e7efa897ac23736dc028e8bf512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8b8db129c331b36b6ea4211af11b060818b290e69b7bb5821bc0b19ea338ddb1->leave($__internal_8b8db129c331b36b6ea4211af11b060818b290e69b7bb5821bc0b19ea338ddb1_prof);

        
        $__internal_d702a2610f38f1abe8abb38f94f2781f92bf8e7efa897ac23736dc028e8bf512->leave($__internal_d702a2610f38f1abe8abb38f94f2781f92bf8e7efa897ac23736dc028e8bf512_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

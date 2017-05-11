<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a09ac16c33c6cb8f84299c79465d10c8173353e1888e99847999aeca8b21d1d5 extends Twig_Template
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
        $__internal_bdaba074ea0884a60090e68d50b8c5ee9574ac9eea8bf2145063ea5c4391b85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdaba074ea0884a60090e68d50b8c5ee9574ac9eea8bf2145063ea5c4391b85c->enter($__internal_bdaba074ea0884a60090e68d50b8c5ee9574ac9eea8bf2145063ea5c4391b85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_7843eddc0cc4aa27b52e0b4d9d8b4557aab1ded0b76f16b479c048c9428b181b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7843eddc0cc4aa27b52e0b4d9d8b4557aab1ded0b76f16b479c048c9428b181b->enter($__internal_7843eddc0cc4aa27b52e0b4d9d8b4557aab1ded0b76f16b479c048c9428b181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_bdaba074ea0884a60090e68d50b8c5ee9574ac9eea8bf2145063ea5c4391b85c->leave($__internal_bdaba074ea0884a60090e68d50b8c5ee9574ac9eea8bf2145063ea5c4391b85c_prof);

        
        $__internal_7843eddc0cc4aa27b52e0b4d9d8b4557aab1ded0b76f16b479c048c9428b181b->leave($__internal_7843eddc0cc4aa27b52e0b4d9d8b4557aab1ded0b76f16b479c048c9428b181b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

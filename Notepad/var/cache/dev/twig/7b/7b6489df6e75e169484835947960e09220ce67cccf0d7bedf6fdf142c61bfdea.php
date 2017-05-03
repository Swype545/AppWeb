<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a10401d86c2324aa7b0f62f33d45da6476e299b0bebfec10a4fda509159ea1bf extends Twig_Template
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
        $__internal_09fb7dbb09e9488fa373415c78a18a34bdb8a2a4f0a28c4095c262ade60157bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fb7dbb09e9488fa373415c78a18a34bdb8a2a4f0a28c4095c262ade60157bf->enter($__internal_09fb7dbb09e9488fa373415c78a18a34bdb8a2a4f0a28c4095c262ade60157bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_194f4a1408b7ac6d05a2dd417b7fe87bf15faf62c293a5b96b8c1be81cf253af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194f4a1408b7ac6d05a2dd417b7fe87bf15faf62c293a5b96b8c1be81cf253af->enter($__internal_194f4a1408b7ac6d05a2dd417b7fe87bf15faf62c293a5b96b8c1be81cf253af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_09fb7dbb09e9488fa373415c78a18a34bdb8a2a4f0a28c4095c262ade60157bf->leave($__internal_09fb7dbb09e9488fa373415c78a18a34bdb8a2a4f0a28c4095c262ade60157bf_prof);

        
        $__internal_194f4a1408b7ac6d05a2dd417b7fe87bf15faf62c293a5b96b8c1be81cf253af->leave($__internal_194f4a1408b7ac6d05a2dd417b7fe87bf15faf62c293a5b96b8c1be81cf253af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_391896aa7039ff78c08961f12acafc897474350bcb71ae9256820610ae21f14d extends Twig_Template
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
        $__internal_abf9ecc9ee4b95b22c8c51e973ea50e3439a918d6f050ee3e83f3690dae6246d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf9ecc9ee4b95b22c8c51e973ea50e3439a918d6f050ee3e83f3690dae6246d->enter($__internal_abf9ecc9ee4b95b22c8c51e973ea50e3439a918d6f050ee3e83f3690dae6246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6053e41ac0148f9697e1cc2b0cde05df4bdaf3a300f7d1eddc7182b44a7fa4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6053e41ac0148f9697e1cc2b0cde05df4bdaf3a300f7d1eddc7182b44a7fa4f5->enter($__internal_6053e41ac0148f9697e1cc2b0cde05df4bdaf3a300f7d1eddc7182b44a7fa4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_abf9ecc9ee4b95b22c8c51e973ea50e3439a918d6f050ee3e83f3690dae6246d->leave($__internal_abf9ecc9ee4b95b22c8c51e973ea50e3439a918d6f050ee3e83f3690dae6246d_prof);

        
        $__internal_6053e41ac0148f9697e1cc2b0cde05df4bdaf3a300f7d1eddc7182b44a7fa4f5->leave($__internal_6053e41ac0148f9697e1cc2b0cde05df4bdaf3a300f7d1eddc7182b44a7fa4f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

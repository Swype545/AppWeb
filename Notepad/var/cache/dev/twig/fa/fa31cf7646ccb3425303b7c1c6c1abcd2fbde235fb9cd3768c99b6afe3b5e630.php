<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_98133afb7b94f96f779d29a7d6af5255ccd8ee18f47ea4f52eead023e91b3ce7 extends Twig_Template
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
        $__internal_964d6f6cbcd196356ba653887676f27373d6b7742a930e545c6c291cf737a609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964d6f6cbcd196356ba653887676f27373d6b7742a930e545c6c291cf737a609->enter($__internal_964d6f6cbcd196356ba653887676f27373d6b7742a930e545c6c291cf737a609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_67c607b68dd594fe660d4e155692367e34ba6b8fefa7892d3c7829a689ef8968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c607b68dd594fe660d4e155692367e34ba6b8fefa7892d3c7829a689ef8968->enter($__internal_67c607b68dd594fe660d4e155692367e34ba6b8fefa7892d3c7829a689ef8968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_964d6f6cbcd196356ba653887676f27373d6b7742a930e545c6c291cf737a609->leave($__internal_964d6f6cbcd196356ba653887676f27373d6b7742a930e545c6c291cf737a609_prof);

        
        $__internal_67c607b68dd594fe660d4e155692367e34ba6b8fefa7892d3c7829a689ef8968->leave($__internal_67c607b68dd594fe660d4e155692367e34ba6b8fefa7892d3c7829a689ef8968_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

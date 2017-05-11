<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_965cfacd4e397fe1e1d76f5fecf0d595a4cf1737c8fd2b04006d49390b2504a7 extends Twig_Template
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
        $__internal_063a0f31bcc5128d6bd17027d06e9b6299e460e73d5d1106bda6daa0ee597803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063a0f31bcc5128d6bd17027d06e9b6299e460e73d5d1106bda6daa0ee597803->enter($__internal_063a0f31bcc5128d6bd17027d06e9b6299e460e73d5d1106bda6daa0ee597803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4b5f87632b25c3c6064b4bc194975ad78d759ea8630817947eb1d041b652fb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5f87632b25c3c6064b4bc194975ad78d759ea8630817947eb1d041b652fb34->enter($__internal_4b5f87632b25c3c6064b4bc194975ad78d759ea8630817947eb1d041b652fb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_063a0f31bcc5128d6bd17027d06e9b6299e460e73d5d1106bda6daa0ee597803->leave($__internal_063a0f31bcc5128d6bd17027d06e9b6299e460e73d5d1106bda6daa0ee597803_prof);

        
        $__internal_4b5f87632b25c3c6064b4bc194975ad78d759ea8630817947eb1d041b652fb34->leave($__internal_4b5f87632b25c3c6064b4bc194975ad78d759ea8630817947eb1d041b652fb34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

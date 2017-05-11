<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5bf0014ae8bea4e15a2315be9cb408ecb464d37973a1cef58257a5a925e0fe62 extends Twig_Template
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
        $__internal_5893edee9895d0db9b77c16d476230f56cb8698de0f0554dccfca57425dd6564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5893edee9895d0db9b77c16d476230f56cb8698de0f0554dccfca57425dd6564->enter($__internal_5893edee9895d0db9b77c16d476230f56cb8698de0f0554dccfca57425dd6564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_612c05d612f4698300faeef083810214c10fb07b2a7f42e1302c2bd66fd9aa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612c05d612f4698300faeef083810214c10fb07b2a7f42e1302c2bd66fd9aa6c->enter($__internal_612c05d612f4698300faeef083810214c10fb07b2a7f42e1302c2bd66fd9aa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5893edee9895d0db9b77c16d476230f56cb8698de0f0554dccfca57425dd6564->leave($__internal_5893edee9895d0db9b77c16d476230f56cb8698de0f0554dccfca57425dd6564_prof);

        
        $__internal_612c05d612f4698300faeef083810214c10fb07b2a7f42e1302c2bd66fd9aa6c->leave($__internal_612c05d612f4698300faeef083810214c10fb07b2a7f42e1302c2bd66fd9aa6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

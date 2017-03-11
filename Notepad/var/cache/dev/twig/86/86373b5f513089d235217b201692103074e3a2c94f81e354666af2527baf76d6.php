<?php

/* NotepadBundle:Default:index.html.twig */
class __TwigTemplate_84ec973109560af808242701ea4a4a5eca8b86dc333fb7aa4c0bcd4ccb46b16a extends Twig_Template
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
        $__internal_0d45593069aee5214603cccac977041f3ca6dac20d4abc731db1ad6b6e20d86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d45593069aee5214603cccac977041f3ca6dac20d4abc731db1ad6b6e20d86e->enter($__internal_0d45593069aee5214603cccac977041f3ca6dac20d4abc731db1ad6b6e20d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Default:index.html.twig"));

        $__internal_9df6343ca3ea28ff866637c12648fdc88044a2a4c05232136f0efa56b54493d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df6343ca3ea28ff866637c12648fdc88044a2a4c05232136f0efa56b54493d5->enter($__internal_9df6343ca3ea28ff866637c12648fdc88044a2a4c05232136f0efa56b54493d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0d45593069aee5214603cccac977041f3ca6dac20d4abc731db1ad6b6e20d86e->leave($__internal_0d45593069aee5214603cccac977041f3ca6dac20d4abc731db1ad6b6e20d86e_prof);

        
        $__internal_9df6343ca3ea28ff866637c12648fdc88044a2a4c05232136f0efa56b54493d5->leave($__internal_9df6343ca3ea28ff866637c12648fdc88044a2a4c05232136f0efa56b54493d5_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "NotepadBundle:Default:index.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Default/index.html.twig");
    }
}

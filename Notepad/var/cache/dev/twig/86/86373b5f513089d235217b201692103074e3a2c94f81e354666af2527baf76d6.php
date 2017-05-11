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
        $__internal_3787e7cb5e55807ed9b6f03b7ef195be0b385ef380993ffce356320325b918cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3787e7cb5e55807ed9b6f03b7ef195be0b385ef380993ffce356320325b918cb->enter($__internal_3787e7cb5e55807ed9b6f03b7ef195be0b385ef380993ffce356320325b918cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Default:index.html.twig"));

        $__internal_92a6ec8ab14221606430a284ffb0a2e12702ead6aaa64e963eb8d42190611577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a6ec8ab14221606430a284ffb0a2e12702ead6aaa64e963eb8d42190611577->enter($__internal_92a6ec8ab14221606430a284ffb0a2e12702ead6aaa64e963eb8d42190611577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3787e7cb5e55807ed9b6f03b7ef195be0b385ef380993ffce356320325b918cb->leave($__internal_3787e7cb5e55807ed9b6f03b7ef195be0b385ef380993ffce356320325b918cb_prof);

        
        $__internal_92a6ec8ab14221606430a284ffb0a2e12702ead6aaa64e963eb8d42190611577->leave($__internal_92a6ec8ab14221606430a284ffb0a2e12702ead6aaa64e963eb8d42190611577_prof);

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

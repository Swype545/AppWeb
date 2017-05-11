<?php

/* @Notepad/Default/index.html.twig */
class __TwigTemplate_4b7c211d16588100dbb4523536dbf4673e53c4ac981c4279b1f012d380e7c619 extends Twig_Template
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
        $__internal_021d9100c8ea98d00edb7803a49d76f9e5ceab502ca52f58c29be2843f81ffeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021d9100c8ea98d00edb7803a49d76f9e5ceab502ca52f58c29be2843f81ffeb->enter($__internal_021d9100c8ea98d00edb7803a49d76f9e5ceab502ca52f58c29be2843f81ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/Default/index.html.twig"));

        $__internal_a5061f8e87b2cdc3f988ecb06bf8847af0623c11f7e2e3ec0a665f5ac768a3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5061f8e87b2cdc3f988ecb06bf8847af0623c11f7e2e3ec0a665f5ac768a3e3->enter($__internal_a5061f8e87b2cdc3f988ecb06bf8847af0623c11f7e2e3ec0a665f5ac768a3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_021d9100c8ea98d00edb7803a49d76f9e5ceab502ca52f58c29be2843f81ffeb->leave($__internal_021d9100c8ea98d00edb7803a49d76f9e5ceab502ca52f58c29be2843f81ffeb_prof);

        
        $__internal_a5061f8e87b2cdc3f988ecb06bf8847af0623c11f7e2e3ec0a665f5ac768a3e3->leave($__internal_a5061f8e87b2cdc3f988ecb06bf8847af0623c11f7e2e3ec0a665f5ac768a3e3_prof);

    }

    public function getTemplateName()
    {
        return "@Notepad/Default/index.html.twig";
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
", "@Notepad/Default/index.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

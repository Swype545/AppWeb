<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0ed77b3f94e9b46c25f9506317dca66038dd20cf106a9aa5ed767084809cd09a extends Twig_Template
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
        $__internal_b04dfcbd3364de769571cb195ba52c4c0d2b4f72270f262a9cc22236b9f04988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04dfcbd3364de769571cb195ba52c4c0d2b4f72270f262a9cc22236b9f04988->enter($__internal_b04dfcbd3364de769571cb195ba52c4c0d2b4f72270f262a9cc22236b9f04988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_83fd11b6ae7b4e135a25e6eec42a7cd97c97da79e6917193ca926cf72ecb2f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fd11b6ae7b4e135a25e6eec42a7cd97c97da79e6917193ca926cf72ecb2f99->enter($__internal_83fd11b6ae7b4e135a25e6eec42a7cd97c97da79e6917193ca926cf72ecb2f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b04dfcbd3364de769571cb195ba52c4c0d2b4f72270f262a9cc22236b9f04988->leave($__internal_b04dfcbd3364de769571cb195ba52c4c0d2b4f72270f262a9cc22236b9f04988_prof);

        
        $__internal_83fd11b6ae7b4e135a25e6eec42a7cd97c97da79e6917193ca926cf72ecb2f99->leave($__internal_83fd11b6ae7b4e135a25e6eec42a7cd97c97da79e6917193ca926cf72ecb2f99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

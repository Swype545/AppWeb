<?php

/* NotepadBundle:pages:notelist.html.twig */
class __TwigTemplate_c2845046f69468bd050e882367c1752cd92dfcfe39d77c6e37e9ed3508c1ca2b extends Twig_Template
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
        $__internal_162a7fe177c5668c2da245c424894335a12dd98ffbcb87571147b1b9214a6203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162a7fe177c5668c2da245c424894335a12dd98ffbcb87571147b1b9214a6203->enter($__internal_162a7fe177c5668c2da245c424894335a12dd98ffbcb87571147b1b9214a6203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:notelist.html.twig"));

        $__internal_1b543430dabb1c26abe296a992a211b706d69d015392baeb86c5f3243ba28ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b543430dabb1c26abe296a992a211b706d69d015392baeb86c5f3243ba28ef4->enter($__internal_1b543430dabb1c26abe296a992a211b706d69d015392baeb86c5f3243ba28ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:notelist.html.twig"));

        // line 1
        echo "Hello World! <br/>
Page reprennant l'ensemble de vos notes <br/>
Ton nombre est ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "
";
        
        $__internal_162a7fe177c5668c2da245c424894335a12dd98ffbcb87571147b1b9214a6203->leave($__internal_162a7fe177c5668c2da245c424894335a12dd98ffbcb87571147b1b9214a6203_prof);

        
        $__internal_1b543430dabb1c26abe296a992a211b706d69d015392baeb86c5f3243ba28ef4->leave($__internal_1b543430dabb1c26abe296a992a211b706d69d015392baeb86c5f3243ba28ef4_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:pages:notelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World! <br/>
Page reprennant l'ensemble de vos notes <br/>
Ton nombre est {{number}}
", "NotepadBundle:pages:notelist.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/notelist.html.twig");
    }
}

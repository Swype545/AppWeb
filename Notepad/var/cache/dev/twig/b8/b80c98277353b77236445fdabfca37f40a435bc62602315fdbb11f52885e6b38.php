<?php

/* NotepadBundle:pages:newcategory.html.twig */
class __TwigTemplate_9bba4823281276cf9f930b23b80e10ecc5fa91b0cca27481067e9e6fe08493eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:pages:newcategory.html.twig", 1);
        $this->blocks = array(
            'block_content' => array($this, 'block_block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle:pages:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9bea4420da8e02fbfb7fe64fce18bb5cfcc205dbe7603024f4e61fa3cd872aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bea4420da8e02fbfb7fe64fce18bb5cfcc205dbe7603024f4e61fa3cd872aa->enter($__internal_c9bea4420da8e02fbfb7fe64fce18bb5cfcc205dbe7603024f4e61fa3cd872aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:newcategory.html.twig"));

        $__internal_6e7e2a6c50231e9e5e5b5bc5684837be2568cb453ebd4d580c255ba404a7d999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7e2a6c50231e9e5e5b5bc5684837be2568cb453ebd4d580c255ba404a7d999->enter($__internal_6e7e2a6c50231e9e5e5b5bc5684837be2568cb453ebd4d580c255ba404a7d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:newcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9bea4420da8e02fbfb7fe64fce18bb5cfcc205dbe7603024f4e61fa3cd872aa->leave($__internal_c9bea4420da8e02fbfb7fe64fce18bb5cfcc205dbe7603024f4e61fa3cd872aa_prof);

        
        $__internal_6e7e2a6c50231e9e5e5b5bc5684837be2568cb453ebd4d580c255ba404a7d999->leave($__internal_6e7e2a6c50231e9e5e5b5bc5684837be2568cb453ebd4d580c255ba404a7d999_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_b825c5e1cc2392eb0c51cc2c995db8c83380dec946b64937e34c1ac543d35224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b825c5e1cc2392eb0c51cc2c995db8c83380dec946b64937e34c1ac543d35224->enter($__internal_b825c5e1cc2392eb0c51cc2c995db8c83380dec946b64937e34c1ac543d35224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_ec5f8ddb35b83da01d7e4ed5bec2e1228a65825063b5e93c966c5db7cf61e630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5f8ddb35b83da01d7e4ed5bec2e1228a65825063b5e93c966c5db7cf61e630->enter($__internal_ec5f8ddb35b83da01d7e4ed5bec2e1228a65825063b5e93c966c5db7cf61e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        // line 4
        echo "\t";
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
";
        
        $__internal_ec5f8ddb35b83da01d7e4ed5bec2e1228a65825063b5e93c966c5db7cf61e630->leave($__internal_ec5f8ddb35b83da01d7e4ed5bec2e1228a65825063b5e93c966c5db7cf61e630_prof);

        
        $__internal_b825c5e1cc2392eb0c51cc2c995db8c83380dec946b64937e34c1ac543d35224->leave($__internal_b825c5e1cc2392eb0c51cc2c995db8c83380dec946b64937e34c1ac543d35224_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:pages:newcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  57 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends 'NotepadBundle:pages:layout.html.twig'%}
\t
{%block block_content%}
\t{%form_theme form 'bootstrap_3_layout.html.twig'%}
\t{{form_start(form)}}
\t\t{{form_widget(form)}}
\t{{form_end(form)}}
\t\t
{%endblock%}


", "NotepadBundle:pages:newcategory.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/newcategory.html.twig");
    }
}

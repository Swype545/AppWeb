<?php

/* NotepadBundle:Pages:newcategory.html.twig */
class __TwigTemplate_8f4c016020322c45f66df94965dd96a77cf6212cfd56ae9aee4c546d2e5a10fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:Pages:newcategory.html.twig", 1);
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
        $__internal_060fb00c1046d41cd139ef070cf076a4962344118fffe441ed236771eb2cb751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060fb00c1046d41cd139ef070cf076a4962344118fffe441ed236771eb2cb751->enter($__internal_060fb00c1046d41cd139ef070cf076a4962344118fffe441ed236771eb2cb751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:newcategory.html.twig"));

        $__internal_a3113cc8098d20cdc690846dbc482f627b2ae9fb3c284bb0a6d73b810845b669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3113cc8098d20cdc690846dbc482f627b2ae9fb3c284bb0a6d73b810845b669->enter($__internal_a3113cc8098d20cdc690846dbc482f627b2ae9fb3c284bb0a6d73b810845b669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:newcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060fb00c1046d41cd139ef070cf076a4962344118fffe441ed236771eb2cb751->leave($__internal_060fb00c1046d41cd139ef070cf076a4962344118fffe441ed236771eb2cb751_prof);

        
        $__internal_a3113cc8098d20cdc690846dbc482f627b2ae9fb3c284bb0a6d73b810845b669->leave($__internal_a3113cc8098d20cdc690846dbc482f627b2ae9fb3c284bb0a6d73b810845b669_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_ea8c8b9b54166311bd484d627f918d42b9db5beaa59bbcc5258921f38628ca83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8c8b9b54166311bd484d627f918d42b9db5beaa59bbcc5258921f38628ca83->enter($__internal_ea8c8b9b54166311bd484d627f918d42b9db5beaa59bbcc5258921f38628ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_f1501f8aa2f7428bdfa05af0c685c60da6f25fbf33039de6cbbe3b60f2239dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1501f8aa2f7428bdfa05af0c685c60da6f25fbf33039de6cbbe3b60f2239dfb->enter($__internal_f1501f8aa2f7428bdfa05af0c685c60da6f25fbf33039de6cbbe3b60f2239dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_f1501f8aa2f7428bdfa05af0c685c60da6f25fbf33039de6cbbe3b60f2239dfb->leave($__internal_f1501f8aa2f7428bdfa05af0c685c60da6f25fbf33039de6cbbe3b60f2239dfb_prof);

        
        $__internal_ea8c8b9b54166311bd484d627f918d42b9db5beaa59bbcc5258921f38628ca83->leave($__internal_ea8c8b9b54166311bd484d627f918d42b9db5beaa59bbcc5258921f38628ca83_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Pages:newcategory.html.twig";
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


", "NotepadBundle:Pages:newcategory.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Pages/newcategory.html.twig");
    }
}

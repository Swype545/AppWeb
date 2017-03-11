<?php

/* NotepadBundle:Pages:newcategory.html.twig */
class __TwigTemplate_508a8dcb2c064ec83115bcefad705a79ce8175fc2dac9159091beabdffe11383 extends Twig_Template
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
        $__internal_318b66c81fc0c6142bc81ed50a6c71bfa9455bbf86114dfe048c3ff6a1d864b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318b66c81fc0c6142bc81ed50a6c71bfa9455bbf86114dfe048c3ff6a1d864b9->enter($__internal_318b66c81fc0c6142bc81ed50a6c71bfa9455bbf86114dfe048c3ff6a1d864b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:newcategory.html.twig"));

        $__internal_fe2eb9b34508cd07c472e57201a6114cabe4f809254f78b7d480295857318d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2eb9b34508cd07c472e57201a6114cabe4f809254f78b7d480295857318d3a->enter($__internal_fe2eb9b34508cd07c472e57201a6114cabe4f809254f78b7d480295857318d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:newcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_318b66c81fc0c6142bc81ed50a6c71bfa9455bbf86114dfe048c3ff6a1d864b9->leave($__internal_318b66c81fc0c6142bc81ed50a6c71bfa9455bbf86114dfe048c3ff6a1d864b9_prof);

        
        $__internal_fe2eb9b34508cd07c472e57201a6114cabe4f809254f78b7d480295857318d3a->leave($__internal_fe2eb9b34508cd07c472e57201a6114cabe4f809254f78b7d480295857318d3a_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_6124ad19317464473be5d8e0b3b141105dd57d3d7cdef9b5f3512a812b1d52b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6124ad19317464473be5d8e0b3b141105dd57d3d7cdef9b5f3512a812b1d52b2->enter($__internal_6124ad19317464473be5d8e0b3b141105dd57d3d7cdef9b5f3512a812b1d52b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_85aca3a309edeba9b70d01612d1db65635524025c84da770b6b96e43ad9e403b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85aca3a309edeba9b70d01612d1db65635524025c84da770b6b96e43ad9e403b->enter($__internal_85aca3a309edeba9b70d01612d1db65635524025c84da770b6b96e43ad9e403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_85aca3a309edeba9b70d01612d1db65635524025c84da770b6b96e43ad9e403b->leave($__internal_85aca3a309edeba9b70d01612d1db65635524025c84da770b6b96e43ad9e403b_prof);

        
        $__internal_6124ad19317464473be5d8e0b3b141105dd57d3d7cdef9b5f3512a812b1d52b2->leave($__internal_6124ad19317464473be5d8e0b3b141105dd57d3d7cdef9b5f3512a812b1d52b2_prof);

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


", "NotepadBundle:Pages:newcategory.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Pages/newcategory.html.twig");
    }
}

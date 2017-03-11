<?php

/* NotepadBundle:pages:newnote.html.twig */
class __TwigTemplate_ae3726082bbb35898ba1d59bb3ad67aaacf482c85d26079ca1f158cdbb90dded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:pages:newnote.html.twig", 3);
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
        $__internal_1db32d1e760ff77078a9d855fd5b5e965105e8802eafaa00c225455bdb021b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db32d1e760ff77078a9d855fd5b5e965105e8802eafaa00c225455bdb021b52->enter($__internal_1db32d1e760ff77078a9d855fd5b5e965105e8802eafaa00c225455bdb021b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:newnote.html.twig"));

        $__internal_5fddf6bfaecd2aa43d6e97a698b4797135557bc71130d2e751ecd46beb9f9374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fddf6bfaecd2aa43d6e97a698b4797135557bc71130d2e751ecd46beb9f9374->enter($__internal_5fddf6bfaecd2aa43d6e97a698b4797135557bc71130d2e751ecd46beb9f9374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:newnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db32d1e760ff77078a9d855fd5b5e965105e8802eafaa00c225455bdb021b52->leave($__internal_1db32d1e760ff77078a9d855fd5b5e965105e8802eafaa00c225455bdb021b52_prof);

        
        $__internal_5fddf6bfaecd2aa43d6e97a698b4797135557bc71130d2e751ecd46beb9f9374->leave($__internal_5fddf6bfaecd2aa43d6e97a698b4797135557bc71130d2e751ecd46beb9f9374_prof);

    }

    // line 5
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_d6f629594c4de684cf8203645c29d5fa920bd0bc6ce50c78ba57079de1f4ef5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f629594c4de684cf8203645c29d5fa920bd0bc6ce50c78ba57079de1f4ef5c->enter($__internal_d6f629594c4de684cf8203645c29d5fa920bd0bc6ce50c78ba57079de1f4ef5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_964395f7da6752c02aeb6b9b1a5f4f9422bc815b6c58a5c352a9b1a2a3d260d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964395f7da6752c02aeb6b9b1a5f4f9422bc815b6c58a5c352a9b1a2a3d260d1->enter($__internal_964395f7da6752c02aeb6b9b1a5f4f9422bc815b6c58a5c352a9b1a2a3d260d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        // line 6
        echo "\t
\t";
        // line 7
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "modify")) {
            // line 8
            echo "\t\t<h1>Modify Note</h1>
\t";
        } elseif ((        // line 9
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "create")) {
            // line 10
            echo "\t\t<h1>Create Note</h1>
\t";
        }
        // line 12
        echo "\t
\t";
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 14
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t
";
        
        $__internal_964395f7da6752c02aeb6b9b1a5f4f9422bc815b6c58a5c352a9b1a2a3d260d1->leave($__internal_964395f7da6752c02aeb6b9b1a5f4f9422bc815b6c58a5c352a9b1a2a3d260d1_prof);

        
        $__internal_d6f629594c4de684cf8203645c29d5fa920bd0bc6ce50c78ba57079de1f4ef5c->leave($__internal_d6f629594c4de684cf8203645c29d5fa920bd0bc6ce50c78ba57079de1f4ef5c_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:pages:newnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  73 => 15,  68 => 14,  66 => 13,  63 => 12,  59 => 10,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{%extends 'NotepadBundle:pages:layout.html.twig'%}
\t
{%block block_content%}
\t
\t{%if(type=='modify') %}
\t\t<h1>Modify Note</h1>
\t{%elseif(type=='create')%}
\t\t<h1>Create Note</h1>
\t{%endif%}
\t
\t{%form_theme form 'bootstrap_3_layout.html.twig'%}
\t{{form_start(form)}}
\t\t{{form_widget(form)}}
\t{{form_end(form)}}
\t
{%endblock%}



", "NotepadBundle:pages:newnote.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/newnote.html.twig");
    }
}

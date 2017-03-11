<?php

/* NotepadBundle:pages:newnote.html.twig */
class __TwigTemplate_75276c5a5e269711c4677a46710b27b71ccf04f4f3f7c3a43189379abf158418 extends Twig_Template
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
        $__internal_e3f814a34dfb46575d143531f8b043d32075565fc16b68ed418975873ffa9097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f814a34dfb46575d143531f8b043d32075565fc16b68ed418975873ffa9097->enter($__internal_e3f814a34dfb46575d143531f8b043d32075565fc16b68ed418975873ffa9097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:newnote.html.twig"));

        $__internal_5221ecd2ae781d670188ae8a0b0d634d9f2626e8186edca60897a1fd8ddf465d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5221ecd2ae781d670188ae8a0b0d634d9f2626e8186edca60897a1fd8ddf465d->enter($__internal_5221ecd2ae781d670188ae8a0b0d634d9f2626e8186edca60897a1fd8ddf465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:newnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f814a34dfb46575d143531f8b043d32075565fc16b68ed418975873ffa9097->leave($__internal_e3f814a34dfb46575d143531f8b043d32075565fc16b68ed418975873ffa9097_prof);

        
        $__internal_5221ecd2ae781d670188ae8a0b0d634d9f2626e8186edca60897a1fd8ddf465d->leave($__internal_5221ecd2ae781d670188ae8a0b0d634d9f2626e8186edca60897a1fd8ddf465d_prof);

    }

    // line 5
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_3397840bbd54187e079a2c3604fa89a89dced73868dcdb55ebffaeea1cf9250f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3397840bbd54187e079a2c3604fa89a89dced73868dcdb55ebffaeea1cf9250f->enter($__internal_3397840bbd54187e079a2c3604fa89a89dced73868dcdb55ebffaeea1cf9250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_9dfebad0b6f9fe75744bb987c1a0995c67c1ccaa624fd6727ad628ec97660b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfebad0b6f9fe75744bb987c1a0995c67c1ccaa624fd6727ad628ec97660b35->enter($__internal_9dfebad0b6f9fe75744bb987c1a0995c67c1ccaa624fd6727ad628ec97660b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_9dfebad0b6f9fe75744bb987c1a0995c67c1ccaa624fd6727ad628ec97660b35->leave($__internal_9dfebad0b6f9fe75744bb987c1a0995c67c1ccaa624fd6727ad628ec97660b35_prof);

        
        $__internal_3397840bbd54187e079a2c3604fa89a89dced73868dcdb55ebffaeea1cf9250f->leave($__internal_3397840bbd54187e079a2c3604fa89a89dced73868dcdb55ebffaeea1cf9250f_prof);

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



", "NotepadBundle:pages:newnote.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/newnote.html.twig");
    }
}

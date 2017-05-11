<?php

/* @Notepad/pages/newnote.html.twig */
class __TwigTemplate_d6e9cc25f8922f4022cba07daf8d4d4b95a9b84bcb2acc432decdc233b748b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "@Notepad/pages/newnote.html.twig", 3);
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
        $__internal_95b39af99a554cbf6f0caf80d1376b43e7aa2c41aea432ee6e835c3bd765c4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b39af99a554cbf6f0caf80d1376b43e7aa2c41aea432ee6e835c3bd765c4fc->enter($__internal_95b39af99a554cbf6f0caf80d1376b43e7aa2c41aea432ee6e835c3bd765c4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/pages/newnote.html.twig"));

        $__internal_e1235a04e6c2e93a99c55d5775c01ecd783b7269158b084af79b210d3059cba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1235a04e6c2e93a99c55d5775c01ecd783b7269158b084af79b210d3059cba2->enter($__internal_e1235a04e6c2e93a99c55d5775c01ecd783b7269158b084af79b210d3059cba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/pages/newnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b39af99a554cbf6f0caf80d1376b43e7aa2c41aea432ee6e835c3bd765c4fc->leave($__internal_95b39af99a554cbf6f0caf80d1376b43e7aa2c41aea432ee6e835c3bd765c4fc_prof);

        
        $__internal_e1235a04e6c2e93a99c55d5775c01ecd783b7269158b084af79b210d3059cba2->leave($__internal_e1235a04e6c2e93a99c55d5775c01ecd783b7269158b084af79b210d3059cba2_prof);

    }

    // line 5
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_f407c6bc491d4bb956894b3a17c6ec68e8867c4dfa51dc6116ee394a727b5134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f407c6bc491d4bb956894b3a17c6ec68e8867c4dfa51dc6116ee394a727b5134->enter($__internal_f407c6bc491d4bb956894b3a17c6ec68e8867c4dfa51dc6116ee394a727b5134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_73f7d876a1f9e79791073cacbb5720d94a67f5a11f17f74d3ccda02e4d39965e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f7d876a1f9e79791073cacbb5720d94a67f5a11f17f74d3ccda02e4d39965e->enter($__internal_73f7d876a1f9e79791073cacbb5720d94a67f5a11f17f74d3ccda02e4d39965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_73f7d876a1f9e79791073cacbb5720d94a67f5a11f17f74d3ccda02e4d39965e->leave($__internal_73f7d876a1f9e79791073cacbb5720d94a67f5a11f17f74d3ccda02e4d39965e_prof);

        
        $__internal_f407c6bc491d4bb956894b3a17c6ec68e8867c4dfa51dc6116ee394a727b5134->leave($__internal_f407c6bc491d4bb956894b3a17c6ec68e8867c4dfa51dc6116ee394a727b5134_prof);

    }

    public function getTemplateName()
    {
        return "@Notepad/pages/newnote.html.twig";
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



", "@Notepad/pages/newnote.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle\\Resources\\views\\pages\\newnote.html.twig");
    }
}

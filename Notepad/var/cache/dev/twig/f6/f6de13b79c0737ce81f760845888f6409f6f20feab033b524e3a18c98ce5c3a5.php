<?php

/* @Notepad/pages/newcategory.html.twig */
class __TwigTemplate_fbce46d04b0806003aa131412ce8de955a789ad642d3b78aad4da47152787ea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "@Notepad/pages/newcategory.html.twig", 1);
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
        $__internal_e2d08838d7d573dd7da3d343454b58b996396ad240d42cefa0f1cd2c181ce43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d08838d7d573dd7da3d343454b58b996396ad240d42cefa0f1cd2c181ce43a->enter($__internal_e2d08838d7d573dd7da3d343454b58b996396ad240d42cefa0f1cd2c181ce43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/pages/newcategory.html.twig"));

        $__internal_1079d8ce531522d96926881e72ae05de5aa623ace3fc1b96139aae56202342f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1079d8ce531522d96926881e72ae05de5aa623ace3fc1b96139aae56202342f0->enter($__internal_1079d8ce531522d96926881e72ae05de5aa623ace3fc1b96139aae56202342f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/pages/newcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d08838d7d573dd7da3d343454b58b996396ad240d42cefa0f1cd2c181ce43a->leave($__internal_e2d08838d7d573dd7da3d343454b58b996396ad240d42cefa0f1cd2c181ce43a_prof);

        
        $__internal_1079d8ce531522d96926881e72ae05de5aa623ace3fc1b96139aae56202342f0->leave($__internal_1079d8ce531522d96926881e72ae05de5aa623ace3fc1b96139aae56202342f0_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_0c605d44b24f3a4ffc5779f0ee0fe5676e0f1d9d0e15aabd1dc2ba91d5b32b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c605d44b24f3a4ffc5779f0ee0fe5676e0f1d9d0e15aabd1dc2ba91d5b32b0c->enter($__internal_0c605d44b24f3a4ffc5779f0ee0fe5676e0f1d9d0e15aabd1dc2ba91d5b32b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_aeb8e4920c46ac2c3f689ed4dbaf2b29e5f42d26e1242b4a1cab0a5f35fe2b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb8e4920c46ac2c3f689ed4dbaf2b29e5f42d26e1242b4a1cab0a5f35fe2b8c->enter($__internal_aeb8e4920c46ac2c3f689ed4dbaf2b29e5f42d26e1242b4a1cab0a5f35fe2b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_aeb8e4920c46ac2c3f689ed4dbaf2b29e5f42d26e1242b4a1cab0a5f35fe2b8c->leave($__internal_aeb8e4920c46ac2c3f689ed4dbaf2b29e5f42d26e1242b4a1cab0a5f35fe2b8c_prof);

        
        $__internal_0c605d44b24f3a4ffc5779f0ee0fe5676e0f1d9d0e15aabd1dc2ba91d5b32b0c->leave($__internal_0c605d44b24f3a4ffc5779f0ee0fe5676e0f1d9d0e15aabd1dc2ba91d5b32b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Notepad/pages/newcategory.html.twig";
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


", "@Notepad/pages/newcategory.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle\\Resources\\views\\pages\\newcategory.html.twig");
    }
}

<?php

/* @Notepad/pages/categorylist.html.twig */
class __TwigTemplate_1411ead229c04000b5bb4769e0749c2d3f9f016cd6e81bb449facb2e29933828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "@Notepad/pages/categorylist.html.twig", 1);
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
        $__internal_051ac4be8ad846b8225f953498d36aa879b7c60ac3fec4d552ffb525458537f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051ac4be8ad846b8225f953498d36aa879b7c60ac3fec4d552ffb525458537f7->enter($__internal_051ac4be8ad846b8225f953498d36aa879b7c60ac3fec4d552ffb525458537f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/pages/categorylist.html.twig"));

        $__internal_6303fef7429ef464410f6ebff460bc5fe4a72f75d0bcf5ceb082f22e47d2a7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6303fef7429ef464410f6ebff460bc5fe4a72f75d0bcf5ceb082f22e47d2a7e6->enter($__internal_6303fef7429ef464410f6ebff460bc5fe4a72f75d0bcf5ceb082f22e47d2a7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Notepad/pages/categorylist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051ac4be8ad846b8225f953498d36aa879b7c60ac3fec4d552ffb525458537f7->leave($__internal_051ac4be8ad846b8225f953498d36aa879b7c60ac3fec4d552ffb525458537f7_prof);

        
        $__internal_6303fef7429ef464410f6ebff460bc5fe4a72f75d0bcf5ceb082f22e47d2a7e6->leave($__internal_6303fef7429ef464410f6ebff460bc5fe4a72f75d0bcf5ceb082f22e47d2a7e6_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_9310980b1b30adf238413a07048aba658f6f239b2e4485123e00c7460c0867ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9310980b1b30adf238413a07048aba658f6f239b2e4485123e00c7460c0867ca->enter($__internal_9310980b1b30adf238413a07048aba658f6f239b2e4485123e00c7460c0867ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_645a2be4cb2a83a50a80cee2f5b8ba26e0acc841254f6372fd28434b9963c130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645a2be4cb2a83a50a80cee2f5b8ba26e0acc841254f6372fd28434b9963c130->enter($__internal_645a2be4cb2a83a50a80cee2f5b8ba26e0acc841254f6372fd28434b9963c130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        // line 4
        echo "\t<!-- Main component for a primary marketing message or call to action -->
\t<div class=\"panel panel-info\">\t
\t\t
\t\t<div class=\"panel-heading\">
\t\t\tCategory list
\t\t\t<!--<i>category.categoryId.label|e</i>-->
\t\t</div>
\t
\t\t<div class=\"panel-body\">
\t\t\t<table style=\"width:100%\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Category id</th>
\t\t\t\t\t<th>Category Name</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()));
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "label", array()));
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-success btn-clear\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcategory", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Edit Category</a>
\t\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger btn-clear\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletecategory", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Delete Category</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</table>
\t\t</div>
\t
\t\t<!--
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "label", array()));
            echo "
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-success btn-clear\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcategory", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Edit Category</a>
\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger btn-clear\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletecategory", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Delete Category</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</div>-->
\t</div>\t
\t\t
";
        
        $__internal_645a2be4cb2a83a50a80cee2f5b8ba26e0acc841254f6372fd28434b9963c130->leave($__internal_645a2be4cb2a83a50a80cee2f5b8ba26e0acc841254f6372fd28434b9963c130_prof);

        
        $__internal_9310980b1b30adf238413a07048aba658f6f239b2e4485123e00c7460c0867ca->leave($__internal_9310980b1b30adf238413a07048aba658f6f239b2e4485123e00c7460c0867ca_prof);

    }

    public function getTemplateName()
    {
        return "@Notepad/pages/categorylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  122 => 42,  118 => 41,  113 => 39,  109 => 37,  105 => 36,  98 => 31,  87 => 26,  83 => 25,  77 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
\t<!-- Main component for a primary marketing message or call to action -->
\t<div class=\"panel panel-info\">\t
\t\t
\t\t<div class=\"panel-heading\">
\t\t\tCategory list
\t\t\t<!--<i>category.categoryId.label|e</i>-->
\t\t</div>
\t
\t\t<div class=\"panel-body\">
\t\t\t<table style=\"width:100%\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Category id</th>
\t\t\t\t\t<th>Category Name</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t\t{%for category in categories %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{category.id|e}}</td>
\t\t\t\t\t<td>{{category.label|e}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-success btn-clear\" href=\"{{path('editcategory', {'id':category.id})}}\">Edit Category</a>
\t\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger btn-clear\" href=\"{{path('deletecategory', {'id':category.id})}}\">Delete Category</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{%endfor%}
\t\t\t</table>
\t\t</div>
\t
\t\t<!--
\t\t<div class=\"panel-body\">
\t\t\t{%for category in categories %}
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t{{category.label|e}}
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-success btn-clear\" href=\"{{path('editcategory', {'id':category.id})}}\">Edit Category</a>
\t\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger btn-clear\" href=\"{{path('deletecategory', {'id':category.id})}}\">Delete Category</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>-->
\t</div>\t
\t\t
{%endblock%}



", "@Notepad/pages/categorylist.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle\\Resources\\views\\pages\\categorylist.html.twig");
    }
}

<?php

/* NotepadBundle:Pages:categorylist.html.twig */
class __TwigTemplate_c5caeb77bbc57c4ec4a5be57748e60092973b19a2c671ff72c02cc323a176d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:Pages:categorylist.html.twig", 1);
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
        $__internal_aaf520b3ed1bb64f45a6fd3c869cfc54b130bea150853fec362908e4db63e1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf520b3ed1bb64f45a6fd3c869cfc54b130bea150853fec362908e4db63e1f6->enter($__internal_aaf520b3ed1bb64f45a6fd3c869cfc54b130bea150853fec362908e4db63e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:categorylist.html.twig"));

        $__internal_40ba24cb00f1d96d6f1264f4ed55ee45e985076c84dc523c9e131bb7910ebf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ba24cb00f1d96d6f1264f4ed55ee45e985076c84dc523c9e131bb7910ebf8e->enter($__internal_40ba24cb00f1d96d6f1264f4ed55ee45e985076c84dc523c9e131bb7910ebf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:categorylist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf520b3ed1bb64f45a6fd3c869cfc54b130bea150853fec362908e4db63e1f6->leave($__internal_aaf520b3ed1bb64f45a6fd3c869cfc54b130bea150853fec362908e4db63e1f6_prof);

        
        $__internal_40ba24cb00f1d96d6f1264f4ed55ee45e985076c84dc523c9e131bb7910ebf8e->leave($__internal_40ba24cb00f1d96d6f1264f4ed55ee45e985076c84dc523c9e131bb7910ebf8e_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_45b598cf7c8e8b426affce17ab94484c29bb566db90222d7ff84ef9d5082ca50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b598cf7c8e8b426affce17ab94484c29bb566db90222d7ff84ef9d5082ca50->enter($__internal_45b598cf7c8e8b426affce17ab94484c29bb566db90222d7ff84ef9d5082ca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_b692111b49dd45a468a94732b588b7364c56ee43ed6fc094983e38ec0961f95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b692111b49dd45a468a94732b588b7364c56ee43ed6fc094983e38ec0961f95e->enter($__internal_b692111b49dd45a468a94732b588b7364c56ee43ed6fc094983e38ec0961f95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_b692111b49dd45a468a94732b588b7364c56ee43ed6fc094983e38ec0961f95e->leave($__internal_b692111b49dd45a468a94732b588b7364c56ee43ed6fc094983e38ec0961f95e_prof);

        
        $__internal_45b598cf7c8e8b426affce17ab94484c29bb566db90222d7ff84ef9d5082ca50->leave($__internal_45b598cf7c8e8b426affce17ab94484c29bb566db90222d7ff84ef9d5082ca50_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Pages:categorylist.html.twig";
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



", "NotepadBundle:Pages:categorylist.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Pages/categorylist.html.twig");
    }
}

<?php

/* NotepadBundle:pages:categorylist.html.twig */
class __TwigTemplate_1d661336132b899376ba4b40154fa1a6e5779bdbededf83c5c0d1eee06ed23c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:pages:categorylist.html.twig", 1);
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
        $__internal_e676953495119fe3b40793c8d13ae58cf1a435049cc5d87d615b7603bc46eb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e676953495119fe3b40793c8d13ae58cf1a435049cc5d87d615b7603bc46eb4e->enter($__internal_e676953495119fe3b40793c8d13ae58cf1a435049cc5d87d615b7603bc46eb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:categorylist.html.twig"));

        $__internal_527bb0191ebc0f78991d65112229d07e4e234595151e72c7c5f4f36f73f1c51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527bb0191ebc0f78991d65112229d07e4e234595151e72c7c5f4f36f73f1c51e->enter($__internal_527bb0191ebc0f78991d65112229d07e4e234595151e72c7c5f4f36f73f1c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:categorylist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e676953495119fe3b40793c8d13ae58cf1a435049cc5d87d615b7603bc46eb4e->leave($__internal_e676953495119fe3b40793c8d13ae58cf1a435049cc5d87d615b7603bc46eb4e_prof);

        
        $__internal_527bb0191ebc0f78991d65112229d07e4e234595151e72c7c5f4f36f73f1c51e->leave($__internal_527bb0191ebc0f78991d65112229d07e4e234595151e72c7c5f4f36f73f1c51e_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_6285d72baad65936703b988c04dc759c55f4c63b14d94709f41e2feb0c8cf5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6285d72baad65936703b988c04dc759c55f4c63b14d94709f41e2feb0c8cf5b3->enter($__internal_6285d72baad65936703b988c04dc759c55f4c63b14d94709f41e2feb0c8cf5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_679f075557a2dd00fecc4e9f0daa9c21477c95524ff3c375d52c28d5530fae01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679f075557a2dd00fecc4e9f0daa9c21477c95524ff3c375d52c28d5530fae01->enter($__internal_679f075557a2dd00fecc4e9f0daa9c21477c95524ff3c375d52c28d5530fae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

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
        
        $__internal_679f075557a2dd00fecc4e9f0daa9c21477c95524ff3c375d52c28d5530fae01->leave($__internal_679f075557a2dd00fecc4e9f0daa9c21477c95524ff3c375d52c28d5530fae01_prof);

        
        $__internal_6285d72baad65936703b988c04dc759c55f4c63b14d94709f41e2feb0c8cf5b3->leave($__internal_6285d72baad65936703b988c04dc759c55f4c63b14d94709f41e2feb0c8cf5b3_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:pages:categorylist.html.twig";
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



", "NotepadBundle:pages:categorylist.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/categorylist.html.twig");
    }
}

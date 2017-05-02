<?php

/* NotepadBundle:Pages:notelist.html.twig */
class __TwigTemplate_b342f8e1b4aabf1bf74725acf78e4d5cdb994f4110b13222f16c6ea00f719dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:pages:layout.html.twig", "NotepadBundle:Pages:notelist.html.twig", 1);
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
        $__internal_ee3d69b0568b9e9b36ee8d3580162f7fdde467faea9245ae78256816d855ae88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3d69b0568b9e9b36ee8d3580162f7fdde467faea9245ae78256816d855ae88->enter($__internal_ee3d69b0568b9e9b36ee8d3580162f7fdde467faea9245ae78256816d855ae88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:notelist.html.twig"));

        $__internal_37ac65052aac75f73f9985e6ce0ea993a515a71b3b5521fa2dc700071af7421c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ac65052aac75f73f9985e6ce0ea993a515a71b3b5521fa2dc700071af7421c->enter($__internal_37ac65052aac75f73f9985e6ce0ea993a515a71b3b5521fa2dc700071af7421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:Pages:notelist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee3d69b0568b9e9b36ee8d3580162f7fdde467faea9245ae78256816d855ae88->leave($__internal_ee3d69b0568b9e9b36ee8d3580162f7fdde467faea9245ae78256816d855ae88_prof);

        
        $__internal_37ac65052aac75f73f9985e6ce0ea993a515a71b3b5521fa2dc700071af7421c->leave($__internal_37ac65052aac75f73f9985e6ce0ea993a515a71b3b5521fa2dc700071af7421c_prof);

    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_ee451e757710645c3cf06caa5778722bcd3417fdc72975a716161be75e88441a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee451e757710645c3cf06caa5778722bcd3417fdc72975a716161be75e88441a->enter($__internal_ee451e757710645c3cf06caa5778722bcd3417fdc72975a716161be75e88441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_f9ab9c33d62aa4d8ac81831c7cae11983d5a8076014d15427da562d694401020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ab9c33d62aa4d8ac81831c7cae11983d5a8076014d15427da562d694401020->enter($__internal_f9ab9c33d62aa4d8ac81831c7cae11983d5a8076014d15427da562d694401020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        // line 4
        echo "\t<!-- Main component for a primary marketing message or call to action -->
\t
\t<table style=\"width:100%\">
\t\t<tr>
\t\t\t<td><h1>Note list</h1></td>
\t\t\t<td>
\t\t\t\t<!--<div class=\"pull-right\"><input type=\"text\" class=\"form-control\" id=\"searchBar\" placeholder=\"search\"></div>-->
\t\t\t\t";
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 12
        echo "\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 21
            echo "\t\t<div class=\"panel panel-info\">\t
\t\t\t<div class=\"panel-heading\">
\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "title", array()));
            echo "
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<i>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "categoryId", array()), "label", array()));
            echo "</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "content", array()));
            echo "
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div class=\"btn btn-clear\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a role=\"button\" class=\"btn btn-success\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editnote", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">Edit Note</a>
\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletenote", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">Delete Note</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        
        $__internal_f9ab9c33d62aa4d8ac81831c7cae11983d5a8076014d15427da562d694401020->leave($__internal_f9ab9c33d62aa4d8ac81831c7cae11983d5a8076014d15427da562d694401020_prof);

        
        $__internal_ee451e757710645c3cf06caa5778722bcd3417fdc72975a716161be75e88441a->leave($__internal_ee451e757710645c3cf06caa5778722bcd3417fdc72975a716161be75e88441a_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:Pages:notelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  114 => 36,  110 => 35,  105 => 33,  99 => 30,  91 => 25,  86 => 23,  82 => 21,  78 => 20,  69 => 14,  65 => 13,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

{%block block_content%}
\t<!-- Main component for a primary marketing message or call to action -->
\t
\t<table style=\"width:100%\">
\t\t<tr>
\t\t\t<td><h1>Note list</h1></td>
\t\t\t<td>
\t\t\t\t<!--<div class=\"pull-right\"><input type=\"text\" class=\"form-control\" id=\"searchBar\" placeholder=\"search\"></div>-->
\t\t\t\t{%form_theme form 'bootstrap_3_layout.html.twig'%}
\t\t\t\t{{form_start(form)}}
\t\t\t\t\t{{form_widget(form)}}
\t\t\t\t{{form_end(form)}}
\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t{%for note in notes%}
\t\t<div class=\"panel panel-info\">\t
\t\t\t<div class=\"panel-heading\">
\t\t\t\t{{note.title|e}}
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<i>{{note.categoryId.label|e}}</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"panel-body\">
\t\t\t\t{{note.content|e}}
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div class=\"btn btn-clear\">{{note.date|date('d-m-Y')}}</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a role=\"button\" class=\"btn btn-success\" href=\"{{path('editnote', {'id':note.id})}}\">Edit Note</a>
\t\t\t\t\t<a role=\"button\" class=\"btn btn-danger\" href=\"{{path('deletenote', {'id':note.id})}}\">Delete Note</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t{% endfor %}

{%endblock%}
", "NotepadBundle:Pages:notelist.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Pages/notelist.html.twig");
    }
}

<?php

/* NotepadBundle:Pages:notelist.html.twig */
class __TwigTemplate_553637cc41315741c753453d9698a4cdd625e86b1a9a28ac23a19983b6d7448d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block_content($context, array $blocks = array())
    {
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
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 12
        echo "\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "category", array()), "label", array()));
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
        return array (  110 => 44,  96 => 36,  92 => 35,  87 => 33,  81 => 30,  73 => 25,  68 => 23,  64 => 21,  60 => 20,  51 => 14,  47 => 13,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NotepadBundle:Pages:notelist.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/Pages/notelist.html.twig");
    }
}

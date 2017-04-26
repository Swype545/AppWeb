<?php

/* NotepadBundle:pages:layout.html.twig */
class __TwigTemplate_273e6748e76f1c751005b11d79022bc6b8c650b33b5a41b31d3fb954686287e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_content' => array($this, 'block_block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e569da47c3290c9d1d42e5cb300f59a43d1846fe75fd7da81b0f1fb382804332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e569da47c3290c9d1d42e5cb300f59a43d1846fe75fd7da81b0f1fb382804332->enter($__internal_e569da47c3290c9d1d42e5cb300f59a43d1846fe75fd7da81b0f1fb382804332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:layout.html.twig"));

        $__internal_c4e0666d68c70e01808bc5567cbe77b70ce39758b9956728be7e8020c146be7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e0666d68c70e01808bc5567cbe77b70ce39758b9956728be7e8020c146be7b->enter($__internal_c4e0666d68c70e01808bc5567cbe77b70ce39758b9956728be7e8020c146be7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tagInclude.js"), "html", null, true);
        echo "\"></script>
\t\t
\t
\t</head>
\t
\t
\t<body>
\t\t<div class=\"container\">
\t\t<nav class=\"navbar navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t  <div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notelist");
        echo "\">Notes</a>
\t\t\t  </div>
\t\t\t  <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t  <li class=\"active\"></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t  <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newnote");
        echo "\">Create note</a></li>
\t\t\t\t  <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newcategory");
        echo "\">Create category</a></li>
\t\t\t\t  <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorylist");
        echo "\">Category list</a></li>
\t\t\t\t</ul>
\t\t\t  </div><!--/.nav-collapse -->
\t\t\t</div><!--/.container-fluid -->
\t\t</nav>
\t\t
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 40
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t";
        $this->displayBlock('block_content', $context, $blocks);
        // line 45
        echo "\t</body>
</html>



";
        
        $__internal_e569da47c3290c9d1d42e5cb300f59a43d1846fe75fd7da81b0f1fb382804332->leave($__internal_e569da47c3290c9d1d42e5cb300f59a43d1846fe75fd7da81b0f1fb382804332_prof);

        
        $__internal_c4e0666d68c70e01808bc5567cbe77b70ce39758b9956728be7e8020c146be7b->leave($__internal_c4e0666d68c70e01808bc5567cbe77b70ce39758b9956728be7e8020c146be7b_prof);

    }

    // line 44
    public function block_block_content($context, array $blocks = array())
    {
        $__internal_3f6e1114dea0cf5cc9c8cfb1ad7771b23b49ab0a2a3b3b7bb8b4b6dd89c49ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6e1114dea0cf5cc9c8cfb1ad7771b23b49ab0a2a3b3b7bb8b4b6dd89c49ea5->enter($__internal_3f6e1114dea0cf5cc9c8cfb1ad7771b23b49ab0a2a3b3b7bb8b4b6dd89c49ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        $__internal_106870a0bfd4ac46f7508dd017acd1426f12b076c81d0a3fb8410c5cebec0209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106870a0bfd4ac46f7508dd017acd1426f12b076c81d0a3fb8410c5cebec0209->enter($__internal_106870a0bfd4ac46f7508dd017acd1426f12b076c81d0a3fb8410c5cebec0209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_content"));

        
        $__internal_106870a0bfd4ac46f7508dd017acd1426f12b076c81d0a3fb8410c5cebec0209->leave($__internal_106870a0bfd4ac46f7508dd017acd1426f12b076c81d0a3fb8410c5cebec0209_prof);

        
        $__internal_3f6e1114dea0cf5cc9c8cfb1ad7771b23b49ab0a2a3b3b7bb8b4b6dd89c49ea5->leave($__internal_3f6e1114dea0cf5cc9c8cfb1ad7771b23b49ab0a2a3b3b7bb8b4b6dd89c49ea5_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:pages:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  106 => 45,  103 => 44,  94 => 41,  91 => 40,  87 => 39,  78 => 33,  74 => 32,  70 => 31,  60 => 24,  40 => 7,  36 => 6,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\"/>
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<script type=\"text/javascript\" src=\"{{asset('js/jquery-3.1.1.min.js')}}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{asset('js/tagInclude.js')}}\"></script>
\t\t
\t
\t</head>
\t
\t
\t<body>
\t\t<div class=\"container\">
\t\t<nav class=\"navbar navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t  <div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('notelist') }}\">Notes</a>
\t\t\t  </div>
\t\t\t  <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t  <li class=\"active\"></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t  <li><a href=\"{{ path('newnote') }}\">Create note</a></li>
\t\t\t\t  <li><a href=\"{{ path('newcategory') }}\">Create category</a></li>
\t\t\t\t  <li><a href=\"{{ path('categorylist') }}\">Category list</a></li>
\t\t\t\t</ul>
\t\t\t  </div><!--/.nav-collapse -->
\t\t\t</div><!--/.container-fluid -->
\t\t</nav>
\t\t
\t\t{% for flash_message in app.session.flashBag.get('error') %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{ flash_message }}
\t\t\t</div>
\t\t{% endfor %}
\t\t{%block block_content%}{%endblock%}
\t</body>
</html>



", "NotepadBundle:pages:layout.html.twig", "C:\\wamp\\www\\AppWeb\\AppWeb\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/layout.html.twig");
    }
}

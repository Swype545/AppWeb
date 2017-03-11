<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24d7edc11aa449dbff1e76886cf064c9c9dd1567242a2239ebec8c07bb8f64cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d7edc11aa449dbff1e76886cf064c9c9dd1567242a2239ebec8c07bb8f64cc->enter($__internal_24d7edc11aa449dbff1e76886cf064c9c9dd1567242a2239ebec8c07bb8f64cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_994639c1e47aa3c2639a6ed1d7b568d8cd323f63705307ea1b3dfbefa7cae38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994639c1e47aa3c2639a6ed1d7b568d8cd323f63705307ea1b3dfbefa7cae38c->enter($__internal_994639c1e47aa3c2639a6ed1d7b568d8cd323f63705307ea1b3dfbefa7cae38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d7edc11aa449dbff1e76886cf064c9c9dd1567242a2239ebec8c07bb8f64cc->leave($__internal_24d7edc11aa449dbff1e76886cf064c9c9dd1567242a2239ebec8c07bb8f64cc_prof);

        
        $__internal_994639c1e47aa3c2639a6ed1d7b568d8cd323f63705307ea1b3dfbefa7cae38c->leave($__internal_994639c1e47aa3c2639a6ed1d7b568d8cd323f63705307ea1b3dfbefa7cae38c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92d9493f3f72bef361fd2ab8573f0d2c3d28ada6959af77eebc0262aa053baa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d9493f3f72bef361fd2ab8573f0d2c3d28ada6959af77eebc0262aa053baa7->enter($__internal_92d9493f3f72bef361fd2ab8573f0d2c3d28ada6959af77eebc0262aa053baa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b42cd291560f1b1e0b57874dce0b17fcec65bf46d819e6eafa92f9f7b80a24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b42cd291560f1b1e0b57874dce0b17fcec65bf46d819e6eafa92f9f7b80a24b->enter($__internal_9b42cd291560f1b1e0b57874dce0b17fcec65bf46d819e6eafa92f9f7b80a24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b42cd291560f1b1e0b57874dce0b17fcec65bf46d819e6eafa92f9f7b80a24b->leave($__internal_9b42cd291560f1b1e0b57874dce0b17fcec65bf46d819e6eafa92f9f7b80a24b_prof);

        
        $__internal_92d9493f3f72bef361fd2ab8573f0d2c3d28ada6959af77eebc0262aa053baa7->leave($__internal_92d9493f3f72bef361fd2ab8573f0d2c3d28ada6959af77eebc0262aa053baa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40ff2d58f3e593e7df04ebe538cb8dfe5e974ce95ce64d3cb7730582ee63e0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ff2d58f3e593e7df04ebe538cb8dfe5e974ce95ce64d3cb7730582ee63e0e3->enter($__internal_40ff2d58f3e593e7df04ebe538cb8dfe5e974ce95ce64d3cb7730582ee63e0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02292b21c32a3e14174d3f2027ccd26959553a0bf5c8923254ab8a4ed767e738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02292b21c32a3e14174d3f2027ccd26959553a0bf5c8923254ab8a4ed767e738->enter($__internal_02292b21c32a3e14174d3f2027ccd26959553a0bf5c8923254ab8a4ed767e738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02292b21c32a3e14174d3f2027ccd26959553a0bf5c8923254ab8a4ed767e738->leave($__internal_02292b21c32a3e14174d3f2027ccd26959553a0bf5c8923254ab8a4ed767e738_prof);

        
        $__internal_40ff2d58f3e593e7df04ebe538cb8dfe5e974ce95ce64d3cb7730582ee63e0e3->leave($__internal_40ff2d58f3e593e7df04ebe538cb8dfe5e974ce95ce64d3cb7730582ee63e0e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a0bc131ef5b5546191b2f8c6887df31c3b707ef71f1fbf39c9bf3b5fba6c3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0bc131ef5b5546191b2f8c6887df31c3b707ef71f1fbf39c9bf3b5fba6c3d2->enter($__internal_3a0bc131ef5b5546191b2f8c6887df31c3b707ef71f1fbf39c9bf3b5fba6c3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08e58733338241cc4f93b718dff4d2d39a5a2b5b93c4ef490b0e758bc8a9a1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e58733338241cc4f93b718dff4d2d39a5a2b5b93c4ef490b0e758bc8a9a1b2->enter($__internal_08e58733338241cc4f93b718dff4d2d39a5a2b5b93c4ef490b0e758bc8a9a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08e58733338241cc4f93b718dff4d2d39a5a2b5b93c4ef490b0e758bc8a9a1b2->leave($__internal_08e58733338241cc4f93b718dff4d2d39a5a2b5b93c4ef490b0e758bc8a9a1b2_prof);

        
        $__internal_3a0bc131ef5b5546191b2f8c6887df31c3b707ef71f1fbf39c9bf3b5fba6c3d2->leave($__internal_3a0bc131ef5b5546191b2f8c6887df31c3b707ef71f1fbf39c9bf3b5fba6c3d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

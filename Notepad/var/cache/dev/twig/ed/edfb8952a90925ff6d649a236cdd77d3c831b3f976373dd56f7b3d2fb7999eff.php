<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20ab53fd590c63c152a057b50391bba3c140fa8643b4c281212f53dc70999c3b extends Twig_Template
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
        $__internal_a16f0f7a91496e7d9e6ab65baf1d99061bdfb6b5351ead420b4ce4ab2712a07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16f0f7a91496e7d9e6ab65baf1d99061bdfb6b5351ead420b4ce4ab2712a07a->enter($__internal_a16f0f7a91496e7d9e6ab65baf1d99061bdfb6b5351ead420b4ce4ab2712a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8ea0659d618c56df8d67570115f48ff08caacb8237d8740e12fe0455c7d77236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea0659d618c56df8d67570115f48ff08caacb8237d8740e12fe0455c7d77236->enter($__internal_8ea0659d618c56df8d67570115f48ff08caacb8237d8740e12fe0455c7d77236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16f0f7a91496e7d9e6ab65baf1d99061bdfb6b5351ead420b4ce4ab2712a07a->leave($__internal_a16f0f7a91496e7d9e6ab65baf1d99061bdfb6b5351ead420b4ce4ab2712a07a_prof);

        
        $__internal_8ea0659d618c56df8d67570115f48ff08caacb8237d8740e12fe0455c7d77236->leave($__internal_8ea0659d618c56df8d67570115f48ff08caacb8237d8740e12fe0455c7d77236_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57fec4b7c197caede0e0b1c208e4f632b9274e5e5d99f1967851adc38876697d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fec4b7c197caede0e0b1c208e4f632b9274e5e5d99f1967851adc38876697d->enter($__internal_57fec4b7c197caede0e0b1c208e4f632b9274e5e5d99f1967851adc38876697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d49b54022148aa9a945f21b1353a014d139d8da4cd7c3be6b6b3424fe34a9237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49b54022148aa9a945f21b1353a014d139d8da4cd7c3be6b6b3424fe34a9237->enter($__internal_d49b54022148aa9a945f21b1353a014d139d8da4cd7c3be6b6b3424fe34a9237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d49b54022148aa9a945f21b1353a014d139d8da4cd7c3be6b6b3424fe34a9237->leave($__internal_d49b54022148aa9a945f21b1353a014d139d8da4cd7c3be6b6b3424fe34a9237_prof);

        
        $__internal_57fec4b7c197caede0e0b1c208e4f632b9274e5e5d99f1967851adc38876697d->leave($__internal_57fec4b7c197caede0e0b1c208e4f632b9274e5e5d99f1967851adc38876697d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57f2e25c0166dff0e40d74eb234988824f73b37b59c19551fb6319ff9b182b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f2e25c0166dff0e40d74eb234988824f73b37b59c19551fb6319ff9b182b99->enter($__internal_57f2e25c0166dff0e40d74eb234988824f73b37b59c19551fb6319ff9b182b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2eece950511bf4ad67f0ea25d13503ed04b390b71c79b99504988623b55c18ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eece950511bf4ad67f0ea25d13503ed04b390b71c79b99504988623b55c18ed->enter($__internal_2eece950511bf4ad67f0ea25d13503ed04b390b71c79b99504988623b55c18ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2eece950511bf4ad67f0ea25d13503ed04b390b71c79b99504988623b55c18ed->leave($__internal_2eece950511bf4ad67f0ea25d13503ed04b390b71c79b99504988623b55c18ed_prof);

        
        $__internal_57f2e25c0166dff0e40d74eb234988824f73b37b59c19551fb6319ff9b182b99->leave($__internal_57f2e25c0166dff0e40d74eb234988824f73b37b59c19551fb6319ff9b182b99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc005746c80052d9f0e5ce75123b5017d54ee1833dd0043d462d55f97cbd16f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc005746c80052d9f0e5ce75123b5017d54ee1833dd0043d462d55f97cbd16f5->enter($__internal_bc005746c80052d9f0e5ce75123b5017d54ee1833dd0043d462d55f97cbd16f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8fe0a4f55de47bb26a7138b52acb38de56bf88d273f081c39eb82ed0f9be8e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe0a4f55de47bb26a7138b52acb38de56bf88d273f081c39eb82ed0f9be8e44->enter($__internal_8fe0a4f55de47bb26a7138b52acb38de56bf88d273f081c39eb82ed0f9be8e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fe0a4f55de47bb26a7138b52acb38de56bf88d273f081c39eb82ed0f9be8e44->leave($__internal_8fe0a4f55de47bb26a7138b52acb38de56bf88d273f081c39eb82ed0f9be8e44_prof);

        
        $__internal_bc005746c80052d9f0e5ce75123b5017d54ee1833dd0043d462d55f97cbd16f5->leave($__internal_bc005746c80052d9f0e5ce75123b5017d54ee1833dd0043d462d55f97cbd16f5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

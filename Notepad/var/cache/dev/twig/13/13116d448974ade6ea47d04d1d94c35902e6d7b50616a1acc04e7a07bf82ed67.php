<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b57731c87e09c002dc189401c3d44ece2e7ca37122209e9ba118476edb6302dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32bc7e3ae2a40051c8431651b055912a1efb0cf46eb6381c56093a721de0cd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bc7e3ae2a40051c8431651b055912a1efb0cf46eb6381c56093a721de0cd73->enter($__internal_32bc7e3ae2a40051c8431651b055912a1efb0cf46eb6381c56093a721de0cd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e8f822c1bbb6368cfc310f14785b8d81ec3b600d08f8f75112a0a2464a8fcc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f822c1bbb6368cfc310f14785b8d81ec3b600d08f8f75112a0a2464a8fcc45->enter($__internal_e8f822c1bbb6368cfc310f14785b8d81ec3b600d08f8f75112a0a2464a8fcc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_32bc7e3ae2a40051c8431651b055912a1efb0cf46eb6381c56093a721de0cd73->leave($__internal_32bc7e3ae2a40051c8431651b055912a1efb0cf46eb6381c56093a721de0cd73_prof);

        
        $__internal_e8f822c1bbb6368cfc310f14785b8d81ec3b600d08f8f75112a0a2464a8fcc45->leave($__internal_e8f822c1bbb6368cfc310f14785b8d81ec3b600d08f8f75112a0a2464a8fcc45_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5ec23de7ce1b5ad6de533e2770200d0167f483516c5e5a02aa3a632e5678daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ec23de7ce1b5ad6de533e2770200d0167f483516c5e5a02aa3a632e5678daf->enter($__internal_b5ec23de7ce1b5ad6de533e2770200d0167f483516c5e5a02aa3a632e5678daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5fb3630bb8d1a1e5bb46b5746b26f06d0324b0a51c9ca9e869f077be693cbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fb3630bb8d1a1e5bb46b5746b26f06d0324b0a51c9ca9e869f077be693cbb2->enter($__internal_e5fb3630bb8d1a1e5bb46b5746b26f06d0324b0a51c9ca9e869f077be693cbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e5fb3630bb8d1a1e5bb46b5746b26f06d0324b0a51c9ca9e869f077be693cbb2->leave($__internal_e5fb3630bb8d1a1e5bb46b5746b26f06d0324b0a51c9ca9e869f077be693cbb2_prof);

        
        $__internal_b5ec23de7ce1b5ad6de533e2770200d0167f483516c5e5a02aa3a632e5678daf->leave($__internal_b5ec23de7ce1b5ad6de533e2770200d0167f483516c5e5a02aa3a632e5678daf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

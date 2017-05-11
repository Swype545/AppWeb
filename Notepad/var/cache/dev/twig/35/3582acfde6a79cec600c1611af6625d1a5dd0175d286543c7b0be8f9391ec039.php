<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0987af3b2136109bc2d88f984abffc6030bda2621a3b437452d4b89f42715a37 extends Twig_Template
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
        $__internal_4bfaac8d99a4d0d920e375258c0cc24c6263dbc858512e9956b9c8ffa4b1eaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfaac8d99a4d0d920e375258c0cc24c6263dbc858512e9956b9c8ffa4b1eaa2->enter($__internal_4bfaac8d99a4d0d920e375258c0cc24c6263dbc858512e9956b9c8ffa4b1eaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fea233441a162d4caae63113a626c4dbaeb0fc676ea6378847b95e58015282e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea233441a162d4caae63113a626c4dbaeb0fc676ea6378847b95e58015282e5->enter($__internal_fea233441a162d4caae63113a626c4dbaeb0fc676ea6378847b95e58015282e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4bfaac8d99a4d0d920e375258c0cc24c6263dbc858512e9956b9c8ffa4b1eaa2->leave($__internal_4bfaac8d99a4d0d920e375258c0cc24c6263dbc858512e9956b9c8ffa4b1eaa2_prof);

        
        $__internal_fea233441a162d4caae63113a626c4dbaeb0fc676ea6378847b95e58015282e5->leave($__internal_fea233441a162d4caae63113a626c4dbaeb0fc676ea6378847b95e58015282e5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8fef79ae82c9a92b74796015a669142a0864b989b0b81a67337886d5dcea6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fef79ae82c9a92b74796015a669142a0864b989b0b81a67337886d5dcea6c8->enter($__internal_c8fef79ae82c9a92b74796015a669142a0864b989b0b81a67337886d5dcea6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ceb17524e214e473f539d49478e2f5be44ec661384424ec7ceeab727cc522cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb17524e214e473f539d49478e2f5be44ec661384424ec7ceeab727cc522cf3->enter($__internal_ceb17524e214e473f539d49478e2f5be44ec661384424ec7ceeab727cc522cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ceb17524e214e473f539d49478e2f5be44ec661384424ec7ceeab727cc522cf3->leave($__internal_ceb17524e214e473f539d49478e2f5be44ec661384424ec7ceeab727cc522cf3_prof);

        
        $__internal_c8fef79ae82c9a92b74796015a669142a0864b989b0b81a67337886d5dcea6c8->leave($__internal_c8fef79ae82c9a92b74796015a669142a0864b989b0b81a67337886d5dcea6c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

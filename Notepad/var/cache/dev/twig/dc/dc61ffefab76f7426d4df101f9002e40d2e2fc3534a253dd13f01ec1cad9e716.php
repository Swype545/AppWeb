<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1ef0b6169f7986197c95b1907854ecedba337238bfbc33d053d87f73c0e01f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2b06a4a240adff5b2bf2588364f0d81292d809a482e1ed524243cf820dabf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2b06a4a240adff5b2bf2588364f0d81292d809a482e1ed524243cf820dabf9->enter($__internal_7a2b06a4a240adff5b2bf2588364f0d81292d809a482e1ed524243cf820dabf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fda9df1005eb692ddde973801fc348b9408d9b212da947cd27e3c0d32fa85fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda9df1005eb692ddde973801fc348b9408d9b212da947cd27e3c0d32fa85fe7->enter($__internal_fda9df1005eb692ddde973801fc348b9408d9b212da947cd27e3c0d32fa85fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7a2b06a4a240adff5b2bf2588364f0d81292d809a482e1ed524243cf820dabf9->leave($__internal_7a2b06a4a240adff5b2bf2588364f0d81292d809a482e1ed524243cf820dabf9_prof);

        
        $__internal_fda9df1005eb692ddde973801fc348b9408d9b212da947cd27e3c0d32fa85fe7->leave($__internal_fda9df1005eb692ddde973801fc348b9408d9b212da947cd27e3c0d32fa85fe7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

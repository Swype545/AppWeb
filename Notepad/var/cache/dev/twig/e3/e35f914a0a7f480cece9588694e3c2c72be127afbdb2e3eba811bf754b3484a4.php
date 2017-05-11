<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_49c2915d46929d45fc6ee5752d539538adf68fe965971200b5aa602a23126be3 extends Twig_Template
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
        $__internal_ab2134bf7417751dcb63c241b6bd698b1a0e3af98b2dfa322314d7132cc0c658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2134bf7417751dcb63c241b6bd698b1a0e3af98b2dfa322314d7132cc0c658->enter($__internal_ab2134bf7417751dcb63c241b6bd698b1a0e3af98b2dfa322314d7132cc0c658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_483b1c2902a6f9d548ad92e7726c797a134e04902e39df778d4f67b0e7bb4cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483b1c2902a6f9d548ad92e7726c797a134e04902e39df778d4f67b0e7bb4cc5->enter($__internal_483b1c2902a6f9d548ad92e7726c797a134e04902e39df778d4f67b0e7bb4cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ab2134bf7417751dcb63c241b6bd698b1a0e3af98b2dfa322314d7132cc0c658->leave($__internal_ab2134bf7417751dcb63c241b6bd698b1a0e3af98b2dfa322314d7132cc0c658_prof);

        
        $__internal_483b1c2902a6f9d548ad92e7726c797a134e04902e39df778d4f67b0e7bb4cc5->leave($__internal_483b1c2902a6f9d548ad92e7726c797a134e04902e39df778d4f67b0e7bb4cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

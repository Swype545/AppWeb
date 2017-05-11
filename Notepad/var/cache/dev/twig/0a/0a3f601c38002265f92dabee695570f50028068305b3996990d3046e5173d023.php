<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_297f297af989a78d97688a4dcfc8d57f76eac68167b852e055e41cbe18c68ae2 extends Twig_Template
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
        $__internal_f9f1ed8175ae628c81b05489fd605eb6832bed94b970d0d33146a766af8b6321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f1ed8175ae628c81b05489fd605eb6832bed94b970d0d33146a766af8b6321->enter($__internal_f9f1ed8175ae628c81b05489fd605eb6832bed94b970d0d33146a766af8b6321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e8e9fb7af146d2da2f825cffef0d7506ebfbd8519d42bf409bf094ea3eb2bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8e9fb7af146d2da2f825cffef0d7506ebfbd8519d42bf409bf094ea3eb2bae->enter($__internal_5e8e9fb7af146d2da2f825cffef0d7506ebfbd8519d42bf409bf094ea3eb2bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f9f1ed8175ae628c81b05489fd605eb6832bed94b970d0d33146a766af8b6321->leave($__internal_f9f1ed8175ae628c81b05489fd605eb6832bed94b970d0d33146a766af8b6321_prof);

        
        $__internal_5e8e9fb7af146d2da2f825cffef0d7506ebfbd8519d42bf409bf094ea3eb2bae->leave($__internal_5e8e9fb7af146d2da2f825cffef0d7506ebfbd8519d42bf409bf094ea3eb2bae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

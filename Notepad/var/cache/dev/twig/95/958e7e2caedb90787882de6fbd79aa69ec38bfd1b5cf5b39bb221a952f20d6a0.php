<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_425466b6b363d08fcbdd68352cba17ea8600db9bcee616a1b93f5f9005916814 extends Twig_Template
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
        $__internal_6e3945184b7f75bd7a20f3a33790d15f6df69436cf91fe8f356e6da338648ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3945184b7f75bd7a20f3a33790d15f6df69436cf91fe8f356e6da338648ca7->enter($__internal_6e3945184b7f75bd7a20f3a33790d15f6df69436cf91fe8f356e6da338648ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5d0444b273e00212c84bbfeaf32352800c329841348194f48550ba4d47fbe778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0444b273e00212c84bbfeaf32352800c329841348194f48550ba4d47fbe778->enter($__internal_5d0444b273e00212c84bbfeaf32352800c329841348194f48550ba4d47fbe778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6e3945184b7f75bd7a20f3a33790d15f6df69436cf91fe8f356e6da338648ca7->leave($__internal_6e3945184b7f75bd7a20f3a33790d15f6df69436cf91fe8f356e6da338648ca7_prof);

        
        $__internal_5d0444b273e00212c84bbfeaf32352800c329841348194f48550ba4d47fbe778->leave($__internal_5d0444b273e00212c84bbfeaf32352800c329841348194f48550ba4d47fbe778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

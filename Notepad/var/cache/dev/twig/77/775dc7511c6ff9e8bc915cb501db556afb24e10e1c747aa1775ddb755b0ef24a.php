<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9208ee9ea28fb976d47039db51f60f32fd63c9162f4f5c842e6db832561cec06 extends Twig_Template
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
        $__internal_2a6c0e75504ae092fb7957a90f6d909ee07015d900a7aa2916577127866edbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6c0e75504ae092fb7957a90f6d909ee07015d900a7aa2916577127866edbef->enter($__internal_2a6c0e75504ae092fb7957a90f6d909ee07015d900a7aa2916577127866edbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9269dba2196d954724e6139b243ed71f00ad622489a09a072bd13bfd013bc821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9269dba2196d954724e6139b243ed71f00ad622489a09a072bd13bfd013bc821->enter($__internal_9269dba2196d954724e6139b243ed71f00ad622489a09a072bd13bfd013bc821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2a6c0e75504ae092fb7957a90f6d909ee07015d900a7aa2916577127866edbef->leave($__internal_2a6c0e75504ae092fb7957a90f6d909ee07015d900a7aa2916577127866edbef_prof);

        
        $__internal_9269dba2196d954724e6139b243ed71f00ad622489a09a072bd13bfd013bc821->leave($__internal_9269dba2196d954724e6139b243ed71f00ad622489a09a072bd13bfd013bc821_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}

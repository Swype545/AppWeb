<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_503ad41de627e5eba04b1a5694ed8f467811d4ee88f4dbe76fc8909fd282a061 extends Twig_Template
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
        $__internal_e454f925fbb172094a0acf9d089b679d5fbc51de417a219adf112ff2f56cac3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e454f925fbb172094a0acf9d089b679d5fbc51de417a219adf112ff2f56cac3c->enter($__internal_e454f925fbb172094a0acf9d089b679d5fbc51de417a219adf112ff2f56cac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_20879cbc05a35abbb04b5b5ef7bcab603fe154cf503322577205e9a35d50eb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20879cbc05a35abbb04b5b5ef7bcab603fe154cf503322577205e9a35d50eb56->enter($__internal_20879cbc05a35abbb04b5b5ef7bcab603fe154cf503322577205e9a35d50eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e454f925fbb172094a0acf9d089b679d5fbc51de417a219adf112ff2f56cac3c->leave($__internal_e454f925fbb172094a0acf9d089b679d5fbc51de417a219adf112ff2f56cac3c_prof);

        
        $__internal_20879cbc05a35abbb04b5b5ef7bcab603fe154cf503322577205e9a35d50eb56->leave($__internal_20879cbc05a35abbb04b5b5ef7bcab603fe154cf503322577205e9a35d50eb56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

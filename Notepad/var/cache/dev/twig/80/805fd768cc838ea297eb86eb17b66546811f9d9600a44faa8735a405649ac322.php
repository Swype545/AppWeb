<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3ae7387a119c0c88c61f126f529d98bfdb27b4d8bb5dc0681284e99ce24ebae0 extends Twig_Template
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
        $__internal_0162576177d5addc83692186dd40a4dd12b21b366e9b5856ca8fe4cb5021d260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0162576177d5addc83692186dd40a4dd12b21b366e9b5856ca8fe4cb5021d260->enter($__internal_0162576177d5addc83692186dd40a4dd12b21b366e9b5856ca8fe4cb5021d260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1e1acee00eda48ec1fd840177bbce74c2080ce7705ee69a4991b2a00997c120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1acee00eda48ec1fd840177bbce74c2080ce7705ee69a4991b2a00997c120f->enter($__internal_1e1acee00eda48ec1fd840177bbce74c2080ce7705ee69a4991b2a00997c120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0162576177d5addc83692186dd40a4dd12b21b366e9b5856ca8fe4cb5021d260->leave($__internal_0162576177d5addc83692186dd40a4dd12b21b366e9b5856ca8fe4cb5021d260_prof);

        
        $__internal_1e1acee00eda48ec1fd840177bbce74c2080ce7705ee69a4991b2a00997c120f->leave($__internal_1e1acee00eda48ec1fd840177bbce74c2080ce7705ee69a4991b2a00997c120f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

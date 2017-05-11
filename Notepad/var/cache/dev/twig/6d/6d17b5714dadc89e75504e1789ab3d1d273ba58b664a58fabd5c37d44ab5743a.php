<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f0c88ccb2c9f09bd162eac28fb4f9b671045f6bf5bbab71f457a95fce37bc32 extends Twig_Template
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
        $__internal_03635876992edd9f5886dc91b4f254b55e83b51a99333705d8833835e6f24d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03635876992edd9f5886dc91b4f254b55e83b51a99333705d8833835e6f24d63->enter($__internal_03635876992edd9f5886dc91b4f254b55e83b51a99333705d8833835e6f24d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_79832da068e56d5c063631c9c7904f023fa0f7b857d977e3c7b084640bf514cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79832da068e56d5c063631c9c7904f023fa0f7b857d977e3c7b084640bf514cf->enter($__internal_79832da068e56d5c063631c9c7904f023fa0f7b857d977e3c7b084640bf514cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03635876992edd9f5886dc91b4f254b55e83b51a99333705d8833835e6f24d63->leave($__internal_03635876992edd9f5886dc91b4f254b55e83b51a99333705d8833835e6f24d63_prof);

        
        $__internal_79832da068e56d5c063631c9c7904f023fa0f7b857d977e3c7b084640bf514cf->leave($__internal_79832da068e56d5c063631c9c7904f023fa0f7b857d977e3c7b084640bf514cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

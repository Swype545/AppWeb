<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_189d05ba4648cd60cc3ae6f18947e25a621792a01a8467ff7b41be17c9a7ab2a extends Twig_Template
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
        $__internal_1e02ee53380fe1691ba5631ae7ccf791d96f969de7a2392dbd9d0a789099ed1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e02ee53380fe1691ba5631ae7ccf791d96f969de7a2392dbd9d0a789099ed1a->enter($__internal_1e02ee53380fe1691ba5631ae7ccf791d96f969de7a2392dbd9d0a789099ed1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f7b5eb9025c44ec4afc2ea998f6536d2b355edae2313ef664504533f03a92c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b5eb9025c44ec4afc2ea998f6536d2b355edae2313ef664504533f03a92c98->enter($__internal_f7b5eb9025c44ec4afc2ea998f6536d2b355edae2313ef664504533f03a92c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1e02ee53380fe1691ba5631ae7ccf791d96f969de7a2392dbd9d0a789099ed1a->leave($__internal_1e02ee53380fe1691ba5631ae7ccf791d96f969de7a2392dbd9d0a789099ed1a_prof);

        
        $__internal_f7b5eb9025c44ec4afc2ea998f6536d2b355edae2313ef664504533f03a92c98->leave($__internal_f7b5eb9025c44ec4afc2ea998f6536d2b355edae2313ef664504533f03a92c98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

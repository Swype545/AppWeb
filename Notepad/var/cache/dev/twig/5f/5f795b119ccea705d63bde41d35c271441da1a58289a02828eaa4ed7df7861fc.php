<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9832005d38dd31a29df6aaa56ba2adc98cdba2ed6ed99ca4523033c3b1a69b37 extends Twig_Template
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
        $__internal_82f17027b2e7d879ae938144aea4fb7592debfe57e4c5ed9557bf50601fca699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f17027b2e7d879ae938144aea4fb7592debfe57e4c5ed9557bf50601fca699->enter($__internal_82f17027b2e7d879ae938144aea4fb7592debfe57e4c5ed9557bf50601fca699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_31162ba76f3c1b1cffe2f57d5e237ca2f11c48e4073c77460345c19f8385f4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31162ba76f3c1b1cffe2f57d5e237ca2f11c48e4073c77460345c19f8385f4f1->enter($__internal_31162ba76f3c1b1cffe2f57d5e237ca2f11c48e4073c77460345c19f8385f4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_82f17027b2e7d879ae938144aea4fb7592debfe57e4c5ed9557bf50601fca699->leave($__internal_82f17027b2e7d879ae938144aea4fb7592debfe57e4c5ed9557bf50601fca699_prof);

        
        $__internal_31162ba76f3c1b1cffe2f57d5e237ca2f11c48e4073c77460345c19f8385f4f1->leave($__internal_31162ba76f3c1b1cffe2f57d5e237ca2f11c48e4073c77460345c19f8385f4f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

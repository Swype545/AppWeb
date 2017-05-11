<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cf6066bca985e421fa597251fca1462024b4961002988a4e91237efdeb7f3175 extends Twig_Template
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
        $__internal_9495bb74b98a488dbaa2e24a653841821c7c23620d1373b1b26848743ed025d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9495bb74b98a488dbaa2e24a653841821c7c23620d1373b1b26848743ed025d6->enter($__internal_9495bb74b98a488dbaa2e24a653841821c7c23620d1373b1b26848743ed025d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_20ca4b67e4f4e959cb16d08a16490ce8aa66b0c1364ff2feb3464747fee9bdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ca4b67e4f4e959cb16d08a16490ce8aa66b0c1364ff2feb3464747fee9bdfd->enter($__internal_20ca4b67e4f4e959cb16d08a16490ce8aa66b0c1364ff2feb3464747fee9bdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9495bb74b98a488dbaa2e24a653841821c7c23620d1373b1b26848743ed025d6->leave($__internal_9495bb74b98a488dbaa2e24a653841821c7c23620d1373b1b26848743ed025d6_prof);

        
        $__internal_20ca4b67e4f4e959cb16d08a16490ce8aa66b0c1364ff2feb3464747fee9bdfd->leave($__internal_20ca4b67e4f4e959cb16d08a16490ce8aa66b0c1364ff2feb3464747fee9bdfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

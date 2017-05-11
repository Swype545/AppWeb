<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b7def84b6c9ad0ba5fad4d26af0a31c0aa5e0fbcf6369fc8d3ecb6842bc7b71b extends Twig_Template
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
        $__internal_252bd4921b1cbcc4998e748032e95ec3bb2872f5c5d028603c3dd7743aae3c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252bd4921b1cbcc4998e748032e95ec3bb2872f5c5d028603c3dd7743aae3c1d->enter($__internal_252bd4921b1cbcc4998e748032e95ec3bb2872f5c5d028603c3dd7743aae3c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bb017a3f58126d48aba9684d13aeb6ac028a89d0967dd20ef33f81a2c3f75499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb017a3f58126d48aba9684d13aeb6ac028a89d0967dd20ef33f81a2c3f75499->enter($__internal_bb017a3f58126d48aba9684d13aeb6ac028a89d0967dd20ef33f81a2c3f75499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_252bd4921b1cbcc4998e748032e95ec3bb2872f5c5d028603c3dd7743aae3c1d->leave($__internal_252bd4921b1cbcc4998e748032e95ec3bb2872f5c5d028603c3dd7743aae3c1d_prof);

        
        $__internal_bb017a3f58126d48aba9684d13aeb6ac028a89d0967dd20ef33f81a2c3f75499->leave($__internal_bb017a3f58126d48aba9684d13aeb6ac028a89d0967dd20ef33f81a2c3f75499_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

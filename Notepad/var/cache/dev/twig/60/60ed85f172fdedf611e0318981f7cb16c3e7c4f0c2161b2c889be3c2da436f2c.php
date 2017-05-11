<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_98d43365da801a3d735160006c60e9ae3ad62fa1655a72f0ea89fe5ca39cd64f extends Twig_Template
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
        $__internal_864074b2839191e14231432f9d4d7a5355b74805d0c06f493ad69c1f9bf16e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864074b2839191e14231432f9d4d7a5355b74805d0c06f493ad69c1f9bf16e8e->enter($__internal_864074b2839191e14231432f9d4d7a5355b74805d0c06f493ad69c1f9bf16e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_30bead8bebbf5b9a0a7a5bd9c57cb698fe91f0b2f05e3be27e37d04e74d6c5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bead8bebbf5b9a0a7a5bd9c57cb698fe91f0b2f05e3be27e37d04e74d6c5da->enter($__internal_30bead8bebbf5b9a0a7a5bd9c57cb698fe91f0b2f05e3be27e37d04e74d6c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_864074b2839191e14231432f9d4d7a5355b74805d0c06f493ad69c1f9bf16e8e->leave($__internal_864074b2839191e14231432f9d4d7a5355b74805d0c06f493ad69c1f9bf16e8e_prof);

        
        $__internal_30bead8bebbf5b9a0a7a5bd9c57cb698fe91f0b2f05e3be27e37d04e74d6c5da->leave($__internal_30bead8bebbf5b9a0a7a5bd9c57cb698fe91f0b2f05e3be27e37d04e74d6c5da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}

<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bbc3cac113469f4e552a9cf321a2d97d8c3250555a5f44ee57c9b7cd33bee98b extends Twig_Template
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
        $__internal_03b6b69c07bc1401437e8ef45d4acd2e5936ebb4c363bbe86a379575e2b6d19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b6b69c07bc1401437e8ef45d4acd2e5936ebb4c363bbe86a379575e2b6d19d->enter($__internal_03b6b69c07bc1401437e8ef45d4acd2e5936ebb4c363bbe86a379575e2b6d19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_01e6621981152d2c5b62b927ad07c13758bf19a94f2cfa1bbc26640d1e2ff3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e6621981152d2c5b62b927ad07c13758bf19a94f2cfa1bbc26640d1e2ff3f6->enter($__internal_01e6621981152d2c5b62b927ad07c13758bf19a94f2cfa1bbc26640d1e2ff3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_03b6b69c07bc1401437e8ef45d4acd2e5936ebb4c363bbe86a379575e2b6d19d->leave($__internal_03b6b69c07bc1401437e8ef45d4acd2e5936ebb4c363bbe86a379575e2b6d19d_prof);

        
        $__internal_01e6621981152d2c5b62b927ad07c13758bf19a94f2cfa1bbc26640d1e2ff3f6->leave($__internal_01e6621981152d2c5b62b927ad07c13758bf19a94f2cfa1bbc26640d1e2ff3f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

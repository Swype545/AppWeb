<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f2ee879281f7a36235154aa4809125259d6baf87c3c004ddf9b5c253983a71cd extends Twig_Template
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
        $__internal_c852989407729a696093648622dc11ac8984d918536f30ad22db8cbbca3820d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c852989407729a696093648622dc11ac8984d918536f30ad22db8cbbca3820d9->enter($__internal_c852989407729a696093648622dc11ac8984d918536f30ad22db8cbbca3820d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4a4f842b7907254a1e73757bf7d85861a365f93200bfa66a0edd515b4dcd3eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4f842b7907254a1e73757bf7d85861a365f93200bfa66a0edd515b4dcd3eae->enter($__internal_4a4f842b7907254a1e73757bf7d85861a365f93200bfa66a0edd515b4dcd3eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c852989407729a696093648622dc11ac8984d918536f30ad22db8cbbca3820d9->leave($__internal_c852989407729a696093648622dc11ac8984d918536f30ad22db8cbbca3820d9_prof);

        
        $__internal_4a4f842b7907254a1e73757bf7d85861a365f93200bfa66a0edd515b4dcd3eae->leave($__internal_4a4f842b7907254a1e73757bf7d85861a365f93200bfa66a0edd515b4dcd3eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

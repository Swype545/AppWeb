<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e8d5fda3abc9b5a172a7b1202b2e3ed32b6da1d6fb88351397fe12d883115cd9 extends Twig_Template
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
        $__internal_5302a4aa72c8baa31c4ff859bdd88ff5b2ebf62e4bc6498778004da3488926c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5302a4aa72c8baa31c4ff859bdd88ff5b2ebf62e4bc6498778004da3488926c8->enter($__internal_5302a4aa72c8baa31c4ff859bdd88ff5b2ebf62e4bc6498778004da3488926c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d8c7cb3844a456524b20c1fcc31225de89df475eb1d90afb536f1a00764305fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c7cb3844a456524b20c1fcc31225de89df475eb1d90afb536f1a00764305fe->enter($__internal_d8c7cb3844a456524b20c1fcc31225de89df475eb1d90afb536f1a00764305fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5302a4aa72c8baa31c4ff859bdd88ff5b2ebf62e4bc6498778004da3488926c8->leave($__internal_5302a4aa72c8baa31c4ff859bdd88ff5b2ebf62e4bc6498778004da3488926c8_prof);

        
        $__internal_d8c7cb3844a456524b20c1fcc31225de89df475eb1d90afb536f1a00764305fe->leave($__internal_d8c7cb3844a456524b20c1fcc31225de89df475eb1d90afb536f1a00764305fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

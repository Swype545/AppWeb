<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_dc1ca239f2b31104beda48656d874d48d9e30cab56e866233b9a6c1446f99d73 extends Twig_Template
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
        $__internal_a00bf95f40e9876148c9a223b8b2b880bbae16b849248af658202eacb6c27068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00bf95f40e9876148c9a223b8b2b880bbae16b849248af658202eacb6c27068->enter($__internal_a00bf95f40e9876148c9a223b8b2b880bbae16b849248af658202eacb6c27068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_52025f0537402856893fec6accd6d4602a0646c0a9470b3948df42a623503885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52025f0537402856893fec6accd6d4602a0646c0a9470b3948df42a623503885->enter($__internal_52025f0537402856893fec6accd6d4602a0646c0a9470b3948df42a623503885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a00bf95f40e9876148c9a223b8b2b880bbae16b849248af658202eacb6c27068->leave($__internal_a00bf95f40e9876148c9a223b8b2b880bbae16b849248af658202eacb6c27068_prof);

        
        $__internal_52025f0537402856893fec6accd6d4602a0646c0a9470b3948df42a623503885->leave($__internal_52025f0537402856893fec6accd6d4602a0646c0a9470b3948df42a623503885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_183b62ad5f4db770d97fda2d60635515c8f2d50e1b57fce2b1ec92baef8a2986 extends Twig_Template
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
        $__internal_62d7f5f54beb0576e26c9fd0192c3bfe9a44e3765b7cc791c67a8b6153a71268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d7f5f54beb0576e26c9fd0192c3bfe9a44e3765b7cc791c67a8b6153a71268->enter($__internal_62d7f5f54beb0576e26c9fd0192c3bfe9a44e3765b7cc791c67a8b6153a71268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_288d11b1292b30b5435c86d3cfb3c101a145beda13599897548277d9ac16a501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288d11b1292b30b5435c86d3cfb3c101a145beda13599897548277d9ac16a501->enter($__internal_288d11b1292b30b5435c86d3cfb3c101a145beda13599897548277d9ac16a501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_62d7f5f54beb0576e26c9fd0192c3bfe9a44e3765b7cc791c67a8b6153a71268->leave($__internal_62d7f5f54beb0576e26c9fd0192c3bfe9a44e3765b7cc791c67a8b6153a71268_prof);

        
        $__internal_288d11b1292b30b5435c86d3cfb3c101a145beda13599897548277d9ac16a501->leave($__internal_288d11b1292b30b5435c86d3cfb3c101a145beda13599897548277d9ac16a501_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_099c24a645e9edf9a7f0aa6468881dfbf61ac6cc897316490a5dbf96b6b191f5 extends Twig_Template
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
        $__internal_764031292e40e40afe4a8a573d4d195119a7700a3ed4f7ee00d2d28835271ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764031292e40e40afe4a8a573d4d195119a7700a3ed4f7ee00d2d28835271ea4->enter($__internal_764031292e40e40afe4a8a573d4d195119a7700a3ed4f7ee00d2d28835271ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fdd0760cf18ea4dade22a6aa4385fefbe4ee5a7d3f68deafa39ca2a6a8940aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd0760cf18ea4dade22a6aa4385fefbe4ee5a7d3f68deafa39ca2a6a8940aeb->enter($__internal_fdd0760cf18ea4dade22a6aa4385fefbe4ee5a7d3f68deafa39ca2a6a8940aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_764031292e40e40afe4a8a573d4d195119a7700a3ed4f7ee00d2d28835271ea4->leave($__internal_764031292e40e40afe4a8a573d4d195119a7700a3ed4f7ee00d2d28835271ea4_prof);

        
        $__internal_fdd0760cf18ea4dade22a6aa4385fefbe4ee5a7d3f68deafa39ca2a6a8940aeb->leave($__internal_fdd0760cf18ea4dade22a6aa4385fefbe4ee5a7d3f68deafa39ca2a6a8940aeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

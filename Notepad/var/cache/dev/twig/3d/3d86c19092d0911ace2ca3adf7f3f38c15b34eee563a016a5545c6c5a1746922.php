<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c8d994b9c2b87f44129d0894dfab47a3313d63814865c2e3be5c8c0afaf54762 extends Twig_Template
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
        $__internal_4e0f23fd7c82e3734b808c32446447644a001192181499253e44d0e1ef5cca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0f23fd7c82e3734b808c32446447644a001192181499253e44d0e1ef5cca4a->enter($__internal_4e0f23fd7c82e3734b808c32446447644a001192181499253e44d0e1ef5cca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4a49882e084f614a87c63ba7aa7d3030e1afe8fac8bf739c454cef8ea038eb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a49882e084f614a87c63ba7aa7d3030e1afe8fac8bf739c454cef8ea038eb95->enter($__internal_4a49882e084f614a87c63ba7aa7d3030e1afe8fac8bf739c454cef8ea038eb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4e0f23fd7c82e3734b808c32446447644a001192181499253e44d0e1ef5cca4a->leave($__internal_4e0f23fd7c82e3734b808c32446447644a001192181499253e44d0e1ef5cca4a_prof);

        
        $__internal_4a49882e084f614a87c63ba7aa7d3030e1afe8fac8bf739c454cef8ea038eb95->leave($__internal_4a49882e084f614a87c63ba7aa7d3030e1afe8fac8bf739c454cef8ea038eb95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

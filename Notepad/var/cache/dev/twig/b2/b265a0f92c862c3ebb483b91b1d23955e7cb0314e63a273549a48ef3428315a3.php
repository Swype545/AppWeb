<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0cea62fa7775311865fa2236c97f7f75fb68c10a2e7e7986944d9afb476ac253 extends Twig_Template
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
        $__internal_e015f3fbe8128e41de4245dfe4d6d01cef48b36b87e2a7c6ad662c4ae485f012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e015f3fbe8128e41de4245dfe4d6d01cef48b36b87e2a7c6ad662c4ae485f012->enter($__internal_e015f3fbe8128e41de4245dfe4d6d01cef48b36b87e2a7c6ad662c4ae485f012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3470deed0de1c86a6d1427ee958c5674249393c8838b6fab6e45fee8343a1089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3470deed0de1c86a6d1427ee958c5674249393c8838b6fab6e45fee8343a1089->enter($__internal_3470deed0de1c86a6d1427ee958c5674249393c8838b6fab6e45fee8343a1089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e015f3fbe8128e41de4245dfe4d6d01cef48b36b87e2a7c6ad662c4ae485f012->leave($__internal_e015f3fbe8128e41de4245dfe4d6d01cef48b36b87e2a7c6ad662c4ae485f012_prof);

        
        $__internal_3470deed0de1c86a6d1427ee958c5674249393c8838b6fab6e45fee8343a1089->leave($__internal_3470deed0de1c86a6d1427ee958c5674249393c8838b6fab6e45fee8343a1089_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

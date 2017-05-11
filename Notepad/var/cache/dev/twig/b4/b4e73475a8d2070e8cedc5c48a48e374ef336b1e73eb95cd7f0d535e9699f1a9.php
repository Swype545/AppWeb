<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9614928ba5a278dea8ebdaa589537bed6570fb0e5f04c2c3b33e9284432d601c extends Twig_Template
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
        $__internal_b23668da1a3109c6086c5a2a869de60b51e78f52b5969a6722234ed36ab90174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23668da1a3109c6086c5a2a869de60b51e78f52b5969a6722234ed36ab90174->enter($__internal_b23668da1a3109c6086c5a2a869de60b51e78f52b5969a6722234ed36ab90174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_eba0a2f0b757fa4529e462ee235af9071e338aa4cc1cbbf6fdbd92b994735c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba0a2f0b757fa4529e462ee235af9071e338aa4cc1cbbf6fdbd92b994735c6d->enter($__internal_eba0a2f0b757fa4529e462ee235af9071e338aa4cc1cbbf6fdbd92b994735c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b23668da1a3109c6086c5a2a869de60b51e78f52b5969a6722234ed36ab90174->leave($__internal_b23668da1a3109c6086c5a2a869de60b51e78f52b5969a6722234ed36ab90174_prof);

        
        $__internal_eba0a2f0b757fa4529e462ee235af9071e338aa4cc1cbbf6fdbd92b994735c6d->leave($__internal_eba0a2f0b757fa4529e462ee235af9071e338aa4cc1cbbf6fdbd92b994735c6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

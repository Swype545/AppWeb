<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cb656b6eb8fd2eff6b0e7f49a9c9462a94c52b271c27e3964dcf001d6ff423c8 extends Twig_Template
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
        $__internal_31a781f5bbca27cc28ebfa0a210215809df9d8ec195b07a84c98434b2244672c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a781f5bbca27cc28ebfa0a210215809df9d8ec195b07a84c98434b2244672c->enter($__internal_31a781f5bbca27cc28ebfa0a210215809df9d8ec195b07a84c98434b2244672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_ff438315481e708099e00a474552e2c07c9434d01c325985dc44a66a585f1db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff438315481e708099e00a474552e2c07c9434d01c325985dc44a66a585f1db5->enter($__internal_ff438315481e708099e00a474552e2c07c9434d01c325985dc44a66a585f1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_31a781f5bbca27cc28ebfa0a210215809df9d8ec195b07a84c98434b2244672c->leave($__internal_31a781f5bbca27cc28ebfa0a210215809df9d8ec195b07a84c98434b2244672c_prof);

        
        $__internal_ff438315481e708099e00a474552e2c07c9434d01c325985dc44a66a585f1db5->leave($__internal_ff438315481e708099e00a474552e2c07c9434d01c325985dc44a66a585f1db5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}

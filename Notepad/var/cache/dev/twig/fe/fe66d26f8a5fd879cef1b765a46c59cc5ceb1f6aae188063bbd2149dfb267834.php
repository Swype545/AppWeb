<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_aa0a73f87fb4282e8ee5b115f755b32d0d2a89f08cebedacfc6b2adc09046e3b extends Twig_Template
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
        $__internal_3084fe7a5f508b317cc9dbfcb3dea33081d0fa791bd99f865edfe7141ea5f40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3084fe7a5f508b317cc9dbfcb3dea33081d0fa791bd99f865edfe7141ea5f40a->enter($__internal_3084fe7a5f508b317cc9dbfcb3dea33081d0fa791bd99f865edfe7141ea5f40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4a9ae31161fd7f2989d70e58cd44b58cdc5c04be0bb38f92bb9b4b9ad6e471a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9ae31161fd7f2989d70e58cd44b58cdc5c04be0bb38f92bb9b4b9ad6e471a2->enter($__internal_4a9ae31161fd7f2989d70e58cd44b58cdc5c04be0bb38f92bb9b4b9ad6e471a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3084fe7a5f508b317cc9dbfcb3dea33081d0fa791bd99f865edfe7141ea5f40a->leave($__internal_3084fe7a5f508b317cc9dbfcb3dea33081d0fa791bd99f865edfe7141ea5f40a_prof);

        
        $__internal_4a9ae31161fd7f2989d70e58cd44b58cdc5c04be0bb38f92bb9b4b9ad6e471a2->leave($__internal_4a9ae31161fd7f2989d70e58cd44b58cdc5c04be0bb38f92bb9b4b9ad6e471a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

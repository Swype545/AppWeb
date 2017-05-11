<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7b37d5e9a31cc1428e085f25b3f2c78f8b5295ba6155ab3611b98bbc6c7c58ce extends Twig_Template
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
        $__internal_1a7a2d3b534b142cccfeeb83e4a9ac090adb4140aee29a78478a1a52352c0478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7a2d3b534b142cccfeeb83e4a9ac090adb4140aee29a78478a1a52352c0478->enter($__internal_1a7a2d3b534b142cccfeeb83e4a9ac090adb4140aee29a78478a1a52352c0478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a53171367e019e2fa44ab54c7f777ea0ecc2fa6357404e4e3cc473964962b4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53171367e019e2fa44ab54c7f777ea0ecc2fa6357404e4e3cc473964962b4a9->enter($__internal_a53171367e019e2fa44ab54c7f777ea0ecc2fa6357404e4e3cc473964962b4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1a7a2d3b534b142cccfeeb83e4a9ac090adb4140aee29a78478a1a52352c0478->leave($__internal_1a7a2d3b534b142cccfeeb83e4a9ac090adb4140aee29a78478a1a52352c0478_prof);

        
        $__internal_a53171367e019e2fa44ab54c7f777ea0ecc2fa6357404e4e3cc473964962b4a9->leave($__internal_a53171367e019e2fa44ab54c7f777ea0ecc2fa6357404e4e3cc473964962b4a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

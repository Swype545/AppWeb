<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e81ff123cca6228034917f8aa941c1e8577f718e97342e20afaab2c2a5a08d44 extends Twig_Template
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
        $__internal_28af7205c4d902a696f6668c8bdf9e67ae5b1f0522ce1be7930c41f54dae8240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28af7205c4d902a696f6668c8bdf9e67ae5b1f0522ce1be7930c41f54dae8240->enter($__internal_28af7205c4d902a696f6668c8bdf9e67ae5b1f0522ce1be7930c41f54dae8240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2065115bb0462e7a0103b42b6c48a8e4122679cb43ea400e7d605824c8d91f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2065115bb0462e7a0103b42b6c48a8e4122679cb43ea400e7d605824c8d91f59->enter($__internal_2065115bb0462e7a0103b42b6c48a8e4122679cb43ea400e7d605824c8d91f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_28af7205c4d902a696f6668c8bdf9e67ae5b1f0522ce1be7930c41f54dae8240->leave($__internal_28af7205c4d902a696f6668c8bdf9e67ae5b1f0522ce1be7930c41f54dae8240_prof);

        
        $__internal_2065115bb0462e7a0103b42b6c48a8e4122679cb43ea400e7d605824c8d91f59->leave($__internal_2065115bb0462e7a0103b42b6c48a8e4122679cb43ea400e7d605824c8d91f59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

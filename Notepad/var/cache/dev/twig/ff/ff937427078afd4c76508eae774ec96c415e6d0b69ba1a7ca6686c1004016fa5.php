<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0f8ea30ce72ea6bda1688af4d2347d46390efbcb0679d3f4bbc402707d5e6985 extends Twig_Template
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
        $__internal_b738756c1a96ff73f113d209c097b6246dd53b468173f80a50e293c85e8eb4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b738756c1a96ff73f113d209c097b6246dd53b468173f80a50e293c85e8eb4bc->enter($__internal_b738756c1a96ff73f113d209c097b6246dd53b468173f80a50e293c85e8eb4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ba4dd76d90f09f4028d02227cc73cb08364da1b0fd6cdb598f699149bc8e52d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4dd76d90f09f4028d02227cc73cb08364da1b0fd6cdb598f699149bc8e52d1->enter($__internal_ba4dd76d90f09f4028d02227cc73cb08364da1b0fd6cdb598f699149bc8e52d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b738756c1a96ff73f113d209c097b6246dd53b468173f80a50e293c85e8eb4bc->leave($__internal_b738756c1a96ff73f113d209c097b6246dd53b468173f80a50e293c85e8eb4bc_prof);

        
        $__internal_ba4dd76d90f09f4028d02227cc73cb08364da1b0fd6cdb598f699149bc8e52d1->leave($__internal_ba4dd76d90f09f4028d02227cc73cb08364da1b0fd6cdb598f699149bc8e52d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

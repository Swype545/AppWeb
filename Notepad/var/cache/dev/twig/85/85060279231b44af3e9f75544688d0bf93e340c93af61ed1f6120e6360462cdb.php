<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8442ed82e49e0683b93b7f664f60d61f0eac8a42bd3959ec932d3a21c45acda9 extends Twig_Template
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
        $__internal_aa30fd37b2a248a408819b0fd72e58bff4eca00e7cdb8eead139a823bdde7064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa30fd37b2a248a408819b0fd72e58bff4eca00e7cdb8eead139a823bdde7064->enter($__internal_aa30fd37b2a248a408819b0fd72e58bff4eca00e7cdb8eead139a823bdde7064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d653e942f7081765c1c18745fe09b7b04b0af7de83e8769d0260fd06776cde5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d653e942f7081765c1c18745fe09b7b04b0af7de83e8769d0260fd06776cde5f->enter($__internal_d653e942f7081765c1c18745fe09b7b04b0af7de83e8769d0260fd06776cde5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aa30fd37b2a248a408819b0fd72e58bff4eca00e7cdb8eead139a823bdde7064->leave($__internal_aa30fd37b2a248a408819b0fd72e58bff4eca00e7cdb8eead139a823bdde7064_prof);

        
        $__internal_d653e942f7081765c1c18745fe09b7b04b0af7de83e8769d0260fd06776cde5f->leave($__internal_d653e942f7081765c1c18745fe09b7b04b0af7de83e8769d0260fd06776cde5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

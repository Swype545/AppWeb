<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8e3be00cbe38d356a5920587c59c47355acf4a6fe5226d779c160d7435cc770a extends Twig_Template
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
        $__internal_7832d7b86f7b088899033ae5eefa327a3261eec8e3743847c119fb927188df6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7832d7b86f7b088899033ae5eefa327a3261eec8e3743847c119fb927188df6e->enter($__internal_7832d7b86f7b088899033ae5eefa327a3261eec8e3743847c119fb927188df6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bbb3b13cb7d1babbb274888dc332260df7b35c63e008e7c7def74314d3b6057c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb3b13cb7d1babbb274888dc332260df7b35c63e008e7c7def74314d3b6057c->enter($__internal_bbb3b13cb7d1babbb274888dc332260df7b35c63e008e7c7def74314d3b6057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7832d7b86f7b088899033ae5eefa327a3261eec8e3743847c119fb927188df6e->leave($__internal_7832d7b86f7b088899033ae5eefa327a3261eec8e3743847c119fb927188df6e_prof);

        
        $__internal_bbb3b13cb7d1babbb274888dc332260df7b35c63e008e7c7def74314d3b6057c->leave($__internal_bbb3b13cb7d1babbb274888dc332260df7b35c63e008e7c7def74314d3b6057c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

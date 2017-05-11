<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_30d94da0501937fc9e0fa26dc0d8e211b5c369680e29858bf0a184a267da6038 extends Twig_Template
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
        $__internal_8f8898a4c85e494730d99f09bce3e1680aa662b9d11fbf4cf121c3315a616644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8898a4c85e494730d99f09bce3e1680aa662b9d11fbf4cf121c3315a616644->enter($__internal_8f8898a4c85e494730d99f09bce3e1680aa662b9d11fbf4cf121c3315a616644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6fe5875e014fe4e8361cbd3b37938721d6252c49f7286e1ecda83448e206bcdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe5875e014fe4e8361cbd3b37938721d6252c49f7286e1ecda83448e206bcdd->enter($__internal_6fe5875e014fe4e8361cbd3b37938721d6252c49f7286e1ecda83448e206bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8f8898a4c85e494730d99f09bce3e1680aa662b9d11fbf4cf121c3315a616644->leave($__internal_8f8898a4c85e494730d99f09bce3e1680aa662b9d11fbf4cf121c3315a616644_prof);

        
        $__internal_6fe5875e014fe4e8361cbd3b37938721d6252c49f7286e1ecda83448e206bcdd->leave($__internal_6fe5875e014fe4e8361cbd3b37938721d6252c49f7286e1ecda83448e206bcdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

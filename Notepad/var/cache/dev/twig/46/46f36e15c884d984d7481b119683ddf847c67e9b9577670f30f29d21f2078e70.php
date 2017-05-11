<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_51ce193f2168b140e72b5332d19557865779e3d47afefb8148dcc46b39e70d79 extends Twig_Template
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
        $__internal_67c0f3afa57be4c2475bac230d8e47ec283a13cf7edcd0eb98b8d9a8c8419369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c0f3afa57be4c2475bac230d8e47ec283a13cf7edcd0eb98b8d9a8c8419369->enter($__internal_67c0f3afa57be4c2475bac230d8e47ec283a13cf7edcd0eb98b8d9a8c8419369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5b788ceff5f5d7e09ed8fcb0039a722eaea7720bae3306829fb0f5e5f2f7e965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b788ceff5f5d7e09ed8fcb0039a722eaea7720bae3306829fb0f5e5f2f7e965->enter($__internal_5b788ceff5f5d7e09ed8fcb0039a722eaea7720bae3306829fb0f5e5f2f7e965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_67c0f3afa57be4c2475bac230d8e47ec283a13cf7edcd0eb98b8d9a8c8419369->leave($__internal_67c0f3afa57be4c2475bac230d8e47ec283a13cf7edcd0eb98b8d9a8c8419369_prof);

        
        $__internal_5b788ceff5f5d7e09ed8fcb0039a722eaea7720bae3306829fb0f5e5f2f7e965->leave($__internal_5b788ceff5f5d7e09ed8fcb0039a722eaea7720bae3306829fb0f5e5f2f7e965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}

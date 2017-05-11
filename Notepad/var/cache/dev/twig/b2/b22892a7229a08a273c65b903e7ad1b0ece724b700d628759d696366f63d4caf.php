<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e6258bf4fe809ce6cd56975103a1d0838b1a849b46c2dc0718c01f78e82adcb5 extends Twig_Template
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
        $__internal_dc47b7b8294aa33b1ff5aa52bee5991ea28c225a054671e288815da5a60f9b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc47b7b8294aa33b1ff5aa52bee5991ea28c225a054671e288815da5a60f9b34->enter($__internal_dc47b7b8294aa33b1ff5aa52bee5991ea28c225a054671e288815da5a60f9b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b93b8141a6bfa50187879a72a315a347f80eeec46c13e3c8a09eee4cca1965be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93b8141a6bfa50187879a72a315a347f80eeec46c13e3c8a09eee4cca1965be->enter($__internal_b93b8141a6bfa50187879a72a315a347f80eeec46c13e3c8a09eee4cca1965be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dc47b7b8294aa33b1ff5aa52bee5991ea28c225a054671e288815da5a60f9b34->leave($__internal_dc47b7b8294aa33b1ff5aa52bee5991ea28c225a054671e288815da5a60f9b34_prof);

        
        $__internal_b93b8141a6bfa50187879a72a315a347f80eeec46c13e3c8a09eee4cca1965be->leave($__internal_b93b8141a6bfa50187879a72a315a347f80eeec46c13e3c8a09eee4cca1965be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

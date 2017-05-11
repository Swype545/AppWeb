<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bb6f96bb37b1921598012a6d59c2dfb3858794336d9aed9c308ad99f21dcf0f9 extends Twig_Template
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
        $__internal_50b4ff50203b87665bd59ef63c41b50150473d4356b08cd99b981c4e46afb7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b4ff50203b87665bd59ef63c41b50150473d4356b08cd99b981c4e46afb7f6->enter($__internal_50b4ff50203b87665bd59ef63c41b50150473d4356b08cd99b981c4e46afb7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_880567fbbc51275faedbd6a2befcdb3bdc0bfea6d4d7c9e4f052aa0f6014ac2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880567fbbc51275faedbd6a2befcdb3bdc0bfea6d4d7c9e4f052aa0f6014ac2d->enter($__internal_880567fbbc51275faedbd6a2befcdb3bdc0bfea6d4d7c9e4f052aa0f6014ac2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_50b4ff50203b87665bd59ef63c41b50150473d4356b08cd99b981c4e46afb7f6->leave($__internal_50b4ff50203b87665bd59ef63c41b50150473d4356b08cd99b981c4e46afb7f6_prof);

        
        $__internal_880567fbbc51275faedbd6a2befcdb3bdc0bfea6d4d7c9e4f052aa0f6014ac2d->leave($__internal_880567fbbc51275faedbd6a2befcdb3bdc0bfea6d4d7c9e4f052aa0f6014ac2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5986b83b76654af6a85d977408c90be4a6259847ad0b1878b79330e062511e48 extends Twig_Template
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
        $__internal_5d14cf553fcb90b1a71ccd50a47d150f7fabe28f43e146970b9ca258c6eaf87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d14cf553fcb90b1a71ccd50a47d150f7fabe28f43e146970b9ca258c6eaf87f->enter($__internal_5d14cf553fcb90b1a71ccd50a47d150f7fabe28f43e146970b9ca258c6eaf87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a93128f5a43b380268281b612d4b2bc1cf42bda31cdc78fb0422ce8bdbaf7201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93128f5a43b380268281b612d4b2bc1cf42bda31cdc78fb0422ce8bdbaf7201->enter($__internal_a93128f5a43b380268281b612d4b2bc1cf42bda31cdc78fb0422ce8bdbaf7201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5d14cf553fcb90b1a71ccd50a47d150f7fabe28f43e146970b9ca258c6eaf87f->leave($__internal_5d14cf553fcb90b1a71ccd50a47d150f7fabe28f43e146970b9ca258c6eaf87f_prof);

        
        $__internal_a93128f5a43b380268281b612d4b2bc1cf42bda31cdc78fb0422ce8bdbaf7201->leave($__internal_a93128f5a43b380268281b612d4b2bc1cf42bda31cdc78fb0422ce8bdbaf7201_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

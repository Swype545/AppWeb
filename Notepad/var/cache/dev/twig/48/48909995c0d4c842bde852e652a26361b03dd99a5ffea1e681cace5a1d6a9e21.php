<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_30a3a72047bbff945f5386336cd86bc3e8b7b4beea0167a651f5b6ce71c9430c extends Twig_Template
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
        $__internal_90879ac611e7bcda2c03751024c11262b70e2ee7175084ebb2480ef594053de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90879ac611e7bcda2c03751024c11262b70e2ee7175084ebb2480ef594053de2->enter($__internal_90879ac611e7bcda2c03751024c11262b70e2ee7175084ebb2480ef594053de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9753e2140cd207a76c9265ad044201e86af6f15d44b45b9477d56cbaad4334da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9753e2140cd207a76c9265ad044201e86af6f15d44b45b9477d56cbaad4334da->enter($__internal_9753e2140cd207a76c9265ad044201e86af6f15d44b45b9477d56cbaad4334da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_90879ac611e7bcda2c03751024c11262b70e2ee7175084ebb2480ef594053de2->leave($__internal_90879ac611e7bcda2c03751024c11262b70e2ee7175084ebb2480ef594053de2_prof);

        
        $__internal_9753e2140cd207a76c9265ad044201e86af6f15d44b45b9477d56cbaad4334da->leave($__internal_9753e2140cd207a76c9265ad044201e86af6f15d44b45b9477d56cbaad4334da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

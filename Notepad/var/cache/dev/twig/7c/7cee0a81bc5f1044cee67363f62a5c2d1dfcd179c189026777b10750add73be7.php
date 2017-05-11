<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e631e0b17ce30287d7298781a18ed164a7fe289ec12c68cdfaa2e67c118bcd2f extends Twig_Template
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
        $__internal_87b00fdc5daa4674eeb787502fd32c39d53bfc37f0b0dd23457e4d1bd0e2fcd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b00fdc5daa4674eeb787502fd32c39d53bfc37f0b0dd23457e4d1bd0e2fcd0->enter($__internal_87b00fdc5daa4674eeb787502fd32c39d53bfc37f0b0dd23457e4d1bd0e2fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e46c9266aaad00d2dc1f16ea00418b36944eaeaaf098ae3f645ee6060ed1cd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46c9266aaad00d2dc1f16ea00418b36944eaeaaf098ae3f645ee6060ed1cd39->enter($__internal_e46c9266aaad00d2dc1f16ea00418b36944eaeaaf098ae3f645ee6060ed1cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_87b00fdc5daa4674eeb787502fd32c39d53bfc37f0b0dd23457e4d1bd0e2fcd0->leave($__internal_87b00fdc5daa4674eeb787502fd32c39d53bfc37f0b0dd23457e4d1bd0e2fcd0_prof);

        
        $__internal_e46c9266aaad00d2dc1f16ea00418b36944eaeaaf098ae3f645ee6060ed1cd39->leave($__internal_e46c9266aaad00d2dc1f16ea00418b36944eaeaaf098ae3f645ee6060ed1cd39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

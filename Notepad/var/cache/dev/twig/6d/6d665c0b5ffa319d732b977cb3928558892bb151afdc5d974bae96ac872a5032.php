<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_960d01f191697833bbc9cdef59fe4411012a182877c9dfeaabef84c552611b33 extends Twig_Template
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
        $__internal_7fd51c23a211d28fa3251986de05a0713c10f36d69a9212f7ac5b45d2eecb45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd51c23a211d28fa3251986de05a0713c10f36d69a9212f7ac5b45d2eecb45a->enter($__internal_7fd51c23a211d28fa3251986de05a0713c10f36d69a9212f7ac5b45d2eecb45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c5b3ef26bf15293117fb0a47e561d2a2b1b13994a77cc36baaf3d788baf4e5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b3ef26bf15293117fb0a47e561d2a2b1b13994a77cc36baaf3d788baf4e5bc->enter($__internal_c5b3ef26bf15293117fb0a47e561d2a2b1b13994a77cc36baaf3d788baf4e5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7fd51c23a211d28fa3251986de05a0713c10f36d69a9212f7ac5b45d2eecb45a->leave($__internal_7fd51c23a211d28fa3251986de05a0713c10f36d69a9212f7ac5b45d2eecb45a_prof);

        
        $__internal_c5b3ef26bf15293117fb0a47e561d2a2b1b13994a77cc36baaf3d788baf4e5bc->leave($__internal_c5b3ef26bf15293117fb0a47e561d2a2b1b13994a77cc36baaf3d788baf4e5bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}

<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0474b2b84b5427a26166694e032b9021999dca91a681e0aa6312bc842a60883f extends Twig_Template
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
        $__internal_f25943e88b5b2952cd1b1f3db37e423bf9f941a1e48ec0f24a894b2070e0bcf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25943e88b5b2952cd1b1f3db37e423bf9f941a1e48ec0f24a894b2070e0bcf2->enter($__internal_f25943e88b5b2952cd1b1f3db37e423bf9f941a1e48ec0f24a894b2070e0bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a18fe64f3cae4df4c3256548487a1aa21f48eb1c6b8bc142a65705901bf78e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18fe64f3cae4df4c3256548487a1aa21f48eb1c6b8bc142a65705901bf78e09->enter($__internal_a18fe64f3cae4df4c3256548487a1aa21f48eb1c6b8bc142a65705901bf78e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f25943e88b5b2952cd1b1f3db37e423bf9f941a1e48ec0f24a894b2070e0bcf2->leave($__internal_f25943e88b5b2952cd1b1f3db37e423bf9f941a1e48ec0f24a894b2070e0bcf2_prof);

        
        $__internal_a18fe64f3cae4df4c3256548487a1aa21f48eb1c6b8bc142a65705901bf78e09->leave($__internal_a18fe64f3cae4df4c3256548487a1aa21f48eb1c6b8bc142a65705901bf78e09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

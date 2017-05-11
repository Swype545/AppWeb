<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd4ba7181c18c0844cb14883b07eeae9ab337998678e2fee43e28b81985d8032 extends Twig_Template
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
        $__internal_a2d611ea9edda0b567be9cb73f3c7b6dbba6f84a605c5bc9efcb390d2eba3d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d611ea9edda0b567be9cb73f3c7b6dbba6f84a605c5bc9efcb390d2eba3d09->enter($__internal_a2d611ea9edda0b567be9cb73f3c7b6dbba6f84a605c5bc9efcb390d2eba3d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ca83bd619467975e0c04a317b10a2d10f37512398360b98afaeb4ef0be17afba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca83bd619467975e0c04a317b10a2d10f37512398360b98afaeb4ef0be17afba->enter($__internal_ca83bd619467975e0c04a317b10a2d10f37512398360b98afaeb4ef0be17afba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a2d611ea9edda0b567be9cb73f3c7b6dbba6f84a605c5bc9efcb390d2eba3d09->leave($__internal_a2d611ea9edda0b567be9cb73f3c7b6dbba6f84a605c5bc9efcb390d2eba3d09_prof);

        
        $__internal_ca83bd619467975e0c04a317b10a2d10f37512398360b98afaeb4ef0be17afba->leave($__internal_ca83bd619467975e0c04a317b10a2d10f37512398360b98afaeb4ef0be17afba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

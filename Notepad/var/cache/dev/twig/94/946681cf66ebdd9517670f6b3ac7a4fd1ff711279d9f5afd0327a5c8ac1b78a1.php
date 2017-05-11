<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c04c4ab30bfb685c58a3828817be3c043e4fa5b5de083d33a9ecb28011d9dbee extends Twig_Template
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
        $__internal_a97a30fc5a496fa0793cba90ab7f052cca76230f3350ea7048470ba604e7f55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97a30fc5a496fa0793cba90ab7f052cca76230f3350ea7048470ba604e7f55c->enter($__internal_a97a30fc5a496fa0793cba90ab7f052cca76230f3350ea7048470ba604e7f55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9882b30e888cbeb165e817b20364d918ba3edc5091df50d40da716e7e5ad659d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9882b30e888cbeb165e817b20364d918ba3edc5091df50d40da716e7e5ad659d->enter($__internal_9882b30e888cbeb165e817b20364d918ba3edc5091df50d40da716e7e5ad659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a97a30fc5a496fa0793cba90ab7f052cca76230f3350ea7048470ba604e7f55c->leave($__internal_a97a30fc5a496fa0793cba90ab7f052cca76230f3350ea7048470ba604e7f55c_prof);

        
        $__internal_9882b30e888cbeb165e817b20364d918ba3edc5091df50d40da716e7e5ad659d->leave($__internal_9882b30e888cbeb165e817b20364d918ba3edc5091df50d40da716e7e5ad659d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

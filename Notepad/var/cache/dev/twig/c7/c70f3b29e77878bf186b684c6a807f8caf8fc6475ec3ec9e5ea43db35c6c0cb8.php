<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c6df64307217c4d5d40d6c91454ba414bf06e64e826d6d58fc7982c4520938d9 extends Twig_Template
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
        $__internal_8bcb7b5e51432e1d79cd05c6846424faf4d25b662f00e81ea6a08c21858370d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcb7b5e51432e1d79cd05c6846424faf4d25b662f00e81ea6a08c21858370d1->enter($__internal_8bcb7b5e51432e1d79cd05c6846424faf4d25b662f00e81ea6a08c21858370d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_97f2b2eb50b2482bfe89ef0ca2839d42dbefb3e386db3a084751e534876a4ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f2b2eb50b2482bfe89ef0ca2839d42dbefb3e386db3a084751e534876a4ccb->enter($__internal_97f2b2eb50b2482bfe89ef0ca2839d42dbefb3e386db3a084751e534876a4ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8bcb7b5e51432e1d79cd05c6846424faf4d25b662f00e81ea6a08c21858370d1->leave($__internal_8bcb7b5e51432e1d79cd05c6846424faf4d25b662f00e81ea6a08c21858370d1_prof);

        
        $__internal_97f2b2eb50b2482bfe89ef0ca2839d42dbefb3e386db3a084751e534876a4ccb->leave($__internal_97f2b2eb50b2482bfe89ef0ca2839d42dbefb3e386db3a084751e534876a4ccb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

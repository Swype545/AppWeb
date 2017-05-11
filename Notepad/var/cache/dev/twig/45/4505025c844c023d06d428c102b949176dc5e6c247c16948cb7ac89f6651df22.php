<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f183788e126bf167b3e3a79a0e9ec4f3ee0167f33b563102b64cb532f07e7eec extends Twig_Template
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
        $__internal_dcd7f40f9931f7c915709fa4ec1e562aa48fa2f81c2a41bd8f3df0dfd886dee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd7f40f9931f7c915709fa4ec1e562aa48fa2f81c2a41bd8f3df0dfd886dee4->enter($__internal_dcd7f40f9931f7c915709fa4ec1e562aa48fa2f81c2a41bd8f3df0dfd886dee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d11d2bc904048d35de822e097f5438e617b7c28a07eee099c911db8750b6696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11d2bc904048d35de822e097f5438e617b7c28a07eee099c911db8750b6696c->enter($__internal_d11d2bc904048d35de822e097f5438e617b7c28a07eee099c911db8750b6696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_dcd7f40f9931f7c915709fa4ec1e562aa48fa2f81c2a41bd8f3df0dfd886dee4->leave($__internal_dcd7f40f9931f7c915709fa4ec1e562aa48fa2f81c2a41bd8f3df0dfd886dee4_prof);

        
        $__internal_d11d2bc904048d35de822e097f5438e617b7c28a07eee099c911db8750b6696c->leave($__internal_d11d2bc904048d35de822e097f5438e617b7c28a07eee099c911db8750b6696c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

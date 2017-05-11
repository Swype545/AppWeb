<?php

/* NotepadBundle:pages:layout.html.twig */
class __TwigTemplate_aeadfd1da1b1039e8e3cd8cf52f7318abfbb263e12fcdfdf82e001968f0b222f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Angular QuickStart</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">\t
\t<!--
    <script>
      System.import('main.js').catch(function(err){ console.error(err); });
    </script>-->
  
  
  <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta charset=\"utf-8\">
\t<base href=\"http://localhost/AppWeb/notepad/web/app_dev.php/note/notelist\"> 
  
  </head>

  <body>
    <my-app>Loading AppComponent content here ...</my-app>
\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/inline.bundle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/polyfills.bundle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/vendor.bundle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/notepad/js/main.bundle.js"), "html", null, true);
        echo "\"></script></body>
  
  
  <!--<script type=\"text/javascript\" src=\"inline.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"polyfills.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"vendor.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"main.bundle.js\"></script></body>-->
</html>";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "Notepad";
    }

    public function getTemplateName()
    {
        return "NotepadBundle:pages:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  59 => 26,  55 => 25,  51 => 24,  47 => 23,  36 => 15,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NotepadBundle:pages:layout.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/layout.html.twig");
    }
}

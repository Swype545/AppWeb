<?php

/* NotepadBundle:pages:layout.html.twig */
class __TwigTemplate_aa203d4100245430960474a8130d5ee08fc0d0b80bbf18e90fec5833b8f0c0f5 extends Twig_Template
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
        $__internal_7aa8e244f778c72b81e9af58f129fac12ee6fb4a8563a98e5477a56494b8f17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa8e244f778c72b81e9af58f129fac12ee6fb4a8563a98e5477a56494b8f17f->enter($__internal_7aa8e244f778c72b81e9af58f129fac12ee6fb4a8563a98e5477a56494b8f17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:layout.html.twig"));

        $__internal_ff16c1c25befd3abdbbf957f55d76df33846b47c292d7223db771c5e3347e324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff16c1c25befd3abdbbf957f55d76df33846b47c292d7223db771c5e3347e324->enter($__internal_ff16c1c25befd3abdbbf957f55d76df33846b47c292d7223db771c5e3347e324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:layout.html.twig"));

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
        
        $__internal_7aa8e244f778c72b81e9af58f129fac12ee6fb4a8563a98e5477a56494b8f17f->leave($__internal_7aa8e244f778c72b81e9af58f129fac12ee6fb4a8563a98e5477a56494b8f17f_prof);

        
        $__internal_ff16c1c25befd3abdbbf957f55d76df33846b47c292d7223db771c5e3347e324->leave($__internal_ff16c1c25befd3abdbbf957f55d76df33846b47c292d7223db771c5e3347e324_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_f67cdfe8289db8eae8b0fccafd3713ae1e8cbe1a352162db95a01c5a31c2bc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67cdfe8289db8eae8b0fccafd3713ae1e8cbe1a352162db95a01c5a31c2bc94->enter($__internal_f67cdfe8289db8eae8b0fccafd3713ae1e8cbe1a352162db95a01c5a31c2bc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f628c76fb120fea53cd8d13f57ec7923a3da989a6fa164c89163d5cbf145236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f628c76fb120fea53cd8d13f57ec7923a3da989a6fa164c89163d5cbf145236->enter($__internal_8f628c76fb120fea53cd8d13f57ec7923a3da989a6fa164c89163d5cbf145236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_8f628c76fb120fea53cd8d13f57ec7923a3da989a6fa164c89163d5cbf145236->leave($__internal_8f628c76fb120fea53cd8d13f57ec7923a3da989a6fa164c89163d5cbf145236_prof);

        
        $__internal_f67cdfe8289db8eae8b0fccafd3713ae1e8cbe1a352162db95a01c5a31c2bc94->leave($__internal_f67cdfe8289db8eae8b0fccafd3713ae1e8cbe1a352162db95a01c5a31c2bc94_prof);

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
        return array (  83 => 15,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  42 => 15,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
  
  
  <title>{% block title %}Notepad{% endblock %}</title>
\t<meta charset=\"utf-8\">
\t<base href=\"http://localhost/AppWeb/notepad/web/app_dev.php/note/notelist\"> 
  
  </head>

  <body>
    <my-app>Loading AppComponent content here ...</my-app>
\t<script type=\"text/javascript\" src=\"{{ asset('bundles/notepad/js/inline.bundle.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('bundles/notepad/js/polyfills.bundle.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('bundles/notepad/js/vendor.bundle.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('bundles/notepad/js/main.bundle.js')}}\"></script></body>
  
  
  <!--<script type=\"text/javascript\" src=\"inline.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"polyfills.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"vendor.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"main.bundle.js\"></script></body>-->
</html>", "NotepadBundle:pages:layout.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle\\Resources\\views\\pages\\layout.html.twig");
    }
}

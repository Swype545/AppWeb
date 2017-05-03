<?php

/* NotepadBundle:pages:layout.html.twig */
class __TwigTemplate_273e6748e76f1c751005b11d79022bc6b8c650b33b5a41b31d3fb954686287e3 extends Twig_Template
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
        $__internal_883aa7c26aca518a9c2b49a370099f734af5201a706d140e35cf0cf9dce625b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883aa7c26aca518a9c2b49a370099f734af5201a706d140e35cf0cf9dce625b5->enter($__internal_883aa7c26aca518a9c2b49a370099f734af5201a706d140e35cf0cf9dce625b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:layout.html.twig"));

        $__internal_c006ae008b2aa94c584b9074631ea5b03e75a5cf45b45581d9905d9254ca6f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c006ae008b2aa94c584b9074631ea5b03e75a5cf45b45581d9905d9254ca6f7a->enter($__internal_c006ae008b2aa94c584b9074631ea5b03e75a5cf45b45581d9905d9254ca6f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:pages:layout.html.twig"));

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
        
        $__internal_883aa7c26aca518a9c2b49a370099f734af5201a706d140e35cf0cf9dce625b5->leave($__internal_883aa7c26aca518a9c2b49a370099f734af5201a706d140e35cf0cf9dce625b5_prof);

        
        $__internal_c006ae008b2aa94c584b9074631ea5b03e75a5cf45b45581d9905d9254ca6f7a->leave($__internal_c006ae008b2aa94c584b9074631ea5b03e75a5cf45b45581d9905d9254ca6f7a_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_b63c526f3504c97cdd1f61dab087a85745c0ef45d05c3953ecda2e8b5b2168cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63c526f3504c97cdd1f61dab087a85745c0ef45d05c3953ecda2e8b5b2168cd->enter($__internal_b63c526f3504c97cdd1f61dab087a85745c0ef45d05c3953ecda2e8b5b2168cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27fc5e042eb51723133918b1e4b05acaeaae178f29199ffdb12ff9cbdd7a8eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fc5e042eb51723133918b1e4b05acaeaae178f29199ffdb12ff9cbdd7a8eef->enter($__internal_27fc5e042eb51723133918b1e4b05acaeaae178f29199ffdb12ff9cbdd7a8eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_27fc5e042eb51723133918b1e4b05acaeaae178f29199ffdb12ff9cbdd7a8eef->leave($__internal_27fc5e042eb51723133918b1e4b05acaeaae178f29199ffdb12ff9cbdd7a8eef_prof);

        
        $__internal_b63c526f3504c97cdd1f61dab087a85745c0ef45d05c3953ecda2e8b5b2168cd->leave($__internal_b63c526f3504c97cdd1f61dab087a85745c0ef45d05c3953ecda2e8b5b2168cd_prof);

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
</html>", "NotepadBundle:pages:layout.html.twig", "C:\\wamp\\www\\AppWeb\\Notepad\\src\\NotepadBundle/Resources/views/pages/layout.html.twig");
    }
}

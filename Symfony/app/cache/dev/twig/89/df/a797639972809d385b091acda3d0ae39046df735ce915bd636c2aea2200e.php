<?php

/* ::layout.html.twig */
class __TwigTemplate_89dfa797639972809d385b091acda3d0ae39046df735ce915bd636c2aea2200e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
   <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>

   <div class=\"navbar navbar-inverse\">
  <ul class=\"nav navbar-nav\">
    <li> <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("csp_comic_homepage");
        echo "\">Accueil</a> </li>
    <li> <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("csp_comic_upload");
        echo "\">Upload</a> </li>
    <li> <a href=\"\">Login</a> </li>
    <li> <a href=\"#\">How about our lord and savior Jesus?</a> </li>
  </ul>
  
</div>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>WEBCOMIC SHARE</h1>
      <p>
        Ce site est encore en construction.
      </p>
    </div>
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
   



    <hr>

    <footer>
      <p>The year is ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and this is the last site on air.</p>
    </footer>
  </div>

  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
</body>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Comic Sharing Platerform";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        // line 51
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  122 => 50,  119 => 49,  115 => 36,  112 => 35,  107 => 13,  105 => 12,  102 => 11,  96 => 10,  90 => 54,  88 => 49,  81 => 45,  71 => 37,  69 => 35,  53 => 22,  49 => 21,  41 => 15,  39 => 11,  35 => 10,  26 => 3,  23 => 1,);
    }
}

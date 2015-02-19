<?php

/* ::layout.html.twig */
class __TwigTemplate_acdbdfddafc1df6b480988482255f445ad5a62d9656608b1c68ec9ee2cbdd498 extends Twig_Template
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
    <li class=\"active\"> <a href=\"#\">Accueil</a> </li>
    <li> <a href=\"#\">Liens</a> </li>
    <li> <a href=\"#\">Random</a> </li>
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
        return array (  118 => 51,  116 => 50,  113 => 49,  109 => 36,  106 => 35,  101 => 13,  99 => 12,  96 => 11,  90 => 10,  84 => 54,  82 => 49,  75 => 45,  65 => 37,  63 => 35,  41 => 15,  39 => 11,  35 => 10,  26 => 3,  23 => 1,);
    }
}

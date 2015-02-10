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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
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
  <form class=\"navbar-form navbar-right inline-form\">
      <div class=\"form-group\">
        <input type=\"search\" class=\"input-sm form-control\" placeholder=\"Recherche\">
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
      </div>
    </form>
</div>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>WEBCOMIC SHARE</h1>
      <p>
        Ce site est encore en construction.
      </p>
    </div>

   



    <hr>

    <footer>
      <p>The year is ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and this is the last site on air.</p>
    </footer>
  </div>

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Comic Sharing Plateform";
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

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        // line 54
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
        return array (  109 => 54,  107 => 53,  104 => 52,  99 => 13,  97 => 12,  94 => 11,  88 => 9,  82 => 57,  80 => 52,  73 => 48,  38 => 15,  36 => 11,  31 => 9,  22 => 2,);
    }
}

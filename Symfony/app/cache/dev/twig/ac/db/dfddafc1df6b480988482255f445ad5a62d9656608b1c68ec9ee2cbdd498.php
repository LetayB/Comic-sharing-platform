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
    <li> <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("csp_comic_homepage");
        echo "\">Accueil</a> </li>
    <li> <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("csp_comic_upload");
        echo "\">Upload</a> </li>
    
        ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "           <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a> </li> <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a> </li>
        ";
        } else {
            // line 27
            echo "           <li> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
        ";
        }
        // line 29
        echo "   
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
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
   



    <hr>

    <footer>
      <p>The year is ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and this is the last site on air.</p>
    </footer>
  </div>

  ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
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

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "    ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        // line 56
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
        return array (  147 => 56,  145 => 55,  142 => 54,  138 => 41,  135 => 40,  130 => 13,  128 => 12,  125 => 11,  119 => 10,  110 => 59,  108 => 54,  101 => 50,  91 => 42,  89 => 40,  76 => 29,  70 => 27,  60 => 25,  58 => 24,  53 => 22,  49 => 21,  41 => 15,  39 => 11,  35 => 10,  26 => 3,  23 => 1,);
    }
}

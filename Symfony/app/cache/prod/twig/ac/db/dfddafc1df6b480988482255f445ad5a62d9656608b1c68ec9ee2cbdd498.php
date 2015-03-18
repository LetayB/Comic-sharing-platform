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
  

<div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header \">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("csp_comic_homepage");
        echo " \">Comic Sharing Platform</a>
      
    </div>
    ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("csp_comic_comics");
            echo "\">Flux</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("csp_comic_personnal");
            echo "\">Comics</a></li>
            <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("csp_comic_upload");
            echo "\">Upload</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Compte</a></li>
          </ul>
        </li>
        <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a></li>
      </ul>
      ";
        } else {
            // line 49
            echo "      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("csp_comic_comics");
            echo "\">Flux</a></li>
        <li class=\"active\"><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
      </ul>

      ";
        }
        // line 58
        echo "      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class=\"container\">

    
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
   



    <hr>

    <footer>
      <p>Ce site a été réaliser dans le cadre d'un projet étudiant durant l'année ";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
    </footer>
  </div>

  ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
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

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "    ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        // line 80
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
        return array (  187 => 80,  185 => 79,  182 => 78,  178 => 65,  175 => 64,  170 => 13,  168 => 12,  165 => 11,  159 => 10,  150 => 83,  148 => 78,  141 => 74,  131 => 66,  129 => 64,  121 => 58,  114 => 54,  110 => 53,  106 => 52,  101 => 49,  95 => 46,  89 => 43,  84 => 41,  80 => 40,  75 => 38,  70 => 36,  65 => 33,  63 => 32,  57 => 29,  41 => 15,  39 => 11,  35 => 10,  26 => 3,  23 => 1,);
    }
}

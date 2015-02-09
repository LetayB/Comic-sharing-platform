<?php

/* CSPComicBundle:Index:index.html.twig */
class __TwigTemplate_b5c7bd2c5450fbad340e5caa65ff2191492895ab43028d2cc4cb21da94f0751b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>COMIC SHARING PLATFORM!</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
    </head>
    <body>
        <h1>CSP!</h1>
        
        <p>
            Ce site est encore en construction.
        </p>
    </body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle:Index:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  41 => 5,  28 => 8,  26 => 5,  20 => 1,);
    }
}

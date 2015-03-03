<?php

/* CSPComicBundle:Index:index.html.twig */
class __TwigTemplate_b5c7bd2c5450fbad340e5caa65ff2191492895ab43028d2cc4cb21da94f0751b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("CSPComicBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'comic_body' => array($this, 'block_comic_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CSPComicBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  News - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_comic_body($context, array $blocks = array())
    {
        // line 10
        echo "
<div id=\"flux\">
  <h2>Flux</h2>
  ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CSPComicBundle:Index:flux"));
        echo "
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("csp_comic_upload");
        echo "\">Upload</a>
</div>

</img src=\"/uploads/img/1.jpg\" alt=\"lol\">

";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}

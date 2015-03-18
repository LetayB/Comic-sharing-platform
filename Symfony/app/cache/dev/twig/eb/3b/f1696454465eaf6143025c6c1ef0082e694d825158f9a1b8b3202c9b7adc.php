<?php

/* CSPComicBundle:Comic:comics.html.twig */
class __TwigTemplate_eb3bf1696454465eaf6143025c6c1ef0082e694d825158f9a1b8b3202c9b7adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CSPComicBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  News - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_comic_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div id=\"flux\">
  <h2>Flux</h2>
  ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CSPComicBundle:Index:flux"));
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle:Comic:comics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}

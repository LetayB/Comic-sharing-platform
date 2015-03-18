<?php

/* CSPComicBundle::layout.html.twig */
class __TwigTemplate_172f330772ea684d3c12fe610994e13498dc7d78101992cc6648d5d5af83682f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'comic_body' => array($this, 'block_comic_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  


  
  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('comic_body', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 16
    public function block_comic_body($context, array $blocks = array())
    {
        // line 17
        echo "  ";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  68 => 16,  63 => 18,  60 => 16,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}

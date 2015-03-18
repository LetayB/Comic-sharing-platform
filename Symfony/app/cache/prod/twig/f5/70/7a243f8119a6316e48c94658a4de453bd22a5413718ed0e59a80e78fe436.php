<?php

/* CSPComicBundle:Index:index.html.twig */
class __TwigTemplate_f5707a243f8119a6316e48c94658a4de453bd22a5413718ed0e59a80e78fe436 extends Twig_Template
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
  <h2>Acceuil</h2>
</div>


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
        return array (  50 => 10,  47 => 9,  40 => 6,  37 => 5,  11 => 3,);
    }
}

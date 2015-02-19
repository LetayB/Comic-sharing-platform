<?php

/* CSPComicBundle::layout.html.twig */
class __TwigTemplate_172f330772ea684d3c12fe610994e13498dc7d78101992cc6648d5d5af83682f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Comic Sharing Platform - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "


  ";
        // line 14
        echo "  <h1>Sous titre commun</h1>

  <hr>

  ";
        // line 19
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 19
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 20
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
        return array (  73 => 20,  70 => 19,  65 => 21,  62 => 19,  56 => 14,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}

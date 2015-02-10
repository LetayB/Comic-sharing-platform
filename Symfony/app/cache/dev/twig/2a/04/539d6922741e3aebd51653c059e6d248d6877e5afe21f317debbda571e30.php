<?php

/* CSPComicBundle::layout.html.twig */
class __TwigTemplate_2a04539d6922741e3aebd51653c059e6d248d6877e5afe21f317debbda571e30 extends Twig_Template
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
<div class=\"navbar navbar-inverse\">
  <ul class=\"nav navbar-nav\">
    <li class=\"active\"> <a href=\"#\">Accueil</a> </li>
    <li> <a href=\"#\">Liens</a> </li>
    <li> <a href=\"#\">Témoignages</a> </li>
    <li> <a href=\"#\">Références</a> </li>
  </ul>
</div>

  ";
        // line 21
        echo "  <h1>Sous titre commun</h1>

  <hr>

  ";
        // line 26
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 26
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 27
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
        return array (  80 => 27,  77 => 26,  72 => 28,  69 => 26,  63 => 21,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  11 => 3,);
    }
}

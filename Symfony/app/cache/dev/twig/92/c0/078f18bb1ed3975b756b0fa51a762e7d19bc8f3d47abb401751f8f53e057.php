<?php

/* CSPComicBundle:Comic:comic.html.twig */
class __TwigTemplate_92c0078f18bb1ed3975b756b0fa51a762e7d19bc8f3d47abb401751f8f53e057 extends Twig_Template
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
<div id=\"comic\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listComics"]) ? $context["listComics"] : $this->getContext($context, "listComics")));
        foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
            // line 11
            echo "  \t\t<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getTitle", array()), "html", null, true);
            echo "</h1>
    \t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getPathName", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getAlt", array()), "html", null, true);
            echo "\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle:Comic:comic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  63 => 12,  58 => 11,  54 => 10,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}

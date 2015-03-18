<?php

/* CSPComicBundle:Comic:personnal.html.twig */
class __TwigTemplate_df4b9eab2e5216a5a051ae80309c9b2b12e320c6f7bf439674a2de03d079240d extends Twig_Template
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
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listComics"]) ? $context["listComics"] : $this->getContext($context, "listComics")));
        foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
            // line 11
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getTitle", array()), "html", null, true);
            echo "
    \t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getPathName", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getAlt", array()), "html", null, true);
            echo "\">
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle:Comic:personnal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  63 => 12,  58 => 11,  54 => 10,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}

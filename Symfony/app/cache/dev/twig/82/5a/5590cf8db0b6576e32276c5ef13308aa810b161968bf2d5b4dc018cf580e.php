<?php

/* CSPComicBundle:Comic:flux.html.twig */
class __TwigTemplate_825a5590cf8db0b6576e32276c5ef13308aa810b161968bf2d5b4dc018cf580e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul>
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listComics"]) ? $context["listComics"] : $this->getContext($context, "listComics")));
        foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
            // line 3
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getTitle", array()), "html", null, true);
            echo "
    \t<img src=\"";
            // line 4
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
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "CSPComicBundle:Comic:flux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}

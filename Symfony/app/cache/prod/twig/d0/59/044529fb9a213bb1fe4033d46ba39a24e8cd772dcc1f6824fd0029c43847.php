<?php

/* CSPComicBundle:Comic:flux.html.twig */
class __TwigTemplate_d059044529fb9a213bb1fe4033d46ba39a24e8cd772dcc1f6824fd0029c43847 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listComics"]) ? $context["listComics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
            // line 3
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("csp_comic_comic", array("id" => $this->getAttribute($context["comic"], "getId", array()))), "html", null, true);
            echo "\" style=\"color: #000000; text-decoration: none;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getTitle", array()), "html", null, true);
            echo "
    \t<img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getPathName", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comic"], "getAlt", array()), "html", null, true);
            echo "\">
    \t</a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
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
        return array (  45 => 8,  33 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}

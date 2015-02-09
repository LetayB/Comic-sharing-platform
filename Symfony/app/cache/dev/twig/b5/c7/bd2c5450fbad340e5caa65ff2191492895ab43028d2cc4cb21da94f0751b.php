<?php

/* CSPComicBundle:Index:index.html.twig */
class __TwigTemplate_b5c7bd2c5450fbad340e5caa65ff2191492895ab43028d2cc4cb21da94f0751b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>COMIC SHARING PLATFORM!</title>
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7c91ed6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7c91ed6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7c91ed6_main_1.css");
            // line 6
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        } else {
            // asset "7c91ed6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7c91ed6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7c91ed6.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 8
        echo "
    </head>
    <body>
        <h1>CSP!</h1>
        
        <p>
            Ce site est encore en construction.
        </p>
    </body>
</html>";
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
        return array (  43 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}

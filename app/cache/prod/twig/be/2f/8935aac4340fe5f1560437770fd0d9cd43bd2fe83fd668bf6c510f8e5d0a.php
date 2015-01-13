<?php

/* AppBundle::_partials/header.html.twig */
class __TwigTemplate_be2f8935aac4340fe5f1560437770fd0d9cd43bd2fe83fd668bf6c510f8e5d0a extends Twig_Template
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
        echo "<header id=\"head\">
    <ul>
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.homepage"), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_about_us");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.about_us"), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_news");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.news"), "html", null, true);
        echo "</a></li>
    </ul>
    <ul>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "en", 1 => "pl"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => $context["locale"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
</header>

";
    }

    public function getTemplateName()
    {
        return "AppBundle::_partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  47 => 9,  43 => 8,  35 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}

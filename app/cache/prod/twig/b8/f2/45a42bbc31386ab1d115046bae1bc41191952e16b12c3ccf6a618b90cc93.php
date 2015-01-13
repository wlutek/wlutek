<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_b8f245a42bbc31386ab1d115046bae1bc41191952e16b12c3ccf6a618b90cc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "AppBundle::_partials/header.html.twig");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  44 => 6,  41 => 5,  38 => 4,  11 => 1,);
    }
}

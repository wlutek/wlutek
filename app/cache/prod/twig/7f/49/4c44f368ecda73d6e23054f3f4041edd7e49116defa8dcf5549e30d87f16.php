<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_7f494c44f368ecda73d6e23054f3f4041edd7e49116defa8dcf5549e30d87f16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AppBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"content-box\">
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.homepage.h1"), "html", null, true);
        echo "</h1>
    <div class=\"content\">
        ";
        // line 7
        echo $this->env->getExtension('translator')->trans("content.homepage");
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

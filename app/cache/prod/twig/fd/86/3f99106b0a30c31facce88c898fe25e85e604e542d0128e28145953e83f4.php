<?php

/* AppBundle:Default:about_us.html.twig */
class __TwigTemplate_fd863f99106b0a30c31facce88c898fe25e85e604e542d0128e28145953e83f4 extends Twig_Template
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
    <h1>About us</h1>
    <div class=\"content\">
        <p class=\"header\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inciddun labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Duis es auste irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla.</p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque esipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Denim des ipsam voupt atem quia voluptaspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque isdspsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Denim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui one voluptatem seqdui nesciunt. Neque porro quisquam est, dolore m ipsum quia dolor sit amet, consectetur, adipisci velit des amet doler.</p>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}

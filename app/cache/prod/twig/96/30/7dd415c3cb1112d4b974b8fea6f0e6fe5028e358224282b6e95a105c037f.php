<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_96307dd415c3cb1112d4b974b8fea6f0e6fe5028e358224282b6e95a105c037f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FimeProjectBundle::layout.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FimeProjectBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fime_portal_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("FimeProjectBundle.global.dashboard"), "html", null, true);
        echo "</a></li>
        <li class=\"active\">404</li>
    </ol>

    <div id=\"error-page\" class=\"container\">
        <div class=\"col-md-4 col-md-offset-2 smoke-and-coffee\">
            <div class=\"smoke-coffee-one\"></div>
            <div class=\"smoke-coffee-two\"></div>
            <div class=\"cup-of-coffee\"></div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"col-md-3\">404.</h1>
                    <h1 class=\"col-md-8\">What else ?</h1>
                </div>
            </div>
            <div class=\"\">
                <p>FWP s'excuse de cette erreur en vous offrant un délicieux café.</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}

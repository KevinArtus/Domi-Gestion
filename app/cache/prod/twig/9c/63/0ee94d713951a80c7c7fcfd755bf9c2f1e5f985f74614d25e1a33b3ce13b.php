<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_9c630ee94d713951a80c7c7fcfd755bf9c2f1e5f985f74614d25e1a33b3ce13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("stanhome_portal_dashboard_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomePortalBundle.global.dashboard"), "html", null, true);
        echo "</a></li>
        <li class=\"active\">500</li>
    </ol>
    <div id=\"error-page\" class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"col-md-6\">
                <h1>500</h1>
                <p>Oh non ! Le serveur a planté...</p>
                <p>Qu'est-ce qu'on peut faire ? Attendre, recharger la page indéfiniment...</p>
                <p>Contacter le responsable...</p>
                <p>Aller boire un café...</p>
                <p>En fait c'est plutôt cool, non ?! Bon...à part qu'il faut trouver le responsable...</p>
            </div>
            <div class=\"col-md-6\">
                <div class=\"pulse\"></div>
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fimeportal/images/robot.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}

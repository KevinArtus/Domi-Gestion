<?php

/* ::base.html.twig */
class __TwigTemplate_b587f6583404074b18be39a25c9bd5466d22e90ca9e3728598f4dfd6f083a081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'angular' => array($this, 'block_angular'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"fwpApp\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"author\" content=\"FIME SAS\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</head>
<body>
";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "
<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bundled.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 134
        $this->displayBlock('angular', $context, $blocks);
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Domi'Gestion";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bundled.css"), "html", null, true);
        echo "\"/>
        <!--[if lt IE 9]>
        <![endif]-->
    ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img src=\" ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo-white.png"), "html", null, true);
        echo "\" class=\"img-responsive col-xs-2 col-sm-3 col-md-3\">
                ";
        // line 35
        echo "            </div>
            <div class=\"collapse navbar-collapse\" >
                ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "
                <ul class=\"nav navbar-nav\">
                    <li class=\"\"><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("stanhome_portal_dashboard_index");
            echo "\"><span class=\"icon-dashboard\"></span>Dashboard</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\"  class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"icon-icon-livrable\"></span>Marques</a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("stanhome_product_brand_index");
            echo "\">Toutes les marques</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-icon-project\"></span>Produits</a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("stanhome_product_product_index");
            echo "\">Tous les produit</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("stanhome_product_product_new");
            echo "\">Ajouter un produit</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-icon-rh\"></span>Carnet clients</a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("stanhome_rh_customer_index");
            echo "\"><i class=\"icon-address-book\"></i>Tous les clients</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("stanhome_rh_customer_new");
            echo "\">Ajouter un client</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-icon-project\"></span>Commandes</a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("stanhome_shopping_shopping_index");
            echo "\">Toutes les commandes</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("stanhome_shopping_shopping_new");
            echo "\">Ajouter une commande</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-icon-project\"></span>Réunions</a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("stanhome_meeting_meeting_index");
            echo "\">Toutes les Réunions</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("stanhome_meeting_meeting_new");
            echo "\">Ajouter une réunion</a></li>
                        </ul>
                    </li>
                    ";
            // line 89
            echo "                </ul>
    ";
        }
        // line 91
        echo "                <form class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"input-group form-search\">
                        <input type=\"text\" id=\"searchForm\" class=\"form-control search-query\" autocomplete=\"off\" placeholder=\"";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Rechercher", array(), "menu_item");
        echo "\" fwp-autocomplete fwp-autocomplete-url-source=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portal_search", array("fields" => "customer", "modes" => "url", "searchString" => "*searchString*")), "html", null, true);
        echo "\">
                        ";
        // line 95
        echo "\t\t\t\t\t\t\t";
        // line 96
        echo "\t\t\t\t\t\t";
        // line 97
        echo "                    </div>
                </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"account\">Bonjour ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
";
        // line 106
        echo "                            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"><i class=\"icon-cog\"></i>Configuration</a></li>
                            <li class=\"divider\"></li>
                            <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-lock\"></i>Déconnexion</a>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "danger", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 119
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 120
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 121
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </div>

    ";
        // line 128
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 129
        echo "    ";
    }

    // line 134
    public function block_angular($context, array $blocks = array())
    {
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 135,  276 => 134,  272 => 129,  266 => 128,  262 => 126,  256 => 125,  246 => 121,  241 => 120,  236 => 119,  232 => 118,  219 => 108,  213 => 106,  208 => 101,  202 => 97,  200 => 96,  198 => 95,  192 => 93,  188 => 91,  184 => 89,  178 => 76,  173 => 74,  164 => 68,  159 => 66,  150 => 60,  145 => 58,  136 => 52,  131 => 50,  122 => 44,  115 => 40,  111 => 38,  109 => 37,  105 => 35,  101 => 33,  91 => 25,  88 => 24,  79 => 18,  77 => 12,  74 => 11,  68 => 10,  63 => 136,  61 => 135,  59 => 134,  54 => 132,  51 => 131,  49 => 24,  45 => 22,  43 => 11,  39 => 10,  34 => 8,  25 => 1,);
    }
}

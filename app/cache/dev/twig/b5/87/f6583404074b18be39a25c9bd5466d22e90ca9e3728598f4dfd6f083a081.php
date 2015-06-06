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
        $__internal_41c4d2d286043b2d720b60478aa0ef9503dc6edd13ad35d59175f15e9be5b3ad = $this->env->getExtension("native_profiler");
        $__internal_41c4d2d286043b2d720b60478aa0ef9503dc6edd13ad35d59175f15e9be5b3ad->enter($__internal_41c4d2d286043b2d720b60478aa0ef9503dc6edd13ad35d59175f15e9be5b3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bundled.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 134
        $this->displayBlock('angular', $context, $blocks);
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "</body>
</html>";
        
        $__internal_41c4d2d286043b2d720b60478aa0ef9503dc6edd13ad35d59175f15e9be5b3ad->leave($__internal_41c4d2d286043b2d720b60478aa0ef9503dc6edd13ad35d59175f15e9be5b3ad_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_597744ca73cfaa1eb8f22ec03a2676552b647895aaed85395376e17c4eb9f003 = $this->env->getExtension("native_profiler");
        $__internal_597744ca73cfaa1eb8f22ec03a2676552b647895aaed85395376e17c4eb9f003->enter($__internal_597744ca73cfaa1eb8f22ec03a2676552b647895aaed85395376e17c4eb9f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Domi'Gestion";
        
        $__internal_597744ca73cfaa1eb8f22ec03a2676552b647895aaed85395376e17c4eb9f003->leave($__internal_597744ca73cfaa1eb8f22ec03a2676552b647895aaed85395376e17c4eb9f003_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5ae5e86c56c525322c4463eaaa59cc6e89df9b01c059ca6a4714a28e341ed8c = $this->env->getExtension("native_profiler");
        $__internal_b5ae5e86c56c525322c4463eaaa59cc6e89df9b01c059ca6a4714a28e341ed8c->enter($__internal_b5ae5e86c56c525322c4463eaaa59cc6e89df9b01c059ca6a4714a28e341ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bundled.css"), "html", null, true);
        echo "\"/>
        <!--[if lt IE 9]>
        <![endif]-->
    ";
        
        $__internal_b5ae5e86c56c525322c4463eaaa59cc6e89df9b01c059ca6a4714a28e341ed8c->leave($__internal_b5ae5e86c56c525322c4463eaaa59cc6e89df9b01c059ca6a4714a28e341ed8c_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4e0c0c2533338aafa7d0683bb258b619fb0aa1192620acbca2e795d342b0f7f = $this->env->getExtension("native_profiler");
        $__internal_d4e0c0c2533338aafa7d0683bb258b619fb0aa1192620acbca2e795d342b0f7f->enter($__internal_d4e0c0c2533338aafa7d0683bb258b619fb0aa1192620acbca2e795d342b0f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo-white.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
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
        
        $__internal_d4e0c0c2533338aafa7d0683bb258b619fb0aa1192620acbca2e795d342b0f7f->leave($__internal_d4e0c0c2533338aafa7d0683bb258b619fb0aa1192620acbca2e795d342b0f7f_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_39c7d1ffab955a9a24c0c235bf37300e89f5143c17346dc30f129a9a9be10610 = $this->env->getExtension("native_profiler");
        $__internal_39c7d1ffab955a9a24c0c235bf37300e89f5143c17346dc30f129a9a9be10610->enter($__internal_39c7d1ffab955a9a24c0c235bf37300e89f5143c17346dc30f129a9a9be10610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 129
        echo "    ";
        
        $__internal_39c7d1ffab955a9a24c0c235bf37300e89f5143c17346dc30f129a9a9be10610->leave($__internal_39c7d1ffab955a9a24c0c235bf37300e89f5143c17346dc30f129a9a9be10610_prof);

    }

    // line 134
    public function block_angular($context, array $blocks = array())
    {
        $__internal_71fad22c6d23e93f2c0e3ed8d98b73cea9fc9d873f843088bfb49f80e372008e = $this->env->getExtension("native_profiler");
        $__internal_71fad22c6d23e93f2c0e3ed8d98b73cea9fc9d873f843088bfb49f80e372008e->enter($__internal_71fad22c6d23e93f2c0e3ed8d98b73cea9fc9d873f843088bfb49f80e372008e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        
        $__internal_71fad22c6d23e93f2c0e3ed8d98b73cea9fc9d873f843088bfb49f80e372008e->leave($__internal_71fad22c6d23e93f2c0e3ed8d98b73cea9fc9d873f843088bfb49f80e372008e_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e817de90ab54ce4ad81e95726022244c685fe356a2133437271ff5cb8ac8ff8 = $this->env->getExtension("native_profiler");
        $__internal_2e817de90ab54ce4ad81e95726022244c685fe356a2133437271ff5cb8ac8ff8->enter($__internal_2e817de90ab54ce4ad81e95726022244c685fe356a2133437271ff5cb8ac8ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e817de90ab54ce4ad81e95726022244c685fe356a2133437271ff5cb8ac8ff8->leave($__internal_2e817de90ab54ce4ad81e95726022244c685fe356a2133437271ff5cb8ac8ff8_prof);

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
        return array (  317 => 135,  306 => 134,  299 => 129,  287 => 128,  283 => 126,  277 => 125,  267 => 121,  262 => 120,  257 => 119,  253 => 118,  240 => 108,  234 => 106,  229 => 101,  223 => 97,  221 => 96,  219 => 95,  213 => 93,  209 => 91,  205 => 89,  199 => 76,  194 => 74,  185 => 68,  180 => 66,  171 => 60,  166 => 58,  157 => 52,  152 => 50,  143 => 44,  136 => 40,  132 => 38,  130 => 37,  126 => 35,  122 => 33,  112 => 25,  106 => 24,  94 => 18,  92 => 12,  86 => 11,  74 => 10,  66 => 136,  64 => 135,  62 => 134,  57 => 132,  54 => 131,  52 => 24,  48 => 22,  46 => 11,  42 => 10,  37 => 8,  28 => 1,);
    }
}

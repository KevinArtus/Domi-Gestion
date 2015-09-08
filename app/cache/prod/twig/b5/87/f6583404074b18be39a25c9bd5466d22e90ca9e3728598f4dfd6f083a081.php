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
        $__internal_13300ed440ac5dffe25c0f899a6d9dd09add22dd2d337fb8436189d76b821a2c = $this->env->getExtension("native_profiler");
        $__internal_13300ed440ac5dffe25c0f899a6d9dd09add22dd2d337fb8436189d76b821a2c->enter($__internal_13300ed440ac5dffe25c0f899a6d9dd09add22dd2d337fb8436189d76b821a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_13300ed440ac5dffe25c0f899a6d9dd09add22dd2d337fb8436189d76b821a2c->leave($__internal_13300ed440ac5dffe25c0f899a6d9dd09add22dd2d337fb8436189d76b821a2c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_baa403e5668acc52a712a81577796c8168f22fae0a3898b7d0301bd013505cf1 = $this->env->getExtension("native_profiler");
        $__internal_baa403e5668acc52a712a81577796c8168f22fae0a3898b7d0301bd013505cf1->enter($__internal_baa403e5668acc52a712a81577796c8168f22fae0a3898b7d0301bd013505cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Domi'Gestion";
        
        $__internal_baa403e5668acc52a712a81577796c8168f22fae0a3898b7d0301bd013505cf1->leave($__internal_baa403e5668acc52a712a81577796c8168f22fae0a3898b7d0301bd013505cf1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a6b9fd334250abf731200544e8132fd5dd3c5aecf91347eeb381bdd63e81d8b = $this->env->getExtension("native_profiler");
        $__internal_5a6b9fd334250abf731200544e8132fd5dd3c5aecf91347eeb381bdd63e81d8b->enter($__internal_5a6b9fd334250abf731200544e8132fd5dd3c5aecf91347eeb381bdd63e81d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bundled.css"), "html", null, true);
        echo "\"/>
        <!--[if lt IE 9]>
        <![endif]-->
    ";
        
        $__internal_5a6b9fd334250abf731200544e8132fd5dd3c5aecf91347eeb381bdd63e81d8b->leave($__internal_5a6b9fd334250abf731200544e8132fd5dd3c5aecf91347eeb381bdd63e81d8b_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_500640f877e74ce923a8b9696d6a30f58416b92311f507d8f403478b02cc9920 = $this->env->getExtension("native_profiler");
        $__internal_500640f877e74ce923a8b9696d6a30f58416b92311f507d8f403478b02cc9920->enter($__internal_500640f877e74ce923a8b9696d6a30f58416b92311f507d8f403478b02cc9920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
            // line 42
            echo "                        ";
            // line 43
            echo "                        ";
            // line 44
            echo "                            ";
            // line 45
            echo "                        ";
            // line 46
            echo "                    ";
            // line 47
            echo "                    ";
            // line 48
            echo "                        ";
            // line 49
            echo "                        ";
            // line 50
            echo "                            ";
            // line 51
            echo "                            ";
            // line 52
            echo "                            ";
            // line 53
            echo "                        ";
            // line 54
            echo "                    ";
            // line 55
            echo "                    <li class=\"dropdown\">
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
                    ";
            // line 64
            echo "                        ";
            // line 65
            echo "                        ";
            // line 66
            echo "                            ";
            // line 67
            echo "                            ";
            // line 68
            echo "                            ";
            // line 69
            echo "                        ";
            // line 70
            echo "                    ";
            // line 71
            echo "                    <li class=\"dropdown\">
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
        
        $__internal_500640f877e74ce923a8b9696d6a30f58416b92311f507d8f403478b02cc9920->leave($__internal_500640f877e74ce923a8b9696d6a30f58416b92311f507d8f403478b02cc9920_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_ee304ea1cb4d3798f6a78519774a32fed9ca691f60b4d58ffc26af5e53e4342d = $this->env->getExtension("native_profiler");
        $__internal_ee304ea1cb4d3798f6a78519774a32fed9ca691f60b4d58ffc26af5e53e4342d->enter($__internal_ee304ea1cb4d3798f6a78519774a32fed9ca691f60b4d58ffc26af5e53e4342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 129
        echo "    ";
        
        $__internal_ee304ea1cb4d3798f6a78519774a32fed9ca691f60b4d58ffc26af5e53e4342d->leave($__internal_ee304ea1cb4d3798f6a78519774a32fed9ca691f60b4d58ffc26af5e53e4342d_prof);

    }

    // line 134
    public function block_angular($context, array $blocks = array())
    {
        $__internal_c8c16ff882357055ebd7ec657fddfbce5a4b6c600b100ed219dcb4c004a4b7c6 = $this->env->getExtension("native_profiler");
        $__internal_c8c16ff882357055ebd7ec657fddfbce5a4b6c600b100ed219dcb4c004a4b7c6->enter($__internal_c8c16ff882357055ebd7ec657fddfbce5a4b6c600b100ed219dcb4c004a4b7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "angular"));

        
        $__internal_c8c16ff882357055ebd7ec657fddfbce5a4b6c600b100ed219dcb4c004a4b7c6->leave($__internal_c8c16ff882357055ebd7ec657fddfbce5a4b6c600b100ed219dcb4c004a4b7c6_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78c335d4fdce87e487684b3c31c9bace6157729276001ce1cb09e0a1e11295e7 = $this->env->getExtension("native_profiler");
        $__internal_78c335d4fdce87e487684b3c31c9bace6157729276001ce1cb09e0a1e11295e7->enter($__internal_78c335d4fdce87e487684b3c31c9bace6157729276001ce1cb09e0a1e11295e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78c335d4fdce87e487684b3c31c9bace6157729276001ce1cb09e0a1e11295e7->leave($__internal_78c335d4fdce87e487684b3c31c9bace6157729276001ce1cb09e0a1e11295e7_prof);

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
        return array (  324 => 135,  313 => 134,  306 => 129,  294 => 128,  290 => 126,  284 => 125,  274 => 121,  269 => 120,  264 => 119,  260 => 118,  247 => 108,  241 => 106,  236 => 101,  230 => 97,  228 => 96,  226 => 95,  220 => 93,  216 => 91,  212 => 89,  206 => 76,  201 => 74,  196 => 71,  194 => 70,  192 => 69,  190 => 68,  188 => 67,  186 => 66,  184 => 65,  182 => 64,  176 => 60,  171 => 58,  166 => 55,  164 => 54,  162 => 53,  160 => 52,  158 => 51,  156 => 50,  154 => 49,  152 => 48,  150 => 47,  148 => 46,  146 => 45,  144 => 44,  142 => 43,  140 => 42,  136 => 40,  132 => 38,  130 => 37,  126 => 35,  122 => 33,  112 => 25,  106 => 24,  94 => 18,  92 => 12,  86 => 11,  74 => 10,  66 => 136,  64 => 135,  62 => 134,  57 => 132,  54 => 131,  52 => 24,  48 => 22,  46 => 11,  42 => 10,  37 => 8,  28 => 1,);
    }
}

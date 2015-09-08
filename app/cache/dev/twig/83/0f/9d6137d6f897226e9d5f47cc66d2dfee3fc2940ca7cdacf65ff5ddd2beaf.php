<?php

/* StanhomeRhBundle:Customer:show.html.twig */
class __TwigTemplate_830f9d6137d6f897226e9d5f47cc66d2dfee3fc2940ca7cdacf65ff5ddd2beaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StanhomeRhBundle:Customer:show.html.twig", 1);
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
        $__internal_a805989fa5a9e8ca8c768258226881cc59100094f82c27111bca642247bb8a31 = $this->env->getExtension("native_profiler");
        $__internal_a805989fa5a9e8ca8c768258226881cc59100094f82c27111bca642247bb8a31->enter($__internal_a805989fa5a9e8ca8c768258226881cc59100094f82c27111bca642247bb8a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StanhomeRhBundle:Customer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a805989fa5a9e8ca8c768258226881cc59100094f82c27111bca642247bb8a31->leave($__internal_a805989fa5a9e8ca8c768258226881cc59100094f82c27111bca642247bb8a31_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c76ba48b0cd11260389c173541297bfe218facc9191cc49b31601145618c7084 = $this->env->getExtension("native_profiler");
        $__internal_c76ba48b0cd11260389c173541297bfe218facc9191cc49b31601145618c7084->enter($__internal_c76ba48b0cd11260389c173541297bfe218facc9191cc49b31601145618c7084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("stanhome_portal_dashboard_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomePortalBundle.global.dashboard"), "html", null, true);
        echo "</a></li>
        <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("stanhome_rh_customer_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.header"), "html", null, true);
        echo "</a></li>
        <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.title"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "prenom", array()), "html", null, true);
        echo "</li>
    </ol>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div id=\"fwp-content\" class=\"col-md-12 \">
                <div class=\"row\">
                    <div class=\"col-md-2  col-md-offset-1\">
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"col-md-8 col-md-offset-2 container\">
                            <div id=\"contact-card\" class=\"col-md-12 reset\">
                                <div class=\"col-md-12  center\">
                                    <h3><span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "prenom", array()), "html", null, true);
        echo "</span><span class=\"col-md-offset-1\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "nom", array())), "html", null, true);
        echo "</span></h3>
                                </div>
                                <div class=\"panel panel-body\">
                                    <div class=\"col-md-4 center\">
                                        <h5 class=\"uppercase label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.phone"), "html", null, true);
        echo "</h5>
                                        <div>
                                            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "fixe", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
                                <div  class=\"col-md-8 col-md-offset-2 panel panel-body\">
                                    <div class=\"col-md-4\">
                                        <i class=\"icon-envelope \"></i>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <span><a href=\"mailto:";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "</a></span>
                                    </div>
                                </div>
                                <div class=\"col-md-8 col-md-offset-2 panel panel-body\">
                                    <div class=\"col-md-4\">
                                        <i class=\"icon-phone\"></i>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <span>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "fixe", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-md-8 col-md-offset-2 panel panel-body\">
                                    <div class=\"col-md-4\">
                                        <i class=\"icon-phone\"></i>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "portable", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"container\">
                        <div class=\"col-md-10 col-md-offset-1 panel panel-body panel-info\">
                            <div class=\"col-md-12 container panel-heading center\">
                                ";
        // line 63
        echo "                                <h3 class=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.address"), "html", null, true);
        echo "</h3>
                            </div>
                            <div class=\"col-md-5 panel panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <p class=\"col-md-offset-1\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "address", array()), "html", null, true);
        echo "</p>
                                        <p class=\"col-md-offset-1\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "cp", array()), "html", null, true);
        echo "<span class=\"col-md-offset-1\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "city", array()), "html", null, true);
        echo "</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-7\">
                                ";
        // line 75
        echo "                                        ";
        // line 76
        echo "                                ";
        // line 77
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 81
        echo "                    ";
        // line 82
        echo "                        ";
        // line 83
        echo "                            ";
        // line 84
        echo "                            ";
        // line 85
        echo "                                ";
        // line 86
        echo "                                ";
        // line 87
        echo "                                ";
        // line 88
        echo "                                ";
        // line 89
        echo "                                ";
        // line 90
        echo "                            ";
        // line 91
        echo "                            ";
        // line 92
        echo "                            ";
        // line 93
        echo "                            ";
        // line 94
        echo "                                ";
        // line 95
        echo "                                    ";
        // line 96
        echo "                                        ";
        // line 97
        echo "                                            ";
        // line 98
        echo "                                        ";
        // line 99
        echo "                                        ";
        // line 100
        echo "                                    ";
        // line 101
        echo "                                    ";
        // line 102
        echo "                                    ";
        // line 103
        echo "                                    ";
        // line 104
        echo "                                    ";
        // line 105
        echo "                                    ";
        // line 106
        echo "                                    ";
        // line 107
        echo "
                                ";
        // line 109
        echo "                            ";
        // line 110
        echo "                            ";
        // line 111
        echo "                        ";
        // line 112
        echo "                    ";
        // line 113
        echo "                    ";
        // line 114
        echo "                        ";
        // line 115
        echo "                    ";
        // line 116
        echo "
                    <h3>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.nbmeeting"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination2"]) ? $context["pagination2"] : $this->getContext($context, "pagination2")), "getTotalItemCount", array()), "html", null, true);
        echo "</h3>
                    <div class=\"container\">
                        <table id=\"tableShipping\" class=\"table table-hover table-responsive table-striped table-bordered\">
                            <thead>
                            <tr>
                                <th>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.customer"), "html", null, true);
        echo "</th>
                                <th>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.date"), "html", null, true);
        echo "</th>
                                <th>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.km"), "html", null, true);
        echo "</th>
                                <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.nbPersons"), "html", null, true);
        echo "</th>
                                <th>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.montantTtc"), "html", null, true);
        echo "</th>
                                <th>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.montantHt"), "html", null, true);
        echo "</th>
                                <th>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_show.address"), "html", null, true);
        echo "</th>
                                <th>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.modify"), "html", null, true);
        echo "</th>
                                <th>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.delete"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination2"]) ? $context["pagination2"] : $this->getContext($context, "pagination2")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 135
            echo "                                <tr>
                                    <td><span class=\"label label-default\"> ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "customer", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "customer", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                                    <td><span class=\"label label-default\">";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</span></td>
                                    <td><span class=\"label label-default\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "nbKm", array()), "html", null, true);
            echo "</span></td>
                                    <td><span class=\"label label-default\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "nbPersons", array()), "html", null, true);
            echo "</span></td>
                                    <td><span class=\"label label-default\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "montantTtc", array()), "html", null, true);
            echo " €</span></td>
                                    <td><span class=\"label label-default\">";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "montantHt", array()), "html", null, true);
            echo " €</span></td>
                                    <td><span class=\"label label-default\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "inlineAddress", array()), "html", null, true);
            echo "</span></td>
                                    <input type='hidden' name='_method' value='PUT'>
                                    <td class=\"center\"><a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_meeting_meeting_edit", array("id" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil2\"></i></a></td>
                                    <input type='hidden' name='_method' value='DELETE'>
                                    <td class=\"center\"><a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_meeting_meeting_delete", array("id" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil2\"></i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"navigation\">
                        ";
        // line 153
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination2"]) ? $context["pagination2"] : $this->getContext($context, "pagination2")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c76ba48b0cd11260389c173541297bfe218facc9191cc49b31601145618c7084->leave($__internal_c76ba48b0cd11260389c173541297bfe218facc9191cc49b31601145618c7084_prof);

    }

    public function getTemplateName()
    {
        return "StanhomeRhBundle:Customer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 153,  342 => 149,  333 => 146,  328 => 144,  323 => 142,  319 => 141,  315 => 140,  311 => 139,  307 => 138,  303 => 137,  297 => 136,  294 => 135,  290 => 134,  283 => 130,  279 => 129,  275 => 128,  271 => 127,  267 => 126,  263 => 125,  259 => 124,  255 => 123,  251 => 122,  241 => 117,  238 => 116,  236 => 115,  234 => 114,  232 => 113,  230 => 112,  228 => 111,  226 => 110,  224 => 109,  221 => 107,  219 => 106,  217 => 105,  215 => 104,  213 => 103,  211 => 102,  209 => 101,  207 => 100,  205 => 99,  203 => 98,  201 => 97,  199 => 96,  197 => 95,  195 => 94,  193 => 93,  191 => 92,  189 => 91,  187 => 90,  185 => 89,  183 => 88,  181 => 87,  179 => 86,  177 => 85,  175 => 84,  173 => 83,  171 => 82,  169 => 81,  164 => 77,  162 => 76,  160 => 75,  150 => 69,  146 => 68,  137 => 63,  125 => 53,  114 => 45,  101 => 37,  89 => 28,  84 => 26,  75 => 22,  55 => 8,  49 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}

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
        $__internal_28be6a18f8d78a0cee0752e0385e40d95b51dc0ddad005cd813c4b9cf0cd8eb8 = $this->env->getExtension("native_profiler");
        $__internal_28be6a18f8d78a0cee0752e0385e40d95b51dc0ddad005cd813c4b9cf0cd8eb8->enter($__internal_28be6a18f8d78a0cee0752e0385e40d95b51dc0ddad005cd813c4b9cf0cd8eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StanhomeRhBundle:Customer:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28be6a18f8d78a0cee0752e0385e40d95b51dc0ddad005cd813c4b9cf0cd8eb8->leave($__internal_28be6a18f8d78a0cee0752e0385e40d95b51dc0ddad005cd813c4b9cf0cd8eb8_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea91cf1d6e8de00d15302acd6fc3225b4ee6f4b5e756f78426b8a36c46eb51f1 = $this->env->getExtension("native_profiler");
        $__internal_ea91cf1d6e8de00d15302acd6fc3225b4ee6f4b5e756f78426b8a36c46eb51f1->enter($__internal_ea91cf1d6e8de00d15302acd6fc3225b4ee6f4b5e756f78426b8a36c46eb51f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <h3>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.nbshopping"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</h3>
                    <div class=\"container\">
                        <table id=\"tableShipping\" class=\"table table-hover table-responsive table-striped table-bordered\">
                            <thead>
                            <tr>
                                <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.details"), "html", null, true);
        echo "</th>
                                <th>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.date"), "html", null, true);
        echo "</th>
                                <th>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.amount"), "html", null, true);
        echo "</th>
                                <th>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.modify"), "html", null, true);
        echo "</th>
                                <th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_show.delete"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["shopping"]) {
            // line 94
            echo "                                <tr>
                                    <td class=\"center\">
                                        <div class=\"checkbox left\">
                                            <input type=\"checkbox\" class=\"flat-checkbox-1 check\">
                                        </div>
                                        <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_shopping_shopping_show", array("id" => $this->getAttribute($context["shopping"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopping"], "id", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td><span class=\"label label-default\">";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["shopping"], "dateOrder", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "</span></td>
                                    <td><span class=\"label label-default\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopping"], "totalPrice", array()), "html", null, true);
            echo " €</span></td>
                                    <input type='hidden' name='_method' value='PUT'>
                                    <td class=\"center\"><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_shopping_shopping_edit", array("id" => $this->getAttribute($context["shopping"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil2\"></i></a></td>
                                    <input type='hidden' name='_method' value='DELETE'>
                                    <td class=\"center\"><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_shopping_shopping_delete", array("id" => $this->getAttribute($context["shopping"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil2\"></i></a></td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"navigation\">
                        ";
        // line 114
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>

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
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ea91cf1d6e8de00d15302acd6fc3225b4ee6f4b5e756f78426b8a36c46eb51f1->leave($__internal_ea91cf1d6e8de00d15302acd6fc3225b4ee6f4b5e756f78426b8a36c46eb51f1_prof);

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
        return array (  363 => 153,  357 => 149,  348 => 146,  343 => 144,  338 => 142,  334 => 141,  330 => 140,  326 => 139,  322 => 138,  318 => 137,  312 => 136,  309 => 135,  305 => 134,  298 => 130,  294 => 129,  290 => 128,  286 => 127,  282 => 126,  278 => 125,  274 => 124,  270 => 123,  266 => 122,  256 => 117,  250 => 114,  244 => 110,  234 => 106,  229 => 104,  224 => 102,  220 => 101,  213 => 99,  206 => 94,  202 => 93,  195 => 89,  191 => 88,  187 => 87,  183 => 86,  179 => 85,  169 => 80,  164 => 77,  162 => 76,  160 => 75,  150 => 69,  146 => 68,  137 => 63,  125 => 53,  114 => 45,  101 => 37,  89 => 28,  84 => 26,  75 => 22,  55 => 8,  49 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}

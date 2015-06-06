<?php

/* StanhomeRhBundle:Customer:index.html.twig */
class __TwigTemplate_f5b42425919f48e24613821810ed4a0a0fc77bb7e67b91a86425e050e8679cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StanhomeRhBundle:Customer:index.html.twig", 1);
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
        $__internal_4e0935e8fab8c67238b4929deab3251380fa7c069f99dfd3d2eba4257a804c9e = $this->env->getExtension("native_profiler");
        $__internal_4e0935e8fab8c67238b4929deab3251380fa7c069f99dfd3d2eba4257a804c9e->enter($__internal_4e0935e8fab8c67238b4929deab3251380fa7c069f99dfd3d2eba4257a804c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StanhomeRhBundle:Customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0935e8fab8c67238b4929deab3251380fa7c069f99dfd3d2eba4257a804c9e->leave($__internal_4e0935e8fab8c67238b4929deab3251380fa7c069f99dfd3d2eba4257a804c9e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_da98553aaa750498c240bf3c008276bff123571a4c3fedb8dcfbd23e949c32be = $this->env->getExtension("native_profiler");
        $__internal_da98553aaa750498c240bf3c008276bff123571a4c3fedb8dcfbd23e949c32be->enter($__internal_da98553aaa750498c240bf3c008276bff123571a4c3fedb8dcfbd23e949c32be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("stanhome_portal_dashboard_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomePortalBundle.global.dashboard"), "html", null, true);
        echo "</a></li>
        <li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("stanhome_rh_customer_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.header"), "html", null, true);
        echo "</a></li>
    </ol>
    <div id=\"fwp-content\" class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-2  col-md-offset-1\">
                <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.header"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo ")</h2>
            </div>
            ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "        </div>
        <div class=\"container\">
            ";
        // line 19
        echo "                ";
        // line 20
        echo "            ";
        // line 21
        echo "                <div class=\"panel panel-default table-responsive\">
                    <table id=\"tableShipping\" class=\"table table-hover table-responsive table-striped table-bordered\">
                        <thead>
                        <tr>
                            <th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Sexe", "customers.sexe");
        echo "</th>
                            <th";
        // line 26
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "c.nom"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nom", "c.nom");
        echo "</th>
                            ";
        // line 28
        echo "                            <th class=\"col-md-2\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.lastName"), "html", null, true);
        echo "</th>
                            <th class=\"col-md-2\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.fixe"), "html", null, true);
        echo "</th>
                            <th class=\"col-md-2\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.mobile"), "html", null, true);
        echo "</th>
                            <th class=\"col-md-2\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.email"), "html", null, true);
        echo "</th>
                            <th class=\"col-md-2\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.address"), "html", null, true);
        echo "</th>
                            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeRhBundle.customers.page_index.modify"), "html", null, true);
        echo "</th>
                            ";
        // line 35
        echo "                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 39
            echo "                            <tr>
                                <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "sexe", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_rh_customer_show", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "nom", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "fixe", array()), "html", null, true);
            echo "</td>
                                <td> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "portable", array()), "html", null, true);
            echo "</td>
                                <td> <a href=\"mailto:";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", array()), "html", null, true);
            echo "</a></td>
                                <td> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "inlineAddress", array()), "html", null, true);
            echo " </td>
                                <input type='hidden' name='_method' value='PUT'>
                                <td class=\"center\"><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_rh_customer_edit", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil2\"></i></a></td>
                                ";
            // line 52
            echo "                                ";
            // line 53
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"navigation\">
                    ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
            ";
        // line 62
        echo "        </div>
    </div>
";
        
        $__internal_da98553aaa750498c240bf3c008276bff123571a4c3fedb8dcfbd23e949c32be->leave($__internal_da98553aaa750498c240bf3c008276bff123571a4c3fedb8dcfbd23e949c32be_prof);

    }

    public function getTemplateName()
    {
        return "StanhomeRhBundle:Customer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  187 => 59,  181 => 55,  174 => 53,  172 => 52,  168 => 50,  163 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  138 => 42,  133 => 40,  130 => 39,  126 => 38,  121 => 35,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  96 => 28,  88 => 26,  84 => 25,  78 => 21,  76 => 20,  74 => 19,  70 => 16,  68 => 15,  66 => 14,  59 => 11,  49 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}

<?php

/* StanhomePortalBundle:Dashboard:index.html.twig */
class __TwigTemplate_be8885012e0236098036ae159588d775560e96f1a9a3e626ee5d451bf254848d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StanhomePortalBundle:Dashboard:index.html.twig", 1);
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
        $__internal_dd74aad9db2700e42590cbd36b070a95d22ba7a30a8e4acd6919f02d905cbefd = $this->env->getExtension("native_profiler");
        $__internal_dd74aad9db2700e42590cbd36b070a95d22ba7a30a8e4acd6919f02d905cbefd->enter($__internal_dd74aad9db2700e42590cbd36b070a95d22ba7a30a8e4acd6919f02d905cbefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StanhomePortalBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd74aad9db2700e42590cbd36b070a95d22ba7a30a8e4acd6919f02d905cbefd->leave($__internal_dd74aad9db2700e42590cbd36b070a95d22ba7a30a8e4acd6919f02d905cbefd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b066552311ee0d0b25cb2b0b10aee7cf92d5035841e09f0b258665a5aea0ac1 = $this->env->getExtension("native_profiler");
        $__internal_4b066552311ee0d0b25cb2b0b10aee7cf92d5035841e09f0b258665a5aea0ac1->enter($__internal_4b066552311ee0d0b25cb2b0b10aee7cf92d5035841e09f0b258665a5aea0ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("stanhome_portal_dashboard_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomePortalBundle.dashboard.page_index.dashboard"), "html", null, true);
        echo "</a></li>
    </ol>
    <div id=\"fwp-content\" class=\"col-md-12\">
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomePortalBundle.dashboard.page_index.header"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["salary"]) ? $context["salary"] : $this->getContext($context, "salary")), "html", null, true);
        echo "€</h1>
        <div class=\"row\">
            <div class=\"col-md-2  col-md-offset-1\">
                <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomePortalBundle.dashboard.page_index.titleMeeting"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</h2>
            </div>
        </div>
        <div class=\"container\">
            ";
        // line 16
        echo "            ";
        // line 17
        echo "            ";
        // line 18
        echo "            <div class=\"panel panel-default table-responsive\">
                <table id=\"tableShipping\" class=\"table table-hover table-responsive table-striped table-bordered\">
                    <thead>
                    <tr>
                        <th class=\"col-md-2\">";
        // line 22
        echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "name", $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.details"));
        echo "</th>
                        <th class=\"col-md-2\">";
        // line 23
        echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "name", $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.date"));
        echo "</th>
                        <th class=\"col-md-2\">";
        // line 24
        echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "name", $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.customer"));
        echo "</th>
                        <th class=\"col-md-2\">";
        // line 25
        echo $this->env->getExtension('sylius_resource')->renderSortingLink($this->env, "name", $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.address"));
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 30
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_meeting_meeting_show", array("id" => $this->getAttribute($context["meeting"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("StanhomeMeetingBundle.meetings.page_index.details"), "html", null, true);
            echo "</a>
                            </td>
                            <td> ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["meeting"], "date", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                            <td> <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stanhome_rh_customer_show", array("id" => $this->getAttribute($this->getAttribute($context["meeting"], "customer", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "customer", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["meeting"], "customer", array()), "prenom", array()), "html", null, true);
            echo "</a></td>
                            <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["meeting"], "inlineAddress", array()), "html", null, true);
            echo " </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"navigation\">
                ";
        // line 43
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
            ";
        // line 46
        echo "        </div>
    </div>
";
        
        $__internal_4b066552311ee0d0b25cb2b0b10aee7cf92d5035841e09f0b258665a5aea0ac1->leave($__internal_4b066552311ee0d0b25cb2b0b10aee7cf92d5035841e09f0b258665a5aea0ac1_prof);

    }

    public function getTemplateName()
    {
        return "StanhomePortalBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  138 => 43,  132 => 39,  123 => 36,  115 => 35,  111 => 34,  104 => 32,  100 => 30,  96 => 29,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  71 => 18,  69 => 17,  67 => 16,  58 => 11,  51 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}

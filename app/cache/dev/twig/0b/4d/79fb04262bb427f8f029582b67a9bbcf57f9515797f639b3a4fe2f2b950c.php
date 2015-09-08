<?php

/* SyliusResourceBundle:Twig:sorting.html.twig */
class __TwigTemplate_0b4d79fb04262bb427f8f029582b67a9bbcf57f9515797f639b3a4fe2f2b950c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_082e40ef419f58e737ad296faae540887910a915cc2d41efc6be81eb224eb3a0 = $this->env->getExtension("native_profiler");
        $__internal_082e40ef419f58e737ad296faae540887910a915cc2d41efc6be81eb224eb3a0->enter($__internal_082e40ef419f58e737ad296faae540887910a915cc2d41efc6be81eb224eb3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:sorting.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
    ";
        // line 3
        if ((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))) {
            // line 4
            if (((isset($context["currentOrder"]) ? $context["currentOrder"] : $this->getContext($context, "currentOrder")) == "desc")) {
                // line 5
                echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
            } else {
                // line 7
                echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
            }
        }
        // line 10
        echo "</a>
";
        
        $__internal_082e40ef419f58e737ad296faae540887910a915cc2d41efc6be81eb224eb3a0->leave($__internal_082e40ef419f58e737ad296faae540887910a915cc2d41efc6be81eb224eb3a0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 7,  35 => 5,  33 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}

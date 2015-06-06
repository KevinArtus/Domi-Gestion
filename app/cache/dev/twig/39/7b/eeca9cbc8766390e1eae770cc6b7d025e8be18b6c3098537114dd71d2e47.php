<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_397beeca9cbc8766390e1eae770cc6b7d025e8be18b6c3098537114dd71d2e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6234d5f296955a6428eed219539b992635e2ad12b069166cd1f79d695de2a5a = $this->env->getExtension("native_profiler");
        $__internal_a6234d5f296955a6428eed219539b992635e2ad12b069166cd1f79d695de2a5a->enter($__internal_a6234d5f296955a6428eed219539b992635e2ad12b069166cd1f79d695de2a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6234d5f296955a6428eed219539b992635e2ad12b069166cd1f79d695de2a5a->leave($__internal_a6234d5f296955a6428eed219539b992635e2ad12b069166cd1f79d695de2a5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aacda13dd8178e3a11d591b2df4858b04c58818acf8b84f2d37857f29c4dc7b2 = $this->env->getExtension("native_profiler");
        $__internal_aacda13dd8178e3a11d591b2df4858b04c58818acf8b84f2d37857f29c4dc7b2->enter($__internal_aacda13dd8178e3a11d591b2df4858b04c58818acf8b84f2d37857f29c4dc7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aacda13dd8178e3a11d591b2df4858b04c58818acf8b84f2d37857f29c4dc7b2->leave($__internal_aacda13dd8178e3a11d591b2df4858b04c58818acf8b84f2d37857f29c4dc7b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_630a4bb84e15f7290a3317aa4407c4fddfa60d57c8366de2752da8e294f544e3 = $this->env->getExtension("native_profiler");
        $__internal_630a4bb84e15f7290a3317aa4407c4fddfa60d57c8366de2752da8e294f544e3->enter($__internal_630a4bb84e15f7290a3317aa4407c4fddfa60d57c8366de2752da8e294f544e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_630a4bb84e15f7290a3317aa4407c4fddfa60d57c8366de2752da8e294f544e3->leave($__internal_630a4bb84e15f7290a3317aa4407c4fddfa60d57c8366de2752da8e294f544e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9771a8085a4a426e85e873b2fa97e86ed21bbf4c2307a623a163b8bf9abb2766 = $this->env->getExtension("native_profiler");
        $__internal_9771a8085a4a426e85e873b2fa97e86ed21bbf4c2307a623a163b8bf9abb2766->enter($__internal_9771a8085a4a426e85e873b2fa97e86ed21bbf4c2307a623a163b8bf9abb2766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9771a8085a4a426e85e873b2fa97e86ed21bbf4c2307a623a163b8bf9abb2766->leave($__internal_9771a8085a4a426e85e873b2fa97e86ed21bbf4c2307a623a163b8bf9abb2766_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}

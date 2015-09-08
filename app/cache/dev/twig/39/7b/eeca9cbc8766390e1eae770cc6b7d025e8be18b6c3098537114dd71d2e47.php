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
        $__internal_8f6c09a1ac8df6833dc473ed103f814850a3103f519dd6e9cabe262bc2af9e11 = $this->env->getExtension("native_profiler");
        $__internal_8f6c09a1ac8df6833dc473ed103f814850a3103f519dd6e9cabe262bc2af9e11->enter($__internal_8f6c09a1ac8df6833dc473ed103f814850a3103f519dd6e9cabe262bc2af9e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f6c09a1ac8df6833dc473ed103f814850a3103f519dd6e9cabe262bc2af9e11->leave($__internal_8f6c09a1ac8df6833dc473ed103f814850a3103f519dd6e9cabe262bc2af9e11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0581876595f1d051e4178c465ef7124a5ac81941489971e09ac4d563cbaf917 = $this->env->getExtension("native_profiler");
        $__internal_e0581876595f1d051e4178c465ef7124a5ac81941489971e09ac4d563cbaf917->enter($__internal_e0581876595f1d051e4178c465ef7124a5ac81941489971e09ac4d563cbaf917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e0581876595f1d051e4178c465ef7124a5ac81941489971e09ac4d563cbaf917->leave($__internal_e0581876595f1d051e4178c465ef7124a5ac81941489971e09ac4d563cbaf917_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95a7964917ef8cbec60c7af5035faf7b6108abbed31ae3820b2c6bd3cc6c823e = $this->env->getExtension("native_profiler");
        $__internal_95a7964917ef8cbec60c7af5035faf7b6108abbed31ae3820b2c6bd3cc6c823e->enter($__internal_95a7964917ef8cbec60c7af5035faf7b6108abbed31ae3820b2c6bd3cc6c823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95a7964917ef8cbec60c7af5035faf7b6108abbed31ae3820b2c6bd3cc6c823e->leave($__internal_95a7964917ef8cbec60c7af5035faf7b6108abbed31ae3820b2c6bd3cc6c823e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed16ff735f64f506bc7fd72443d655b35e84e83e766976fe773915183b6968e9 = $this->env->getExtension("native_profiler");
        $__internal_ed16ff735f64f506bc7fd72443d655b35e84e83e766976fe773915183b6968e9->enter($__internal_ed16ff735f64f506bc7fd72443d655b35e84e83e766976fe773915183b6968e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ed16ff735f64f506bc7fd72443d655b35e84e83e766976fe773915183b6968e9->leave($__internal_ed16ff735f64f506bc7fd72443d655b35e84e83e766976fe773915183b6968e9_prof);

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

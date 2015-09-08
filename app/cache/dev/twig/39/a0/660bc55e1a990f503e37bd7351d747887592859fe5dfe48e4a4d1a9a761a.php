<?php

/* FOSElasticaBundle:Collector:elastica.html.twig */
class __TwigTemplate_39a0660bc55e1a990f503e37bd7351d747887592859fe5dfe48e4a4d1a9a761a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "FOSElasticaBundle:Collector:elastica.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_151ebc5158de4ca997b0bd20c8964f4b8c1511bba659c14b914bbca5826b79b9 = $this->env->getExtension("native_profiler");
        $__internal_151ebc5158de4ca997b0bd20c8964f4b8c1511bba659c14b914bbca5826b79b9->enter($__internal_151ebc5158de4ca997b0bd20c8964f4b8c1511bba659c14b914bbca5826b79b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSElasticaBundle:Collector:elastica.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151ebc5158de4ca997b0bd20c8964f4b8c1511bba659c14b914bbca5826b79b9->leave($__internal_151ebc5158de4ca997b0bd20c8964f4b8c1511bba659c14b914bbca5826b79b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9336fcaf45b8e3aa536cba43e79bf89510c51a3c15a36e5c7d2ecc2bc9677a6 = $this->env->getExtension("native_profiler");
        $__internal_d9336fcaf45b8e3aa536cba43e79bf89510c51a3c15a36e5c7d2ecc2bc9677a6->enter($__internal_d9336fcaf45b8e3aa536cba43e79bf89510c51a3c15a36e5c7d2ecc2bc9677a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img alt=\"elastica\" src=\"data:image/png;base64,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\" />
        <span class=\"sf-toolbar-status\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
    ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()) > 0)) {
            // line 8
            echo "        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
    ";
        }
        // line 10
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Queries</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query Time</b>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "FOSElasticaBundle:Collector:elastica.html.twig", 21)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_d9336fcaf45b8e3aa536cba43e79bf89510c51a3c15a36e5c7d2ecc2bc9677a6->leave($__internal_d9336fcaf45b8e3aa536cba43e79bf89510c51a3c15a36e5c7d2ecc2bc9677a6_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b106dfae5ee1420ec5b5a00338e834d3503b2cfac5e4b9ce17cf644285668a96 = $this->env->getExtension("native_profiler");
        $__internal_b106dfae5ee1420ec5b5a00338e834d3503b2cfac5e4b9ce17cf644285668a96->enter($__internal_b106dfae5ee1420ec5b5a00338e834d3503b2cfac5e4b9ce17cf644285668a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 25
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAQAAADPJofWAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH2woEDg0xnxGaxwAAA51JREFUOMt100ts1FUUx/Hvufc/8x9mOrTTDpbysEVsqTzUqAsRgpqQGIJiIhtZSEJcqNGFJrSiZSPYkKALBUyAiLEuWKjBhdFAaEwwPNQqEAgEaA0FEWh4lE477/+9x0WLsST+Fmf1ycnJvecI/0knW4ENgZkhr5gVMtcEMmB64z1msCOCboR70tlkOuQdQREMBovF7tQt71/mXtzZQo8s89jLycFETiSqKd/v5wSY32VN18Ak3JGiR1d7an+Y3Z/Np7yVeCY/9czU4efF2iPxZ+wLXPgXP7WCTZ7MvvlnZlbqSJnGGbMeam5pk6HTIw9qs7tiH6D9vrbXW9e1Tus/sbhHZ8VOtfU1uZSExCUe1ExLtqayjcPnx4qNssjOs3TQrY9rYdVB2aFRw7HWq2kbJxCjFAsDoY+3hbkbw9ebNBsQ6EJVNlb3yQIDY8lcaAIsBisxiSXGToTNWqi/JUWXMIoabrK/95ymDNYHzmDUYAiwWOImOle+EI2AxyiKVydQGVAIoyneiBUNsAQEWIn+LA2NJqOYw3hUFQV2DFbu+FSuKTk9kRGMBoyPE7m8vza7UhMrmQNlV+NwAlDZXmXkkcHaeNamQBCEiLyeb7w631C71yxfr8/6YT8GUP6ifKlcf3xJX26kWNQyJfL+TvVs3S8rCw31hfRm2/KzL+iGQz8BnLjz8EVd5TPXF9wI/E0ZK/gr6SOLj7+Yz9RRu2bmMXm6y2/0A/rS0f6JL985+prVQAJiKEU8kLid6ezaA8Gh7iVP6BKtHad7njQr+xmSeFELLi2YovwlJ5Nbu07DNoLFoVNVrwBvh6feSMwSDcVuLvWF0y3Brd9mDlRlTsuVweGPCRzI+NOBW2rW3iYv5ZPfbrm7ji2fx1/Vkn7U/OGlivE4HA5Yh+yqUKFAYa3QfXcVf/R7Segy3wDGo4x3Tr3H3LLmqX6mZ5+jC4A5DO7jLR3SmAoYj8eTqx5uMR+UKErp78q2/e7ARNuLgE940bR1E9jpcKx+16MxJUd5+68XJp+a5DnqFxU/yYZG8XiSfJ+awkIW9WW+zLF8sh6NeqJb0cs+biIcKjW8u3T3xj+uZXZ/PbSe3km2nHWbogb3ZlSgPWz/bt71tsf432Qa64bSh5PTIFAU0pqdG3oRIiCgBBgsVTwRpYwmnWgMAlUd1aR+6m+DA4QqBlDKRDgifCqq8WO+CoFW9Ctd7dvBA+NV8DgiognuSv4bbsA/e9y1PQRZggAAAAAASUVORK5CYII=\" alt=\"\" /></span>
        <strong>Elastica</strong>
        <span class=\"count\">
            <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
        echo "</span>
            <span>";
        // line 30
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </span>
    </span>
";
        
        $__internal_b106dfae5ee1420ec5b5a00338e834d3503b2cfac5e4b9ce17cf644285668a96->leave($__internal_b106dfae5ee1420ec5b5a00338e834d3503b2cfac5e4b9ce17cf644285668a96_prof);

    }

    // line 35
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48d10405608940d616e78e6e217a648fdfc7e95d0b024ce29248d41996d219a1 = $this->env->getExtension("native_profiler");
        $__internal_48d10405608940d616e78e6e217a648fdfc7e95d0b024ce29248d41996d219a1->enter($__internal_48d10405608940d616e78e6e217a648fdfc7e95d0b024ce29248d41996d219a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 36
        echo "    <h2>Queries</h2>

    ";
        // line 38
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array())) {
            // line 39
            echo "        <p>
            <em>Query logging is disabled.</em>
        <p>
    ";
        } elseif ( !$this->getAttribute(        // line 42
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array())) {
            // line 43
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 47
            echo "        <ul class=\"alt\">
            ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["query"]) {
                // line 49
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <strong>Path</strong>: ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "path", array()), "html", null, true);
                echo "<br />
                    <strong>Query</strong>: ";
                // line 51
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["query"], "queryString", array())), "html", null, true);
                echo "<br />
                    <strong>Method</strong>: ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "method", array()), "html", null, true);
                echo " <small>(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "connection", array()), "transport", array()), "html", null, true);
                echo " on ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "connection", array()), "host", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "connection", array()), "port", array()), "html", null, true);
                echo ")</small>
                    <div>
                        <code>";
                // line 54
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "data", array())), "html", null, true);
                echo "</code>
                    </div>
                    <small>
                        <strong>Time</strong>: ";
                // line 57
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["query"], "executionMS", array()) * 1000)), "html", null, true);
                echo " ms
                    </small>

                    ";
                // line 60
                if (twig_in_filter($this->getAttribute($this->getAttribute($context["query"], "connection", array()), "transport", array()), array(0 => "Http", 1 => "Https"))) {
                    // line 61
                    echo "                        <a href=\"#elastica_curl_query_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" onclick=\"return curl_version(this);\" style=\"text-decoration: none;\" title=\"Get the cURL repeatable query\">
                            <img alt=\"+\" src=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <img alt=\"-\" src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <small>Display cURL query</small>
                        </a>

                        <div style=\"display: none;\" id=\"elastica_curl_query_";
                    // line 67
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                            <code>curl -X";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "method", array()), "html", null, true);
                    echo " '";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "connection", array()), "transport", array())), "html", null, true);
                    echo "://";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "connection", array()), "host", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["query"], "connection", array()), "port", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "path", array()), "html", null, true);
                    if (twig_length_filter($this->env, $this->getAttribute($context["query"], "queryString", array()))) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["query"], "queryString", array())), "html", null, true);
                    }
                    echo "' -d '";
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["query"], "data", array())), "html", null, true);
                    echo "'</code>
                        </div>
                    ";
                }
                // line 71
                echo "                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "        </ul>

        <script type=\"text/javascript\">//<![CDATA[
            function curl_version(link) {
                \"use strict\";

                var sections = link.children;

                if (sections[0].style.display != 'none') {
                    sections[0].style.display = 'none';
                    sections[1].style.display = 'inline';

                    document.getElementById(link.hash.replace(\"#\", \"\")).style.display = 'block';
                } else {
                    sections[0].style.display = 'inline';
                    sections[1].style.display = 'none';

                    document.getElementById(link.hash.replace(\"#\", \"\")).style.display = 'none';
                }

                return false;
            }
        </script>
    ";
        }
        
        $__internal_48d10405608940d616e78e6e217a648fdfc7e95d0b024ce29248d41996d219a1->leave($__internal_48d10405608940d616e78e6e217a648fdfc7e95d0b024ce29248d41996d219a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSElasticaBundle:Collector:elastica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 73,  241 => 71,  221 => 68,  217 => 67,  210 => 63,  206 => 62,  201 => 61,  199 => 60,  193 => 57,  187 => 54,  176 => 52,  172 => 51,  168 => 50,  163 => 49,  146 => 48,  143 => 47,  137 => 43,  135 => 42,  130 => 39,  128 => 38,  124 => 36,  118 => 35,  107 => 30,  103 => 29,  97 => 25,  91 => 24,  83 => 21,  77 => 18,  70 => 14,  66 => 12,  63 => 11,  60 => 10,  54 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}

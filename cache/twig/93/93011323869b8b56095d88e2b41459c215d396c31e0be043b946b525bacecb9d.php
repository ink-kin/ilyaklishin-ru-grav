<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_3f4edcd99a85cc4d6607fe7e830317b1c505ca4f6fbd204ba26d662bcf5dfc26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "</head>

<body class=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "sidebar_position", []), "html", null, true);
        echo "-sidebar\">
    <div id=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 66
        echo "
    </div>

    ";
        // line 69
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
        <!--[if lte IE 8]><script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/js/ie/html5shiv.js"), "html", null, true);
        echo "\"></script><![endif]-->

        ";
        // line 28
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 29
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 31
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/js/ie/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://assets/css/ie8.css"), "html", null, true);
        echo "\"></script><![endif]-->

       ";
        // line 35
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 36
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('assets', $context, $blocks);
        // line 49
        echo "
    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/main.css"], "method");
        // line 17
        echo "        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 21
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/util.js"], "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/main.js"], "method");
        // line 24
        echo "        ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 45
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 46
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 47
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        // line 56
        echo "            <div id=\"content\">
                <div class=\"inner\">
                    ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                </div>
            </div>
        ";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "                    ";
    }

    // line 63
    public function block_sidebar($context, array $blocks = [])
    {
        // line 64
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 64)->display($context);
        // line 65
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 65,  244 => 64,  241 => 63,  237 => 59,  234 => 58,  228 => 60,  226 => 58,  222 => 56,  219 => 55,  212 => 47,  207 => 46,  204 => 45,  195 => 24,  192 => 23,  189 => 22,  186 => 21,  183 => 20,  180 => 19,  176 => 17,  173 => 16,  170 => 15,  165 => 49,  163 => 45,  160 => 44,  150 => 36,  148 => 35,  143 => 33,  139 => 32,  136 => 31,  132 => 29,  130 => 28,  125 => 26,  122 => 25,  120 => 19,  117 => 18,  115 => 15,  110 => 13,  107 => 12,  105 => 11,  97 => 10,  94 => 9,  91 => 8,  82 => 69,  77 => 66,  74 => 63,  72 => 55,  67 => 53,  63 => 51,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% set html_lang = grav.language.getActive ?: grav.config.site.default_lang %}
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ html_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />

        {% block stylesheets %}
            {% do assets.addCss('theme://assets/css/main.css') %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}

        <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/html5shiv.js') }}\"></script><![endif]-->

        {% if site.calendar %}
           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       {% endif %}

       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/respond.min.js') }}\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/css/ie8.css') }}\"></script><![endif]-->

       {% if site.calendar %}
        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    {% endif %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

    {% endblock head%}
</head>

<body class=\"{{ site.sidebar_position }}-sidebar\">
    <div id=\"wrapper\">
        {% block body %}
            <div id=\"content\">
                <div class=\"inner\">
                    {% block content %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}
        {% block sidebar %}
            {% include 'partials/sidebar.html.twig' %}
        {% endblock %}

    </div>

    {{ assets.js('bottom')|raw }} 
</body>
</html>
", "partials/base.html.twig", "/home/kincsadv/web/ilyaklishin.ru/public_html/user/themes/striped/templates/partials/base.html.twig");
    }
}

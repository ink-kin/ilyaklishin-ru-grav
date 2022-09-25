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

/* partials/blog_item.html.twig */
class __TwigTemplate_554f161f3a2453702da1d7f6b7b5eef2eefb204fc92035614767209fd40fb42a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<article class=\"box post post-excerpt\">

    ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "facebook", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "twitter", []))) {
            // line 4
            echo "    <script type=\"text/javascript\">
    ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "twitter", [])) {
                // line 6
                echo "    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
                echo "/&callback=?', function (data) {
        jQuery('#so-url-shares";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
                echo "').text(data.count);
    });
    ";
            }
            // line 10
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "facebook", [])) {
                // line 11
                echo "    jQuery.getJSON('http://graph.facebook.com/?id=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
                echo "', function (data) {
        jQuery('#so-fburl-shares";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
                echo "').text(data.shares);
    });
    ";
            }
            // line 15
            echo "    </script>
    ";
        }
        // line 17
        echo "    <header>
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 19
            echo "            <h2>
                ";
            // line 20
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 21
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
                echo "\"></a>
                ";
            }
            // line 23
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
            </h2>
            ";
        } else {
            // line 26
            echo "            <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a></h2>
        ";
        }
        // line 28
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", [])) {
            // line 29
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []), "html", null, true);
            echo "</p>
        ";
        }
        // line 31
        echo "    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M"), "html", null, true);
        echo "</span>
            <span class=\"day\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d"), "html", null, true);
        echo "</span>
        </span>
            ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "facebook", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "twitter", []))) {
            // line 39
            echo "            <ul class=\"stats\">
                ";
            // line 40
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "twitter", [])) {
                // line 41
                echo "                <li><a href=\"https://twitter.com/share\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
                echo "\" data-text=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
                echo "\" class=\"icon fa-twitter\"><span id=\"so-url-shares";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
                echo "\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                ";
            }
            // line 43
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", []), "facebook", [])) {
                // line 44
                echo "                <li><a href=\"http://www.facebook.com/sharer.php?u=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
                echo "\" class=\"icon fa-facebook\"><span id=\"so-fburl-shares";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
                echo "\">0</span></a></li>
                ";
            }
            // line 46
            echo "            </ul>
            ";
        }
        // line 48
        echo "        </div>

        ";
        // line 50
        if (($context["big_header"] ?? null)) {
            // line 51
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 1038, 1 => 437], "method"), "html", [0 => $this->getAttribute(($context["page"] ?? null), "title", []), 1 => $this->getAttribute(($context["page"] ?? null), "title", []), 2 => "image featured"], "method");
            echo "
        ";
        } else {
            // line 53
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 1038, 1 => 437], "method"), "html", [0 => $this->getAttribute(($context["page"] ?? null), "title", []), 1 => $this->getAttribute(($context["page"] ?? null), "title", []), 2 => "image featured"], "method");
            echo "
        ";
        }
        // line 55
        echo "
        ";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
            // line 57
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "html", null, true);
            echo "
        </span>
        ";
        }
        // line 62
        echo "
       ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 64
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 67
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/tag";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </ul>
        ";
        }
        // line 71
        echo "

    ";
        // line 73
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 74
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 75
            if ( !($context["truncate"] ?? null)) {
                // line 76
                echo "        ";
                $context["show_prev_next"] = true;
                // line 77
                echo "        ";
            }
            // line 78
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 79
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
        <p><a class=\"button\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 81
($context["truncate"] ?? null)) {
            // line 82
            echo "        <p>";
            echo Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
            echo "</p>
        <p><a class=\"button\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 85
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 86
            $context["show_prev_next"] = true;
            // line 87
            echo "    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if (($context["show_prev_next"] ?? null)) {
            // line 90
            echo "
        <p class=\"prev-next\">
            ";
            // line 92
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 93
                echo "                <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 95
            echo "
            ";
            // line 96
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 97
                echo "                <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 99
            echo "        </p>
    ";
        }
        // line 101
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 101,  304 => 99,  298 => 97,  296 => 96,  293 => 95,  287 => 93,  285 => 92,  281 => 90,  279 => 89,  276 => 88,  273 => 87,  271 => 86,  266 => 85,  261 => 83,  256 => 82,  254 => 81,  250 => 80,  245 => 79,  242 => 78,  239 => 77,  236 => 76,  234 => 75,  229 => 74,  227 => 73,  223 => 71,  219 => 69,  205 => 67,  201 => 66,  197 => 64,  195 => 63,  192 => 62,  186 => 59,  182 => 57,  180 => 56,  177 => 55,  171 => 53,  165 => 51,  163 => 50,  159 => 48,  155 => 46,  147 => 44,  144 => 43,  134 => 41,  132 => 40,  129 => 39,  127 => 38,  122 => 36,  118 => 35,  112 => 31,  106 => 29,  103 => 28,  95 => 26,  86 => 23,  80 => 21,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  66 => 15,  60 => 12,  55 => 11,  52 => 10,  46 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"box post post-excerpt\">

    {% if site.share.facebook or site.share.twitter %}
    <script type=\"text/javascript\">
    {% if site.share.twitter %}
    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url={{ page.url(true) }}/&callback=?', function (data) {
        jQuery('#so-url-shares{{ loop.index }}').text(data.count);
    });
    {% endif %}
    {% if site.share.facebook %}
    jQuery.getJSON('http://graph.facebook.com/?id={{ page.url(true) }}', function (data) {
        jQuery('#so-fburl-shares{{ loop.index }}').text(data.shares);
    });
    {% endif %}
    </script>
    {% endif %}
    <header>
        {% if page.header.link %}
            <h2>
                {% if page.header.continue_link is not same as(false) %}
                    <a href=\"{{ page.url }}\"></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h2>
            {% else %}
            <h2><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
        {% endif %}
        {% if page.header.description %}
        <p>{{ page.header.description }}</p>
        {% endif %}
    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">{{ page.date|date(\"M\") }}</span>
            <span class=\"day\">{{ page.date|date(\"d\") }}</span>
        </span>
            {% if site.share.facebook or site.share.twitter %}
            <ul class=\"stats\">
                {% if site.share.twitter %}
                <li><a href=\"https://twitter.com/share\" data-url=\"{{ page.url(true) }}\" data-text=\"{{ page.title }}\" class=\"icon fa-twitter\"><span id=\"so-url-shares{{ loop.index }}\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                {% endif %}
                {% if site.share.facebook %}
                <li><a href=\"http://www.facebook.com/sharer.php?u={{ page.url(true) }}\" class=\"icon fa-facebook\"><span id=\"so-fburl-shares{{ loop.index }}\">0</span></a></li>
                {% endif %}
            </ul>
            {% endif %}
        </div>

        {% if big_header %}
            {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured')|raw }}
        {% else %}
            {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured')|raw }}
        {% endif %}

        {% if page.header.author %}
        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            {{ page.header.author }}
        </span>
        {% endif %}

       {% if page.taxonomy.tag %}
        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            {% for tag in page.taxonomy.tag %}
            <li><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></li>
            {% endfor %}
        </ul>
        {% endif %}


    {% if page.header.continue_link is same as(false) %}
        <p>{{ page.content|raw }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary|raw }}</p>
        <p><a class=\"button\" href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        <p>{{ page.content|truncate(550)|raw }}</p>
        <p><a class=\"button\" href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content|raw }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

</article>
", "partials/blog_item.html.twig", "/home/kincsadv/web/ilyaklishin.ru/public_html/user/themes/striped/templates/partials/blog_item.html.twig");
    }
}

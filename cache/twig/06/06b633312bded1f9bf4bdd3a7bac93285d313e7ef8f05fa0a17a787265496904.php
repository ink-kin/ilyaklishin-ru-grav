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

/* feed.rss.twig */
class __TwigTemplate_4d56c9099548efdcc4a59484c7c8f5de793e719f2f19922870c2067140abce6a extends \Twig\Template
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
        // line 2
        $context["collection"] = ((array_key_exists("collection", $context)) ? (_twig_default_filter(($context["collection"] ?? null), $this->getAttribute(($context["page"] ?? null), "collection", []))) : ($this->getAttribute(($context["page"] ?? null), "collection", [])));
        // line 3
        $context["lastBuildDate"] = 0;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            $context["lastBuildDate"] = max(($context["lastBuildDate"] ?? null), $this->getAttribute($context["page"], "date", []));
            // line 6
            if ($this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "show_last_modified", [])) {
                // line 7
                $context["lastBuildDate"] = max(($context["feed_updated"] ?? null), $this->getAttribute($context["page"], "modified", []));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">
    <channel>
        <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "title", []), "html", null, true);
        echo "</title>
        <link>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "</link>
        <atom:link href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["uri"] ?? null), "rootUrl", [0 => true], "method") . $this->getAttribute(($context["uri"] ?? null), "uri", [], "method")), "html", null, true);
        echo "\" rel=\"self\" type=\"application/rss+xml\"/>
        <description>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "description", []), "html", null, true);
        echo "</description>
        <language>";
        // line 17
        echo twig_escape_filter($this->env, _twig_default_filter((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", [], "any", false, true), "getLanguage", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", [], "any", false, true), "getLanguage", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "language", []), "default_lang", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "language", []), "default_lang", []))), "en"), "html", null, true);
        echo "</language>
        <lastBuildDate>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["lastBuildDate"] ?? null), "D, d M Y H:i:s O"), "html", null, true);
        echo "</lastBuildDate>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "        ";
            $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", []), "images", []));
            // line 21
            echo "        <item>
            <title>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
            echo "</title>
            <link>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", [0 => true], "method"), "html", null, true);
            echo "</link>
            <guid>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", [0 => true], "method"), "html", null, true);
            echo "</guid>
            <pubDate>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "D, d M Y H:i:s O"), "html", null, true);
            echo "</pubDate>
            <description>
                <![CDATA[
                ";
            // line 28
            if (($context["banner"] ?? null)) {
                // line 29
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->absoluteUrlFilter($this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", [0 => 1200, 1 => 800], "method"), "html", []));
                echo "
                ";
            }
            // line 31
            echo "                ";
            echo Grav\Common\Utils::safeTruncateHTML($this->getAttribute($context["item"], "content", []), $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "length", []));
            echo "
                ]]>
            </description>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 35
                echo "                <category>";
                echo twig_escape_filter($this->env, $context["tag"]);
                echo "</category>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "feed.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  134 => 37,  125 => 35,  121 => 34,  114 => 31,  108 => 29,  106 => 28,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  85 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  49 => 10,  42 => 7,  40 => 6,  38 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Format specification: https://www.rssboard.org/rss-specification #}
{% set collection = collection|default(page.collection) %}
{% set lastBuildDate = 0 %}
{% for page in collection %}
    {%- set lastBuildDate = max(lastBuildDate, page.date) %}
    {%- if collection.params.show_last_modified %}
        {%- set lastBuildDate = max(feed_updated, page.modified) %}
    {%- endif %}
{% endfor %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\">
    <channel>
        <title>{{ collection.params.title }}</title>
        <link>{{ page.url(true) }}</link>
        <atom:link href=\"{{ uri.rootUrl(true)~uri.uri() }}\" rel=\"self\" type=\"application/rss+xml\"/>
        <description>{{ collection.params.description }}</description>
        <language>{{ grav.language.getLanguage|default(config.system.language.default_lang)|default('en') }}</language>
        <lastBuildDate>{{ lastBuildDate|date('D, d M Y H:i:s O') }}</lastBuildDate>
        {% for item in collection %}
        {% set banner = item.media.images|first %}
        <item>
            <title>{{ item.title|e }}</title>
            <link>{{ item.url(true) }}</link>
            <guid>{{ item.url(true) }}</guid>
            <pubDate>{{ item.date|date('D, d M Y H:i:s O') }}</pubDate>
            <description>
                <![CDATA[
                {% if banner %}
                {{ banner.cropZoom(1200,800).html|absolute_url|raw }}
                {% endif %}
                {{ item.content|safe_truncate_html(collection.params.length)|raw }}
                ]]>
            </description>
            {% for tag in item.taxonomy.tag %}
                <category>{{ tag|e }}</category>
            {% endfor %}
        </item>
        {% endfor %}
    </channel>
</rss>
", "feed.rss.twig", "/app/data/public/user/plugins/feed/templates/feed.rss.twig");
    }
}

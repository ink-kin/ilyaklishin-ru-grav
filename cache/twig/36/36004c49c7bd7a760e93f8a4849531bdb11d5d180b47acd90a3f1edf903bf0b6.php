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

/* feed.atom.twig */
class __TwigTemplate_a313218a33d89bd2d62392b07eb9d8ff6948b2397eab5e32cd707bb93fa21fd4 extends \Twig\Template
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
        $context["feed_updated"] = 0;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            $context["feed_updated"] = max(($context["feed_updated"] ?? null), $this->getAttribute($context["page"], "date", []));
            // line 6
            if ($this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "show_last_modified", [])) {
                // line 7
                $context["feed_updated"] = max(($context["feed_updated"] ?? null), $this->getAttribute($context["page"], "modified", []));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "title", []), "html", null, true);
        echo "</title>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["uri"] ?? null), "rootUrl", [0 => true], "method") . $this->getAttribute(($context["uri"] ?? null), "uri", [], "method")), "html", null, true);
        echo "\" rel=\"self\" />
    <subtitle>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "description", []), "html", null, true);
        echo "</subtitle>
    <updated>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["feed_updated"] ?? null), "Y-m-d\\TH:i:sP"), "html", null, true);
        echo "</updated>
    <author>
        <name>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []), "html", null, true);
        echo "</name>
    </author>
    <id>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "</id>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "    ";
            $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", []), "images", []));
            // line 22
            echo "    <entry>
        <title>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
            echo "</title>
        <id>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", [0 => true], "method"), "html", null, true);
            echo "</id>
        ";
            // line 25
            if ($this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "show_last_modified", [])) {
                // line 26
                echo "        <updated>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "modified", []), "Y-m-d\\TH:i:sP"), "html", null, true);
                echo "</updated>
        ";
            } else {
                // line 28
                echo "        <updated>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "Y-m-d\\TH:i:sP"), "html", null, true);
                echo "</updated>
        ";
            }
            // line 30
            echo "        <published>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "Y-m-d\\TH:i:sP"), "html", null, true);
            echo "</published>
        <link href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", [0 => true], "method"), "html", null, true);
            echo "\"/>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 33
                echo "        <category term=\"";
                echo twig_escape_filter($this->env, $context["tag"]);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        <content type=\"html\">
            <![CDATA[
            ";
            // line 37
            if (($context["banner"] ?? null)) {
                // line 38
                echo "            ";
                echo $this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", [0 => 1200, 1 => 800], "method"), "html", []);
                echo "
            ";
            }
            // line 40
            echo "            ";
            echo Grav\Common\Utils::safeTruncateHTML($this->getAttribute($context["item"], "content", []), $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "length", []));
            echo "
            ]]>
        </content>
    </entry>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</feed>
";
    }

    public function getTemplateName()
    {
        return "feed.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  145 => 40,  139 => 38,  137 => 37,  133 => 35,  124 => 33,  120 => 32,  116 => 31,  111 => 30,  105 => 28,  99 => 26,  97 => 25,  93 => 24,  89 => 23,  86 => 22,  83 => 21,  79 => 20,  75 => 19,  70 => 17,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 10,  42 => 7,  40 => 6,  38 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Format specification: https://tools.ietf.org/html/rfc4287 #}
{% set collection = collection|default(page.collection) %}
{% set feed_updated = 0 %}
{% for page in collection %}
    {%- set feed_updated = max(feed_updated, page.date) %}
    {%- if collection.params.show_last_modified %}
        {%- set feed_updated = max(feed_updated, page.modified) %}
    {%- endif %}
{% endfor %}
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>{{ collection.params.title }}</title>
    <link href=\"{{ uri.rootUrl(true)~uri.uri() }}\" rel=\"self\" />
    <subtitle>{{ collection.params.description }}</subtitle>
    <updated>{{ feed_updated|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
    <author>
        <name>{{ site.author.name }}</name>
    </author>
    <id>{{ page.url(true) }}</id>
    {% for item in collection %}
    {% set banner = item.media.images|first %}
    <entry>
        <title>{{ item.title|e }}</title>
        <id>{{ item.url(true) }}</id>
        {% if collection.params.show_last_modified %}
        <updated>{{ item.modified|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
        {% else %}
        <updated>{{ item.date|date(\"Y-m-d\\\\TH:i:sP\") }}</updated>
        {% endif %}
        <published>{{ item.date|date(\"Y-m-d\\\\TH:i:sP\") }}</published>
        <link href=\"{{ item.url(true) }}\"/>
        {% for tag in item.taxonomy.tag %}
        <category term=\"{{ tag|e }}\" />
        {% endfor %}
        <content type=\"html\">
            <![CDATA[
            {% if banner %}
            {{ banner.cropZoom(1200,800).html|raw }}
            {% endif %}
            {{ item.content|safe_truncate_html(collection.params.length)|raw }}
            ]]>
        </content>
    </entry>
    {% endfor %}
</feed>
", "feed.atom.twig", "/home/kincsadv/web/ilyaklishin.ru/public_html/user/plugins/feed/templates/feed.atom.twig");
    }
}

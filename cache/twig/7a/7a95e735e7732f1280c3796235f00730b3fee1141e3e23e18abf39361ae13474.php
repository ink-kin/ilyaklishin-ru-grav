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

/* partials/relatedpages.html.twig */
class __TwigTemplate_ab09ee4083c459e7c73338ff7120543ddd5573343e1c495cfb6c2113c2f2a5b6 extends \Twig\Template
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
        echo "<ul class=\"related-pages\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 4
            echo "        ";
            if (($context["related"] ?? null)) {
                // line 5
                echo "            <li>
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "url", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                echo "</a> ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "show_score", [])) {
                    echo "<span class=\"score\">( ";
                    echo twig_escape_filter($this->env, $context["score"], "html", null, true);
                    echo " )</span>
                ";
                }
                // line 8
                echo "            </li>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  63 => 10,  59 => 8,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"related-pages\">
    {% for related_path, score in related_pages %}
        {% set related = grav['pages'].get(related_path) %}
        {% if related %}
            <li>
                <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">{{ related.title }}</a> {% if config.plugins.relatedpages.show_score %}<span class=\"score\">( {{ score }} )</span>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
</ul>", "partials/relatedpages.html.twig", "/app/data/public/user/themes/striped/templates/partials/relatedpages.html.twig");
    }
}

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

/* partials/pagination.html.twig */
class __TwigTemplate_975d99e1a9217cc42e6e1d92337fa8d4ec271306eecc8f0b5c0391167a949c7a extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            if ((($context["base_url"] ?? null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"pagination\">
    <div class=\"pages\">
      ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 9
                echo "        <a rel=\"prev\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">&laquo;</a>
    ";
            } else {
                // line 11
                echo "        <span>&laquo;</span>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 15
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 16
                    echo "            <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 17
$context["paginate"], "isInDelta", [])) {
                    // line 18
                    echo "        ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 19
                    echo "      <a href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</a>
        ";
                } elseif ($this->getAttribute(                // line 20
$context["paginate"], "isDeltaBorder", [])) {
                    // line 21
                    echo "            <span>&hellip;</span>
        ";
                }
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 25
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 26
                echo "        <a rel=\"next\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">&raquo;</a>
    ";
            } else {
                // line 28
                echo "        <span>&raquo;</span>
    ";
            }
            // line 30
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  108 => 28,  102 => 26,  99 => 25,  96 => 24,  90 => 23,  86 => 21,  84 => 20,  77 => 19,  74 => 18,  72 => 17,  67 => 16,  64 => 15,  60 => 14,  57 => 13,  53 => 11,  47 => 9,  44 => 8,  42 => 7,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"pagination\">
    <div class=\"pages\">
      {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a rel=\"prev\" href=\"{{ url }}\">&laquo;</a>
    {% else %}
        <span>&laquo;</span>
    {% endif %}

    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span>{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
        {% set url =  (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
      <a href=\"{{ url }}\">{{ paginate.number }}</a>
        {% elseif paginate.isDeltaBorder %}
            <span>&hellip;</span>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url =  (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a rel=\"next\" href=\"{{ url }}\">&raquo;</a>
    {% else %}
        <span>&raquo;</span>
    {% endif %}
    </div>
</div>
{% endif %}
", "partials/pagination.html.twig", "/app/data/public/user/themes/striped/templates/partials/pagination.html.twig");
    }
}

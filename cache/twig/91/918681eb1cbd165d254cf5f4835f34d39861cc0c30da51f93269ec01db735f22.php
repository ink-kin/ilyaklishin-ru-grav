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

/* item.html.twig */
class __TwigTemplate_da81abe8a7302dc9474f20b4bdbe3a6460a123b953e14c7f7fd8410d0996b1b2 extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "933747503")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}

    {% if site.calendar %}
        <script type=\"text/javascript\">
         \$(function() {
            \$( \"#datepicker\" ).datepicker( \"setDate\", \"{{ page.date|date(\"m\") }}/{{ page.date|date(\"d\") }}/{{ page.date|date(\"Y\") }}\" );
        });
        </script>
        {% endif %}



      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/app/data/public/user/themes/striped/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_da81abe8a7302dc9474f20b4bdbe3a6460a123b953e14c7f7fd8410d0996b1b2___933747503 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 3
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 16
            echo "        <script type=\"text/javascript\">
         \$(function() {
            \$( \"#datepicker\" ).datepicker( \"setDate\", \"";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "m"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y"), "html", null, true);
            echo "\" );
        });
        </script>
        ";
        }
        // line 22
        echo "


      ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 26
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 26)->display($context);
            // line 27
            echo "        ";
        }
        // line 28
        echo "\t\t
\t\t\t ";
        // line 29
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 29)->display(twig_array_merge($context, ["truncate" => false, "big_header" => true]));
        // line 30
        echo "\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 30,  168 => 29,  165 => 28,  162 => 27,  159 => 26,  157 => 25,  152 => 22,  141 => 18,  137 => 16,  135 => 15,  132 => 14,  129 => 13,  124 => 1,  121 => 10,  119 => 9,  116 => 6,  114 => 5,  112 => 3,  110 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}

    {% if site.calendar %}
        <script type=\"text/javascript\">
         \$(function() {
            \$( \"#datepicker\" ).datepicker( \"setDate\", \"{{ page.date|date(\"m\") }}/{{ page.date|date(\"d\") }}/{{ page.date|date(\"Y\") }}\" );
        });
        </script>
        {% endif %}



      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/app/data/public/user/themes/striped/templates/item.html.twig");
    }
}

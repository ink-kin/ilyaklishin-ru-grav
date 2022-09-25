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

/* blog.html.twig */
class __TwigTemplate_4c0ae6876e1a06d36c25db41e881aa729fed94fafb630908273f690a5cd5187e extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1184304283")->display($context);
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 30,  30 => 1,);
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

  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
      {% include 'partials/breadcrumbs.html.twig' %}
    {% endif %}

    {% for child in collection %}
      {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
    {% endfor %}

    {% if config.plugins.pagination.enabled and collection.params.pagination %}
      {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
    {% endif %}
  {% endblock %}

{% endembed %}


", "blog.html.twig", "/home/kincsadv/web/ilyaklishin.ru/public_html/user/themes/striped/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_4c0ae6876e1a06d36c25db41e881aa729fed94fafb630908273f690a5cd5187e___1184304283 extends \Twig\Template
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
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 17
            echo "      ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 17)->display($context);
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "      ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 21)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => true]));
            // line 22
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 25
            echo "      ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 25)->display(twig_array_merge($context, ["pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 26
            echo "    ";
        }
        // line 27
        echo "  ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 27,  197 => 26,  194 => 25,  192 => 24,  189 => 23,  175 => 22,  172 => 21,  155 => 20,  152 => 19,  149 => 18,  146 => 17,  143 => 16,  140 => 15,  135 => 1,  132 => 12,  130 => 11,  127 => 8,  125 => 7,  123 => 5,  121 => 4,  119 => 3,  113 => 1,  32 => 30,  30 => 1,);
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

  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
      {% include 'partials/breadcrumbs.html.twig' %}
    {% endif %}

    {% for child in collection %}
      {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
    {% endfor %}

    {% if config.plugins.pagination.enabled and collection.params.pagination %}
      {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
    {% endif %}
  {% endblock %}

{% endembed %}


", "blog.html.twig", "/home/kincsadv/web/ilyaklishin.ru/public_html/user/themes/striped/templates/blog.html.twig");
    }
}

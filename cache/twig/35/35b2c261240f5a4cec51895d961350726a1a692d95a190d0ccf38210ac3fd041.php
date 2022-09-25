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

/* formdata.html.twig */
class __TwigTemplate_f976e085e67c73899e612e04b4a97e7d714cb5a764befacfe8a35ff04dc8183c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<article class=\"box post post-excerpt\">
  <header>
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "message", []), "html", null, true);
        echo "</h2>
  </header>
  <p>Here is the summary of what you wrote to us:</p>

  ";
        // line 9
        echo ($context["content"] ?? null);
        echo "

  ";
        // line 11
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 11)->display($context);
        // line 12
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  53 => 9,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<article class=\"box post post-excerpt\">
  <header>
    <h2>{{ form.message }}</h2>
  </header>
  <p>Here is the summary of what you wrote to us:</p>

  {{ content|raw }}

  {% include \"forms/data.html.twig\" %}
</article>
{% endblock %}
", "formdata.html.twig", "/app/data/public/user/themes/striped/templates/formdata.html.twig");
    }
}

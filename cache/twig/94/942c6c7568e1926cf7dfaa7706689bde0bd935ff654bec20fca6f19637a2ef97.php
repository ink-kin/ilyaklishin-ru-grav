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

/* partials/forgot-form.html.twig */
class __TwigTemplate_3e4f1db254d533a7e640ff6ec1b135203d47727e1d3350f615ff14558775f389 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["layout"] = (($context["layout"]) ?? (((($this->getAttribute(($context["form"] ?? null), "layout", [], "any", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "layout", [])))) ? ($this->getAttribute(($context["form"] ?? null), "layout", [])) : ("default"))));
        // line 2
        $context["field_layout"] = ($context["layout"] ?? null);
        // line 3
        echo "
";
        // line 4
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", []), true)) : (true))));
        // line 5
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 6
        echo "
<section id=\"grav-login\">
  ";
        // line 8
        echo ($context["content"] ?? null);
        echo "

  <form method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", [])));
        echo "\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 12
            echo "      ";
            $context["field"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context, $context["field"], ($context["field_name"] ?? null));
            // line 13
            echo "      ";
            if ($context["field"]) {
                // line 14
                echo "        ";
                $context["value"] = ((($this->getAttribute($context["field"], "name", []) == "username")) ? (($context["username"] ?? null)) : (""));
                // line 15
                echo "        ";
                // line 16
                echo "        ";
                $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["field"], "type", []), ($context["field_layout"] ?? null));
                // line 17
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 20
                echo "      ";
            }
            // line 21
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"form-actions secondary-accent\">
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.forgot\"><i class=\"fa fa-paper-plane\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_SEND_INSTRUCTIONS"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("forgot-form", "forgot-form-nonce");
        echo "
  </form>
</section>
";
    }

    // line 17
    public function block_field($context, array $blocks = [])
    {
        // line 18
        echo "          ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate(($context["field_templates"] ?? null), "partials/forgot-form.html.twig", 18);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/forgot-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 19,  127 => 18,  124 => 17,  116 => 27,  110 => 24,  106 => 22,  92 => 21,  89 => 20,  86 => 17,  83 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  55 => 11,  51 => 10,  46 => 8,  42 => 6,  40 => 5,  38 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set layout = layout ?? form.layout ?? 'default' %}
{% set field_layout = layout %}

{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

<section id=\"grav-login\">
  {{ content|raw }}

  <form method=\"post\" action=\"{{ (base_url_relative ~ uri.path)|e }}\">
    {% for field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = field.name == 'username' ? username : '' %}
        {# {% set value = form.value(field.name) %} #}
        {% set field_templates = include_form_field(field.type, field_layout) %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
      {% endif %}
    {% endfor %}

    <div class=\"form-actions secondary-accent\">
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_LOGIN.BTN_SEND_INSTRUCTIONS\"|t }}</button>
    </div>

    {{ nonce_field('forgot-form', 'forgot-form-nonce')|raw }}
  </form>
</section>
", "partials/forgot-form.html.twig", "/app/data/public/user/plugins/login/templates/partials/forgot-form.html.twig");
    }
}

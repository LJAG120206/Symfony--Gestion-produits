<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product/index.html.twig */
class __TwigTemplate_5158b3aca36c3c8e8072b684f75ebc0ee4662774e8fd10b6c06d127bc70f718a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des produits";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Liste des produits</h1>
    ";
        // line 9
        echo "    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
\t\t
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "                ";
            // line 13
            echo "                    <div class=\"col\">
                    <div class=\"card\">
                        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "mainPicture", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 17), "color", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
                            <h5 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 19)), "truncate", [0 => 100, 1 => "...", 2 => false], "method", false, false, false, 19), "html", null, true);
            echo "</p>
                            <a type=\"button\" class=\"btn btn-primary position-relative\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("longDescription", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Plus de détails</a>
                            <p>";
            // line 21
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21) . "€"), "html", null, true);
            echo "</p>
                            <p>";
            // line 22
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22) . " en stock"), "html", null, true);
            echo "</p>
                            <div class=\"card-footer text-muted\">Ajouté le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    </div>
                ";
            // line 28
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        
    </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  128 => 28,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  105 => 19,  101 => 18,  95 => 17,  90 => 15,  86 => 13,  84 => 12,  80 => 11,  76 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des produits{% endblock %}

{% block body %}
    <h1>Liste des produits</h1>
    {# <div class=\"row\">
        <div class=\"col-sm-6\"> #}
    <div class=\"row row-cols-1 row-cols-md-3 g-4\">
\t\t
            {% for product in products %}
                {#{% if product.visible == true %}#}
                    <div class=\"col\">
                    <div class=\"card\">
                        <img src=\"{{ product.mainPicture }}\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-{{product.category.color}}\">{{product.category.name}}</span>
                            <h5 class=\"card-title\">{{product.name}}</h5>
                            <p class=\"card-text\">{{product.shortDescription|u.truncate(100, '...', false)}}</p>
                            <a type=\"button\" class=\"btn btn-primary position-relative\" href=\"{{path('longDescription', {'id': product.id })}}\">Plus de détails</a>
                            <p>{{product.price ~ '€'}}</p>
                            <p>{{product.quantity ~ ' en stock'}}</p>
                            <div class=\"card-footer text-muted\">Ajouté le {{product.createdAt|date(\"d/m/Y\") }}</div>
                        </div>
                    </div>
                    </div>
                {#{% endif %}#}
            {% endfor %}
        
    </div>
        {# </div>
    </div> #}
{% endblock %}
", "product/index.html.twig", "/var/www/product/templates/product/index.html.twig");
    }
}

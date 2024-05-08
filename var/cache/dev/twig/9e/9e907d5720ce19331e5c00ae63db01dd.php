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

/* unite/index.html.twig */
class __TwigTemplate_1ded07880a7096a9c2804cc357160f15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "unite/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Unite index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    <style>
        /* Ajoutez votre CSS pour le champ botResponse ici */
        #botResponse {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-sizing: border-box;
            resize: none;
            overflow: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "<div class=\"container\">
    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_index");
        echo "\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par titre\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_index");
        echo "\">
                <div class=\"input-group\">
                    <select name=\"sort\" class=\"form-control\">
                        <option value=\"\">Trier par...</option>
                        <option value=\"num_unite_asc\" ";
        // line 41
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 41, $this->source); })()) == "num_unite_asc")) {
            echo "selected";
        }
        echo ">Numéro d'unité croissant</option>
                        <option value=\"num_unite_desc\" ";
        // line 42
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 42, $this->source); })()) == "num_unite_desc")) {
            echo "selected";
        }
        echo ">Numéro d'unité décroissant</option>
                    </select>
                    <button type=\"submit\" class=\"btn btn-primary\">Trier</button>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row flex-nowrap overflow-auto\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unites"]) || array_key_exists("unites", $context) ? $context["unites"] : (function () { throw new RuntimeError('Variable "unites" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
            // line 52
            echo "        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "Titre", [], "any", false, false, false, 55), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\"><strong>Unit Number:</strong> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "NumUnite", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                    <p class=\"card-text\"><strong>Statut:</strong> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "Statut", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                    <p class=\"card-text\"><strong>Content:</strong> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "Contenu", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                </div>
                <div class=\"card-footer d-flex justify-content-between\">
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["unite"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"add-course-btn\">Show</a>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["unite"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"add-course-btn\">Edit</a>
                    ";
            // line 63
            echo twig_include($this->env, $context, "unite/_delete_form.html.twig");
            echo "
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 68
            echo "        <div class=\"col\">
            <p class=\"text-center\">Aucun enregistrement trouvé.</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>

    <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_new");
        echo "\" class=\"add-course-btn\">Create New</a>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chatbot.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "unite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 82,  280 => 81,  270 => 80,  255 => 74,  251 => 72,  242 => 68,  224 => 63,  220 => 62,  216 => 61,  210 => 58,  206 => 57,  202 => 56,  198 => 55,  193 => 52,  175 => 51,  161 => 42,  155 => 41,  148 => 37,  137 => 29,  132 => 26,  122 => 25,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Unite index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    <style>
        /* Ajoutez votre CSS pour le champ botResponse ici */
        #botResponse {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-sizing: border-box;
            resize: none;
            overflow: auto;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"{{ path('app_unite_index') }}\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par titre\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"{{ path('app_unite_index') }}\">
                <div class=\"input-group\">
                    <select name=\"sort\" class=\"form-control\">
                        <option value=\"\">Trier par...</option>
                        <option value=\"num_unite_asc\" {% if currentSort == 'num_unite_asc' %}selected{% endif %}>Numéro d'unité croissant</option>
                        <option value=\"num_unite_desc\" {% if currentSort == 'num_unite_desc' %}selected{% endif %}>Numéro d'unité décroissant</option>
                    </select>
                    <button type=\"submit\" class=\"btn btn-primary\">Trier</button>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row flex-nowrap overflow-auto\">
        {% for unite in unites %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ unite.Titre }}</h5>
                    <p class=\"card-text\"><strong>Unit Number:</strong> {{ unite.NumUnite }}</p>
                    <p class=\"card-text\"><strong>Statut:</strong> {{ unite.Statut }}</p>
                    <p class=\"card-text\"><strong>Content:</strong> {{ unite.Contenu }}</p>
                </div>
                <div class=\"card-footer d-flex justify-content-between\">
                    <a href=\"{{ path('app_unite_show', {'id': unite.id}) }}\" class=\"add-course-btn\">Show</a>
                    <a href=\"{{ path('app_unite_edit', {'id': unite.id}) }}\" class=\"add-course-btn\">Edit</a>
                    {{ include('unite/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col\">
            <p class=\"text-center\">Aucun enregistrement trouvé.</p>
        </div>
        {% endfor %}
    </div>

    <a href=\"{{ path('app_unite_new') }}\" class=\"add-course-btn\">Create New</a>
</div>


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset(\"assets/js/chatbot.js\") }}\"></script>
{% endblock %}
", "unite/index.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\unite\\index.html.twig");
    }
}

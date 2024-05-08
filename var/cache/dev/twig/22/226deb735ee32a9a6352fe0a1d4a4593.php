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

/* cour/index.html.twig */
class __TwigTemplate_227a2c103f1904cdea9cc4fd3c92ff4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cour/index.html.twig", 1);
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

        echo "Cour index";
        
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
        /* Ajoutez vos styles personnalisés ici */
        .add-course-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            width: 100px;
            height: 100px;
            font-size: 24px;
            line-height: 100px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            text-decoration: none;
        }

        .add-course-btn:hover {
            transform: scale(5.5);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "<div class=\"container\">
    <h1 class=\"text-center mt-4 mb-4\">Liste des Cours</h1>

    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_index");
        echo "\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Matiere\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_index");
        echo "\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <select name=\"sort\" class=\"form-control\">
                            <option value=\"date_fin_asc\">Trier par date de fin (croissant)</option>
                            <option value=\"date_fin_desc\">Trier par date de fin (décroissant)</option>
                            <option value=\"nom_asc\">Trier par Nom (A-Z)</option>
                            <option value=\"nom_desc\">Trier par Nom (Z-A)</option>
                        </select>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"submit\" class=\"btn btn-primary\">Sort</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row flex-row flex-nowrap overflow-auto\">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 69, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 70
            echo "        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "Matiere", [], "any", false, false, false, 73), "html", null, true);
            echo "</h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">Date de Début: ";
            // line 76
            ((twig_get_attribute($this->env, $this->source, $context["cour"], "DateDebut", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "DateDebut", [], "any", false, false, false, 76), "d/m/Y H:i"), "html", null, true))) : (print ("")));
            echo "</p>
                    <p class=\"card-text\">Date de Fin: ";
            // line 77
            ((twig_get_attribute($this->env, $this->source, $context["cour"], "DateFin", [], "any", false, false, false, 77)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "DateFin", [], "any", false, false, false, 77), "d/m/Y H:i"), "html", null, true))) : (print ("")));
            echo "</p>
                </div>
                <div class=\"card-footer d-flex justify-content-between\">
                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"custom-btn custom-btn-info btn-sm\">Voir</a>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" class=\"custom-btn btn-sm\">Modifier</a>
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_units", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"custom-btn custom-btn-warning btn-sm\">Unité</a>
                    ";
            // line 83
            echo twig_include($this->env, $context, "cour/_delete_form.html.twig");
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
            // line 88
            echo "        <div class=\"col\">
            <p class=\"text-center\">Aucun cours trouvé.</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </div>

    <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_new");
        echo "\" class=\"add-course-btn\">Ajouter un cours</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cour/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 94,  260 => 92,  251 => 88,  233 => 83,  229 => 82,  225 => 81,  221 => 80,  215 => 77,  211 => 76,  205 => 73,  200 => 70,  182 => 69,  160 => 50,  149 => 42,  142 => 37,  132 => 36,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cour index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    <style>
        /* Ajoutez vos styles personnalisés ici */
        .add-course-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            width: 100px;
            height: 100px;
            font-size: 24px;
            line-height: 100px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            text-decoration: none;
        }

        .add-course-btn:hover {
            transform: scale(5.5);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"text-center mt-4 mb-4\">Liste des Cours</h1>

    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"{{ path('app_cour_index') }}\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Matiere\">
                    <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-6\">
            <form method=\"GET\" action=\"{{ path('app_cour_index') }}\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <select name=\"sort\" class=\"form-control\">
                            <option value=\"date_fin_asc\">Trier par date de fin (croissant)</option>
                            <option value=\"date_fin_desc\">Trier par date de fin (décroissant)</option>
                            <option value=\"nom_asc\">Trier par Nom (A-Z)</option>
                            <option value=\"nom_desc\">Trier par Nom (Z-A)</option>
                        </select>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"submit\" class=\"btn btn-primary\">Sort</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row flex-row flex-nowrap overflow-auto\">
        {% for cour in cours %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">{{ cour.Matiere }}</h5>
                </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">Date de Début: {{ cour.DateDebut ? cour.DateDebut|date('d/m/Y H:i') : '' }}</p>
                    <p class=\"card-text\">Date de Fin: {{ cour.DateFin ? cour.DateFin|date('d/m/Y H:i') : '' }}</p>
                </div>
                <div class=\"card-footer d-flex justify-content-between\">
                    <a href=\"{{ path('app_cour_show', {'id': cour.id}) }}\" class=\"custom-btn custom-btn-info btn-sm\">Voir</a>
                    <a href=\"{{ path('app_cour_edit', {'id': cour.id}) }}\" class=\"custom-btn btn-sm\">Modifier</a>
                    <a href=\"{{ path('app_cour_units', {'id': cour.id}) }}\" class=\"custom-btn custom-btn-warning btn-sm\">Unité</a>
                    {{ include('cour/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col\">
            <p class=\"text-center\">Aucun cours trouvé.</p>
        </div>
        {% endfor %}
    </div>

    <a href=\"{{ path('app_cour_new') }}\" class=\"add-course-btn\">Ajouter un cours</a>
</div>
{% endblock %}
", "cour/index.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\cour\\index.html.twig");
    }
}

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

/* unite/show.html.twig */
class __TwigTemplate_8032674463b55956380b731f01f4072c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "unite/show.html.twig", 1);
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

        echo "Détails de l'unité";
        
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
    <style>
        /* Utilisation des mêmes styles que pour le détail du cours */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f0f0f0;
            padding: 5px;
            border-bottom: 1px solid #ccc;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .card-body {
            padding: 10px;
        }
        /* Utilisation des mêmes styles pour les boutons */
        .btn-container {
            margin-top: 30px;
        }
        .btn-container .btn {
            margin-right: 10px; /* Ajoute une marge à droite pour espacer les boutons */
            margin-bottom: 10px; /* Ajoute une marge en bas pour espacer les boutons */
        }
        .btn-container .btn-group {
            margin-top: 10px; /* Ajoute une marge en haut pour espacer le groupe de boutons */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "<div class=\"container\">
    <h1 class=\"text-center\">Détails de l'unité</h1>

    <div class=\"card\">
        <div class=\"card-header\">
            <!-- Utilisation du même format de tableau que le détail du cours -->
            <strong>ID:</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "
        </div>
        <div class=\"card-body\">
            <dl class=\"row\">
                <dt class=\"col-sm-3\">Numéro d'unité</dt>
                <dd class=\"col-sm-9\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 52, $this->source); })()), "NumUnite", [], "any", false, false, false, 52), "html", null, true);
        echo "</dd>

                <dt class=\"col-sm-3\">Titre</dt>
                <dd class=\"col-sm-9\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 55, $this->source); })()), "Titre", [], "any", false, false, false, 55), "html", null, true);
        echo "</dd>

                <dt class=\"col-sm-3\">Statut</dt>
                <dd class=\"col-sm-9\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 58, $this->source); })()), "Statut", [], "any", false, false, false, 58), "html", null, true);
        echo "</dd>

                <dt class=\"col-sm-3\">Contenu</dt>
                <dd class=\"col-sm-9\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 61, $this->source); })()), "Contenu", [], "any", false, false, false, 61), "html", null, true);
        echo "</dd>

                <dt class=\"col-sm-3\">Cours</dt>
                <dd class=\"col-sm-9\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 64, $this->source); })()), "idCour", [], "any", false, false, false, 64), "html", null, true);
        echo "</dd>
            </dl>
        </div>
    </div>

    <div class=\"text-center mt-3\">
        <div class=\"btn-container d-flex justify-content-between\">
            <!-- Utilisation des mêmes boutons que pour le détail du cours -->
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_index");
        echo "\" class=\"add-course-btn\">Retour à la liste</a>
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\" class=\"add-course-btn\">Modifier</a>
            ";
        // line 74
        echo twig_include($this->env, $context, "unite/_delete_form.html.twig");
        echo "
        </div>
        ";
        // line 77
        echo "<div style=\"border: 1px solid black; padding: 5px; margin-bottom: 10px; background-color: bold; display: inline-block;\">
    <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\" style=\"color: white; text-decoration: none; display: inline;\">Télécharger PDF</a>
</div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "unite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 78,  207 => 77,  202 => 74,  198 => 73,  194 => 72,  183 => 64,  177 => 61,  171 => 58,  165 => 55,  159 => 52,  151 => 47,  143 => 41,  133 => 40,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'unité{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Utilisation des mêmes styles que pour le détail du cours */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f0f0f0;
            padding: 5px;
            border-bottom: 1px solid #ccc;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .card-body {
            padding: 10px;
        }
        /* Utilisation des mêmes styles pour les boutons */
        .btn-container {
            margin-top: 30px;
        }
        .btn-container .btn {
            margin-right: 10px; /* Ajoute une marge à droite pour espacer les boutons */
            margin-bottom: 10px; /* Ajoute une marge en bas pour espacer les boutons */
        }
        .btn-container .btn-group {
            margin-top: 10px; /* Ajoute une marge en haut pour espacer le groupe de boutons */
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"text-center\">Détails de l'unité</h1>

    <div class=\"card\">
        <div class=\"card-header\">
            <!-- Utilisation du même format de tableau que le détail du cours -->
            <strong>ID:</strong> {{ unite.id }}
        </div>
        <div class=\"card-body\">
            <dl class=\"row\">
                <dt class=\"col-sm-3\">Numéro d'unité</dt>
                <dd class=\"col-sm-9\">{{ unite.NumUnite }}</dd>

                <dt class=\"col-sm-3\">Titre</dt>
                <dd class=\"col-sm-9\">{{ unite.Titre }}</dd>

                <dt class=\"col-sm-3\">Statut</dt>
                <dd class=\"col-sm-9\">{{ unite.Statut }}</dd>

                <dt class=\"col-sm-3\">Contenu</dt>
                <dd class=\"col-sm-9\">{{ unite.Contenu }}</dd>

                <dt class=\"col-sm-3\">Cours</dt>
                <dd class=\"col-sm-9\">{{ unite.idCour }}</dd>
            </dl>
        </div>
    </div>

    <div class=\"text-center mt-3\">
        <div class=\"btn-container d-flex justify-content-between\">
            <!-- Utilisation des mêmes boutons que pour le détail du cours -->
            <a href=\"{{ path('app_unite_index') }}\" class=\"add-course-btn\">Retour à la liste</a>
            <a href=\"{{ path('app_unite_edit', {'id': unite.id}) }}\" class=\"add-course-btn\">Modifier</a>
            {{ include('unite/_delete_form.html.twig') }}
        </div>
        {# Ajouter le lien de téléchargement PDF #}
<div style=\"border: 1px solid black; padding: 5px; margin-bottom: 10px; background-color: bold; display: inline-block;\">
    <a href=\"{{ path('app_unite_pdf', {'id': unite.id}) }}\" style=\"color: white; text-decoration: none; display: inline;\">Télécharger PDF</a>
</div>
    </div>
</div>
{% endblock %}
", "unite/show.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\unite\\show.html.twig");
    }
}

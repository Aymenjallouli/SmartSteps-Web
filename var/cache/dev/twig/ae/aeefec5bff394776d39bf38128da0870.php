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

/* cour_admin/show.html.twig */
class __TwigTemplate_1b480cf2bd18c3b4be35b752461e542f extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "cour_admin/show.html.twig", 1);
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

        echo "Cour";
        
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
        /* Définir la couleur bleue pour le texte */
        .text-blue {
            color: blue;
        }
        /* Personnaliser le style du bouton de suppression */
        .btn-delete {
            background-color: red;
            color: white;
            border-color: red;
        }
        /* Pour ajouter une marge entre les boutons */
        .btn-margin {
            margin-right: 10px;
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
        echo "    <div class=\"container\">
     
                <h1 class=\"text-center text-blue\">Détails du Cour</h1> ";
        // line 29
        echo "        
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th style=\"width: 30%;\">Id</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Matière</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 38, $this->source); })()), "Matiere", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Date de début</th>
                            <td>";
        // line 42
        ((twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 42, $this->source); })()), "DateDebut", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 42, $this->source); })()), "DateDebut", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true))) : (print ("Non définie")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>Date de fin</th>
                            <td>";
        // line 46
        ((twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 46, $this->source); })()), "DateFin", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 46, $this->source); })()), "DateFin", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true))) : (print ("Non définie")));
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
<div class=\"card-footer text-center\">
    <div class=\"d-flex justify-content-between\">
        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cour_index");
        echo "\" class=\"btn btn-info btn-sm\">Retour à la liste</a>
        ";
        // line 54
        echo twig_include($this->env, $context, "cour/_delete_form.html.twig");
        echo "
    </div>
</div>



     
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cour_admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 54,  170 => 53,  160 => 46,  153 => 42,  146 => 38,  139 => 34,  132 => 29,  128 => 26,  118 => 25,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Cour{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Définir la couleur bleue pour le texte */
        .text-blue {
            color: blue;
        }
        /* Personnaliser le style du bouton de suppression */
        .btn-delete {
            background-color: red;
            color: white;
            border-color: red;
        }
        /* Pour ajouter une marge entre les boutons */
        .btn-margin {
            margin-right: 10px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
     
                <h1 class=\"text-center text-blue\">Détails du Cour</h1> {# Ajout de la classe pour changer la couleur en bleu #}
        
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th style=\"width: 30%;\">Id</th>
                            <td>{{ cour.id }}</td>
                        </tr>
                        <tr>
                            <th>Matière</th>
                            <td>{{ cour.Matiere }}</td>
                        </tr>
                        <tr>
                            <th>Date de début</th>
                            <td>{{ cour.DateDebut ? cour.DateDebut|date('Y-m-d H:i:s') : 'Non définie' }}</td>
                        </tr>
                        <tr>
                            <th>Date de fin</th>
                            <td>{{ cour.DateFin ? cour.DateFin|date('Y-m-d H:i:s') : 'Non définie' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
<div class=\"card-footer text-center\">
    <div class=\"d-flex justify-content-between\">
        <a href=\"{{ path('admin_cour_index') }}\" class=\"btn btn-info btn-sm\">Retour à la liste</a>
        {{ include('cour/_delete_form.html.twig') }}
    </div>
</div>



     
    
{% endblock %}
", "cour_admin/show.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\cour_admin\\show.html.twig");
    }
}

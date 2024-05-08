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

/* cour/units.html.twig */
class __TwigTemplate_69fa3c23bdbe7b1c799cb2066b27d216 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour/units.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour/units.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cour/units.html.twig", 1);
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

        echo "Unités du Cours ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 3, $this->source); })()), "Matiere", [], "any", false, false, false, 3), "html", null, true);
        
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
        body {
            background-color: #f8f9fa;
            font-family: 'Open Sans', sans-serif;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
        }

        .card {
            border: none;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Ajout d'une marge en bas pour séparer les cartes */
            flex: 0 0 auto; /* Empêcher les cartes de s'étirer pour remplir l'espace */
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .card-body {
            padding: 20px; /* Ajout de remplissage pour le corps de la carte */
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .card-container {
            display: flex; /* Utiliser flexbox pour afficher les cartes horizontalement */
            flex-wrap: nowrap; /* Empêcher le retour à la ligne des cartes */
            overflow-x: auto; /* Défilement horizontal */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "   <div class=\"container\">
    <h1 class=\"text-center text-blue\">Unités du Cours ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cour"]) || array_key_exists("cour", $context) ? $context["cour"] : (function () { throw new RuntimeError('Variable "cour" does not exist.', 57, $this->source); })()), "Matiere", [], "any", false, false, false, 57), "html", null, true);
        echo "</h1>

    <div class=\"row flex-row flex-nowrap overflow-auto card-container\"> <!-- Ajout de la classe card-container pour le défilement horizontal -->
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unites"]) || array_key_exists("unites", $context) ? $context["unites"] : (function () { throw new RuntimeError('Variable "unites" does not exist.', 60, $this->source); })()));
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
            // line 61
            echo "            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Unité ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "NumUnite", [], "any", false, false, false, 64), "html", null, true);
            echo "
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "Titre", [], "any", false, false, false, 67), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\"><strong>Statut:</strong> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "Statut", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                        <p class=\"card-text\"><strong>Contenu:</strong> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unite"], "Contenu", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-between\"> <!-- Utilisation de flexbox pour aligner les boutons -->
                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["unite"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"add-course-btn\">Edit</a>
                            ";
            // line 74
            echo twig_include($this->env, $context, "unite/_delete_form.html.twig");
            echo "
                        </div>
                    </div>
                </div>
            </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </div>

    <div class=\"text-center mt-3\">
        <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_index");
        echo "\" class=\"add-course-btn\">Retour à la liste des cours</a>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cour/units.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 83,  235 => 80,  215 => 74,  211 => 73,  204 => 69,  200 => 68,  196 => 67,  190 => 64,  185 => 61,  168 => 60,  162 => 57,  159 => 56,  149 => 55,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Unités du Cours {{ cour.Matiere }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Open Sans', sans-serif;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
        }

        .card {
            border: none;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Ajout d'une marge en bas pour séparer les cartes */
            flex: 0 0 auto; /* Empêcher les cartes de s'étirer pour remplir l'espace */
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .card-body {
            padding: 20px; /* Ajout de remplissage pour le corps de la carte */
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .card-container {
            display: flex; /* Utiliser flexbox pour afficher les cartes horizontalement */
            flex-wrap: nowrap; /* Empêcher le retour à la ligne des cartes */
            overflow-x: auto; /* Défilement horizontal */
        }
    </style>
{% endblock %}

{% block body %}
   <div class=\"container\">
    <h1 class=\"text-center text-blue\">Unités du Cours {{ cour.Matiere }}</h1>

    <div class=\"row flex-row flex-nowrap overflow-auto card-container\"> <!-- Ajout de la classe card-container pour le défilement horizontal -->
        {% for unite in unites %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Unité {{ unite.NumUnite }}
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ unite.Titre }}</h5>
                        <p class=\"card-text\"><strong>Statut:</strong> {{ unite.Statut }}</p>
                        <p class=\"card-text\"><strong>Contenu:</strong> {{ unite.Contenu }}</p>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-between\"> <!-- Utilisation de flexbox pour aligner les boutons -->
                            <a href=\"{{ path('app_unite_edit', {'id': unite.id}) }}\" class=\"add-course-btn\">Edit</a>
                            {{ include('unite/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-3\">
        <a href=\"{{ path('app_cour_index') }}\" class=\"add-course-btn\">Retour à la liste des cours</a>
    </div>
</div>

{% endblock %}
", "cour/units.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\cour\\units.html.twig");
    }
}

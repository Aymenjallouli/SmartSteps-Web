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

/* unite_admin/show.html.twig */
class __TwigTemplate_ce0b437c607b418da12f577caaa5cd3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "unite_admin/show.html.twig", 1);
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

        echo "Unite";
        
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
        <h1 class=\"text-center mt-4 mb-4\">Unite Details</h1>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Num_unite</th>
                            <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 39, $this->source); })()), "NumUnite", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Titre</th>
                            <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 43, $this->source); })()), "Titre", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Statut</th>
                            <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 47, $this->source); })()), "Statut", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Contenu</th>
                            <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 51, $this->source); })()), "Contenu", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Cour</th>
                            <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 55, $this->source); })()), "idCour", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 text-center\">
                <div class=\"d-flex justify-content-between\">
                    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unite_index");
        echo "\" class=\"btn btn-info btn-sm\">Back to List</a>
                    ";
        // line 65
        echo twig_include($this->env, $context, "unite/_delete_form.html.twig");
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "unite_admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 65,  186 => 64,  174 => 55,  167 => 51,  160 => 47,  153 => 43,  146 => 39,  139 => 35,  128 => 26,  118 => 25,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Unite{% endblock %}

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
        <h1 class=\"text-center mt-4 mb-4\">Unite Details</h1>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ unite.id }}</td>
                        </tr>
                        <tr>
                            <th>Num_unite</th>
                            <td>{{ unite.NumUnite }}</td>
                        </tr>
                        <tr>
                            <th>Titre</th>
                            <td>{{ unite.Titre }}</td>
                        </tr>
                        <tr>
                            <th>Statut</th>
                            <td>{{ unite.Statut }}</td>
                        </tr>
                        <tr>
                            <th>Contenu</th>
                            <td>{{ unite.Contenu }}</td>
                        </tr>
                        <tr>
                            <th>Cour</th>
                            <td>{{ unite.idCour }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 text-center\">
                <div class=\"d-flex justify-content-between\">
                    <a href=\"{{ path('admin_unite_index') }}\" class=\"btn btn-info btn-sm\">Back to List</a>
                    {{ include('unite/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "unite_admin/show.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\unite_admin\\show.html.twig");
    }
}

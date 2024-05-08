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

/* cour_admin/index.html.twig */
class __TwigTemplate_5bf3e1905a2556d51526f7cf919aade9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour_admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "cour_admin/index.html.twig", 1);
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"container\">
        <h1 class=\"text-center mt-4 mb-4\">Liste des Cours</h1>
 <!-- Ajouter le champ de recherche avec design Bootstrap -->
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Recherche...\" aria-label=\"Recherche\" aria-describedby=\"searchButton\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\" id=\"searchButton\">
                    <i class=\"fas fa-search\"></i> Rechercher
                </button>
            </div>
        </div>
        <br>
        <br>

        <table class=\"table table-bordered table-hover\">
            <thead class=\"bg-primary text-white\">
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Matière</th>
                    <th scope=\"col\">Date de Début</th>
                    <th scope=\"col\">Date de Fin</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "Matiere", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["cour"], "DateDebut", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "DateDebut", [], "any", false, false, false, 40), "d/m/Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["cour"], "DateFin", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cour"], "DateFin", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cour_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Voir</a>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cour_units", ["id" => twig_get_attribute($this->env, $this->source, $context["cour"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Unite</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Aucun cours trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>

    </div>


      <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#searchInput').on('input', function () {
                performSearch();
            });

            function performSearch() {
                var searchTerm = \$('#searchInput').val().toLowerCase();

                \$('.reservation-row').each(function () {
                    var rowData = \$(this).text().toLowerCase();
                    \$(this).toggle(rowData.includes(searchTerm));
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cour_admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 52,  181 => 48,  172 => 44,  168 => 43,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  148 => 37,  143 => 36,  116 => 11,  106 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Cour index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center mt-4 mb-4\">Liste des Cours</h1>
 <!-- Ajouter le champ de recherche avec design Bootstrap -->
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Recherche...\" aria-label=\"Recherche\" aria-describedby=\"searchButton\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\" id=\"searchButton\">
                    <i class=\"fas fa-search\"></i> Rechercher
                </button>
            </div>
        </div>
        <br>
        <br>

        <table class=\"table table-bordered table-hover\">
            <thead class=\"bg-primary text-white\">
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Matière</th>
                    <th scope=\"col\">Date de Début</th>
                    <th scope=\"col\">Date de Fin</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for cour in cours %}
                    <tr>
                        <td>{{ cour.id }}</td>
                        <td>{{ cour.Matiere }}</td>
                        <td>{{ cour.DateDebut ? cour.DateDebut|date('d/m/Y H:i') : '' }}</td>
                        <td>{{ cour.DateFin ? cour.DateFin|date('d/m/Y H:i') : '' }}</td>
                        <td class=\"actions\">
                            <a href=\"{{ path('admin_cour_show', {'id': cour.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                            <a href=\"{{ path('admin_cour_units', {'id': cour.id}) }}\" class=\"btn btn-warning btn-sm\">Unite</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Aucun cours trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

    </div>


      <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#searchInput').on('input', function () {
                performSearch();
            });

            function performSearch() {
                var searchTerm = \$('#searchInput').val().toLowerCase();

                \$('.reservation-row').each(function () {
                    var rowData = \$(this).text().toLowerCase();
                    \$(this).toggle(rowData.includes(searchTerm));
                });
            }
        });
    </script>
{% endblock %}
", "cour_admin/index.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\cour_admin\\index.html.twig");
    }
}

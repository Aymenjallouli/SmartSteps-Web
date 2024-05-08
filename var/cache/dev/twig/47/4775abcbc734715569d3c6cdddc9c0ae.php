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

/* unite/pdf.html.twig */
class __TwigTemplate_39c3e3dd7011234a6790d14349758ba2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Réservation</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            color: #ff69b4; /* Rose */
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin: 0 auto; /* Centre le tableau horizontalement */
            margin-bottom: 20px;
            background-color: #fff;
            border: 3px solid #000; /* Bordure large noire */
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .green-text {
            color: #98fb98; /* Vert pistache */
        }

        /* Style pour le logo */
        .logo {
            text-align: center;
            margin-top: 50px;
        }

        /* Style pour le nom ImpactfulJournyes */
        .company-name {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Unite Details</h1>
        <table class=\"table\">
            <tr>
                <td class=\"green-text\"><strong>Numéro d'unité:</strong></td>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 64, $this->source); })()), "NumUnite", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Titre:</strong></td>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 68, $this->source); })()), "Titre", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Statut:</strong></td>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 72, $this->source); })()), "Statut", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Contenu:</strong></td>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 76, $this->source); })()), "Contenu", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Course ID:</strong></td>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 80, $this->source); })()), "idCour", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <!-- Logo et nom de l'entreprise -->
        <div class=\"logo\">
            <div id=\"gtco-logo\">
                            
                            <a href=\"index.html\">Smart steps <em>.</em></a>
                        </div>
        </div>
        
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "unite/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 80,  129 => 76,  122 => 72,  115 => 68,  108 => 64,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Réservation</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            color: #ff69b4; /* Rose */
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin: 0 auto; /* Centre le tableau horizontalement */
            margin-bottom: 20px;
            background-color: #fff;
            border: 3px solid #000; /* Bordure large noire */
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .green-text {
            color: #98fb98; /* Vert pistache */
        }

        /* Style pour le logo */
        .logo {
            text-align: center;
            margin-top: 50px;
        }

        /* Style pour le nom ImpactfulJournyes */
        .company-name {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Unite Details</h1>
        <table class=\"table\">
            <tr>
                <td class=\"green-text\"><strong>Numéro d'unité:</strong></td>
                <td>{{ unite.NumUnite }}</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Titre:</strong></td>
                <td>{{ unite.Titre }}</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Statut:</strong></td>
                <td>{{ unite.Statut }}</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Contenu:</strong></td>
                <td>{{ unite.Contenu }}</td>
            </tr>
            <tr>
                <td class=\"green-text\"><strong>Course ID:</strong></td>
                <td>{{ unite.idCour }}</td>
            </tr>
        </table>
        <!-- Logo et nom de l'entreprise -->
        <div class=\"logo\">
            <div id=\"gtco-logo\">
                            
                            <a href=\"index.html\">Smart steps <em>.</em></a>
                        </div>
        </div>
        
    </div>
</body>
</html>
", "unite/pdf.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\unite\\pdf.html.twig");
    }
}

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

/* unite/_delete_form.html.twig */
class __TwigTemplate_5bb7d59e7bc658f384aa4030880720ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "unite/_delete_form.html.twig"));

        // line 1
        echo "<style>
    /* Styles pour le bouton de suppression */
    .delete-course-btn {
        background-color: #dc3545; /* Rouge */
        color: #fff; /* Texte blanc */
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 10px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s; /* Ajout de transition pour le changement de couleur et l'effet de survol */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ajout d'une ombre pour un effet de profondeur */
    }

    .delete-course-btn:hover {
        background-color: #c82333; /* Rouge foncé au survol */
        transform: translateY(-5px); /* Légère translation vers le haut au survol */
    }

    .delete-course-btn:active {
        transform: translateY(3px); /* Légère translation vers le bas lorsqu'il est cliqué */
        box-shadow: none; /* Suppression de l'ombre lorsqu'il est cliqué */
    }
</style>
<form method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_unite_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["unite"]) || array_key_exists("unite", $context) ? $context["unite"] : (function () { throw new RuntimeError('Variable "unite" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))), "html", null, true);
        echo "\">
        <button class=\"delete-course-btn\">Delete</button>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "unite/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    /* Styles pour le bouton de suppression */
    .delete-course-btn {
        background-color: #dc3545; /* Rouge */
        color: #fff; /* Texte blanc */
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 10px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s; /* Ajout de transition pour le changement de couleur et l'effet de survol */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ajout d'une ombre pour un effet de profondeur */
    }

    .delete-course-btn:hover {
        background-color: #c82333; /* Rouge foncé au survol */
        transform: translateY(-5px); /* Légère translation vers le haut au survol */
    }

    .delete-course-btn:active {
        transform: translateY(3px); /* Légère translation vers le bas lorsqu'il est cliqué */
        box-shadow: none; /* Suppression de l'ombre lorsqu'il est cliqué */
    }
</style>
<form method=\"post\" action=\"{{ path('app_unite_delete', {'id': unite.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ unite.id) }}\">
        <button class=\"delete-course-btn\">Delete</button>
</form>
", "unite/_delete_form.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\unite\\_delete_form.html.twig");
    }
}

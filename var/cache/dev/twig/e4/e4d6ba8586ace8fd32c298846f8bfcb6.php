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

/* cour/edit.html.twig */
class __TwigTemplate_6cbe19fc9c47eb27ae5c09aadc60eb72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cour/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cour/edit.html.twig", 1);
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

        echo "Edit Cour";
        
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
    /* Styles pour le bouton de suppression */
    .button-course-btn {
        background-color: #003399; /* Rouge */
        color: #fff; /* Texte blanc */
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 10px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s; /* Ajout de transition pour le changement de couleur et l'effet de survol */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ajout d'une ombre pour un effet de profondeur */
    }

    .button-course-btn:hover {
        background-color: #000099; /* Rouge foncé au survol */
        transform: translateY(-5px); /* Légère translation vers le haut au survol */
    }

    .button-course-btn:active {
        transform: translateY(3px); /* Légère translation vers le bas lorsqu'il est cliqué */
        box-shadow: none; /* Suppression de l'ombre lorsqu'il est cliqué */
    }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">";
        // line 40
        $this->displayBlock("title", $context, $blocks);
        echo "</div>
                    <div class=\"card-body\">
                        <h2 class=\"text-center mb-4\">Edit Cour</h2>
                        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
                        <div class=\"form-group\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Matiere", [], "any", false, false, false, 45), 'label');
        echo "
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Matiere", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter Subject Name"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Date_Debut", [], "any", false, false, false, 49), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Date_Debut", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Date_Fin", [], "any", false, false, false, 53), 'label');
        echo "
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Date_Fin", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                           
                   
                        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
                          
                     <div class=\"d-flex justify-content-between\">
                     <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cour_index");
        echo "\" class=\"btn btn-info btn-sm\">Back to List</a>
                
                     <button type=\"submit\" class=\"btn btn-info btn-sm\">Update</button>
                    
    ";
        // line 65
        echo twig_include($this->env, $context, "cour/_delete_form.html.twig");
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
        return "cour/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 65,  195 => 61,  189 => 58,  182 => 54,  178 => 53,  172 => 50,  168 => 49,  162 => 46,  158 => 45,  153 => 43,  147 => 40,  141 => 36,  131 => 35,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Cour{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    <style>
    /* Styles pour le bouton de suppression */
    .button-course-btn {
        background-color: #003399; /* Rouge */
        color: #fff; /* Texte blanc */
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 10px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s; /* Ajout de transition pour le changement de couleur et l'effet de survol */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ajout d'une ombre pour un effet de profondeur */
    }

    .button-course-btn:hover {
        background-color: #000099; /* Rouge foncé au survol */
        transform: translateY(-5px); /* Légère translation vers le haut au survol */
    }

    .button-course-btn:active {
        transform: translateY(3px); /* Légère translation vers le bas lorsqu'il est cliqué */
        box-shadow: none; /* Suppression de l'ombre lorsqu'il est cliqué */
    }
</style>

{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header\">{{ block('title') }}</div>
                    <div class=\"card-body\">
                        <h2 class=\"text-center mb-4\">Edit Cour</h2>
                        {{ form_start(form) }}
                        <div class=\"form-group\">
                            {{ form_label(form.Matiere) }}
                            {{ form_widget(form.Matiere, {'attr': {'class': 'form-control', 'placeholder': 'Enter Subject Name'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.Date_Debut) }}
                            {{ form_widget(form.Date_Debut, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.Date_Fin) }}
                            {{ form_widget(form.Date_Fin, {'attr': {'class': 'form-control'}}) }}
                        </div>
                           
                   
                        {{ form_end(form) }}
                          
                     <div class=\"d-flex justify-content-between\">
                     <a href=\"{{ path('app_cour_index') }}\" class=\"btn btn-info btn-sm\">Back to List</a>
                
                     <button type=\"submit\" class=\"btn btn-info btn-sm\">Update</button>
                    
    {{ include('cour/_delete_form.html.twig') }}
</div>

              
            
            </div>
        </div>
    </div>
{% endblock %}
", "cour/edit.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\cour\\edit.html.twig");
    }
}

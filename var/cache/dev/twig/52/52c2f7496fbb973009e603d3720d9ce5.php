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

/* base.html.twig */
class __TwigTemplate_600b4ccc525aec5a306d91ad6743ffed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">
  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "</head>
<body>

  ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "  <main id=\"main\" class=\"main\">
  ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "  </main>
  ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 175
        echo "  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
  ";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 190
        echo "  
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <!-- Favicons -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
  
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  
    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
    <!-- Template Main CSS File -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top \" style=\"background-color:rgba(40, 58, 90, 0.9);\">
    <div class=\"container d-flex align-items-center\">

      <h1 class=\"logo me-auto\"><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_home");
        echo "\">SmartSteps</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
<nav id=\"navbar\" class=\"navbar\">
        <ul>
       
          
          <li><a class=\"nav-link scrollto active\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_home");
        echo "\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_cour_index");
        echo "\">Cours</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_unite_index");
        echo "\">Unité</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_evaluation_index");
        echo "\">Evaluation</a></li>          
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_evaluation_caldendar");
        echo "\">Calendar</a></li>          
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_cour_index");
        echo "\">Dashboard Admin</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "    <!-- ======= Footer ======= -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
                
                    <div class=\"col-md-12 col-md-offset-0 text-left\">
                        <br><br><br><br>
                        
                    </div>
                </div>
    </div>

  </section><!-- End Hero -->





   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    <div class=\"footer-newsletter\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-6\">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">

            <h3>SmartSteps</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class=\"social-links mt-3\">
              <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
              <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
              <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
              <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
              <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container footer-bottom clearfix\">
      <div class=\"copyright\">

        &copy; Copyright <strong><span>SmartSteps</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "  <!-- Vendor JS Files -->
  <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  444 => 188,  438 => 185,  434 => 184,  430 => 183,  426 => 182,  422 => 181,  418 => 180,  414 => 179,  411 => 178,  401 => 177,  281 => 64,  271 => 63,  253 => 61,  234 => 51,  230 => 50,  226 => 49,  222 => 48,  218 => 47,  214 => 46,  204 => 39,  198 => 35,  188 => 34,  175 => 28,  169 => 25,  165 => 24,  161 => 23,  157 => 22,  153 => 21,  149 => 20,  145 => 19,  136 => 13,  132 => 12,  129 => 11,  119 => 10,  101 => 7,  88 => 190,  86 => 177,  82 => 175,  80 => 63,  77 => 62,  75 => 61,  72 => 60,  70 => 34,  65 => 31,  63 => 10,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>{% block title %}{% endblock %}</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">
  {% block stylesheets %}
    <!-- Favicons -->
    <link href=\"{{asset('front/assets/img/favicon.png')}}\" rel=\"icon\">
    <link href=\"{{asset('front/assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">
  
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
  
    <!-- Vendor CSS Files -->
    <link href=\"{{asset('front/assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
  
    <!-- Template Main CSS File -->
    <link href=\"{{asset('front/assets/css/style.css')}}\" rel=\"stylesheet\">

  {% endblock %}
</head>
<body>

  {% block header%}
  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top \" style=\"background-color:rgba(40, 58, 90, 0.9);\">
    <div class=\"container d-flex align-items-center\">

      <h1 class=\"logo me-auto\"><a href=\"{{ url('app_home') }}\">SmartSteps</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
<nav id=\"navbar\" class=\"navbar\">
        <ul>
       
          
          <li><a class=\"nav-link scrollto active\" href=\"{{ url('app_home') }}\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ url('app_cour_index') }}\">Cours</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ url('app_unite_index') }}\">Unité</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ url('app_evaluation_index') }}\">Evaluation</a></li>          
          <li><a class=\"nav-link scrollto\" href=\"{{ url('app_evaluation_caldendar') }}\">Calendar</a></li>          
          <li><a class=\"nav-link scrollto\" href=\"{{ url('admin_cour_index') }}\">Dashboard Admin</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {% endblock %}
  <main id=\"main\" class=\"main\">
  {% block body%}{% endblock %}
  </main>
  {% block footer%}
    <!-- ======= Footer ======= -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
                
                    <div class=\"col-md-12 col-md-offset-0 text-left\">
                        <br><br><br><br>
                        
                    </div>
                </div>
    </div>

  </section><!-- End Hero -->





   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">

    <div class=\"footer-newsletter\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-6\">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">

            <h3>SmartSteps</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Home</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">About us</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Terms of service</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class=\"social-links mt-3\">
              <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
              <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
              <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
              <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
              <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container footer-bottom clearfix\">
      <div class=\"copyright\">

        &copy; Copyright <strong><span>SmartSteps</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  {% endblock %}
  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
  {% block javascripts %}
  <!-- Vendor JS Files -->
  <script src=\"{{asset('front/assets/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset('front/assets/vendor/waypoints/noframework.waypoints.js')}}\"></script>
  <script src=\"{{asset('front/assets/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('front/assets/js/main.js')}}\"></script>
  {% endblock %}
  
</body>

</html>", "base.html.twig", "C:\\Users\\youss\\FirstProject\\templates\\base.html.twig");
    }
}

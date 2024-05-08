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

/* base2.html.twig */
class __TwigTemplate_4117c8889f5bc3b8fdc21bae0c973b82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>SmartSteps</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

<!-- Google Fonts -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Vendor CSS Files -->
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


  <!-- Template Main CSS File -->
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top \">
    <div class=\"container d-flex align-items-center\">

      <h1 class=\"logo me-auto\"><a href=\"index.html\">SmartSteps</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
<nav id=\"navbar\" class=\"navbar\">
        <ul>
        ";
        // line 52
        $this->displayBlock('navigation', $context, $blocks);
        // line 68
        echo "       
          <li><a class=\"nav-link scrollto active\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home_index");
        echo "\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_cour_index");
        echo "\">Cours</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_unite_index");
        echo "\">Unité</a></li>
          
    
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_cour_index");
        echo "\">Dashboard Admin</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
                
                    <div class=\"col-md-12 col-md-offset-0 text-left\">
                        <br><br><br><br>
                        ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "                    </div>
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

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 53
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "               <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index1");
            echo "\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Profile</span></a>

        ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 57
                echo "
           <a href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Admin</span></a>
        ";
            }
            // line 60
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Logout </span></a>
             

    ";
        } else {
            // line 64
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Login</span></a>
        <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Register</span></a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 92,  376 => 91,  363 => 65,  358 => 64,  350 => 60,  345 => 58,  342 => 57,  340 => 56,  334 => 54,  331 => 53,  321 => 52,  306 => 204,  300 => 201,  296 => 200,  292 => 199,  288 => 198,  284 => 197,  280 => 196,  276 => 195,  172 => 93,  170 => 91,  150 => 74,  144 => 71,  140 => 70,  136 => 69,  133 => 68,  131 => 52,  106 => 30,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  69 => 17,  63 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>SmartSteps</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
<link href=\"{{asset(\"assets/img/favicon.png\")}}\" rel=\"icon\">
<link href=\"{{asset(\"assets/img/apple-touch-icon.png\")}}\" rel=\"apple-touch-icon\">

<!-- Google Fonts -->
<link href=\"{{asset(\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\")}}\" rel=\"stylesheet\">

<!-- Vendor CSS Files -->
<link href=\"{{asset(\"assets/vendor/aos/aos.css\")}}\" rel=\"stylesheet\">
<link href=\"{{asset(\"assets/vendor/bootstrap/css/bootstrap.min.css\")}}\" rel=\"stylesheet\">
<link href=\"{{asset(\"assets/vendor/bootstrap-icons/bootstrap-icons.css\")}}\" rel=\"stylesheet\">
<link href=\"{{asset(\"assets/vendor/boxicons/css/boxicons.min.css\")}}\" rel=\"stylesheet\">
<link href=\"{{asset(\"assets/vendor/glightbox/css/glightbox.min.css\")}}\" rel=\"stylesheet\">
<link href=\"{{asset(\"assets/vendor/remixicon/remixicon.css\")}}\" rel=\"stylesheet\">
<link href=\"{{asset(\"assets/vendor/swiper/swiper-bundle.min.css\")}}\" rel=\"stylesheet\">


  <!-- Template Main CSS File -->
  <link href=\"{{asset(\"assets/css/style.css\")}}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top \">
    <div class=\"container d-flex align-items-center\">

      <h1 class=\"logo me-auto\"><a href=\"index.html\">SmartSteps</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo me-auto\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
<nav id=\"navbar\" class=\"navbar\">
        <ul>
        {% block navigation %}
    {% if app.user %}
               <a href=\"{{ path('admin_account_index1') }}\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Profile</span></a>

        {% if is_granted('ROLE_ADMIN') %}

           <a href=\"{{ path('admin_dashboard_index') }}\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Admin</span></a>
        {% endif %}
        <a href=\"{{ logout_path('main') }}\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Logout </span></a>
             

    {% else %}
        <a href=\"{{ path('login') }}\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Login</span></a>
        <a href=\"{{ path('registration') }}\" class=\"nav-link scrollto active\"><span class=\"ion-ios-arrow-forward\">Register</span></a>
    {% endif %}
{% endblock %}
       
          <li><a class=\"nav-link scrollto active\" href=\"{{ url('home_index') }}\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ url('app_cour_index') }}\">Cours</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ url('app_unite_index') }}\">Unité</a></li>
          
    
          <li><a class=\"nav-link scrollto\" href=\"{{ url('admin_cour_index') }}\">Dashboard Admin</a></li>
          <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
                
                    <div class=\"col-md-12 col-md-offset-0 text-left\">
                        <br><br><br><br>
                        {% block body %}
                        {% endblock %}
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

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"{{asset(\"assets/vendor/aos/aos.js\")}}\"></script>
  <script src=\"{{asset(\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\")}}\"></script>
  <script src=\"{{asset(\"assets/vendor/glightbox/js/glightbox.min.js\")}}\"></script>
  <script src=\"{{asset(\"assets/vendor/isotope-layout/isotope.pkgd.min.js\")}}\"></script>
  <script src=\"{{asset(\"assets/vendor/swiper/swiper-bundle.min.js\")}}\"></script>
  <script src=\"{{asset(\"assets/vendor/waypoints/noframework.waypoints.js\")}}\"></script>
  <script src=\"{{asset(\"assets/vendor/php-email-form/validate.js\")}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset(\"assets/js/main.js\")}}\"></script>

</body>

</html>", "base2.html.twig", "C:\\Users\\MSI\\Desktop\\final\\integration\\User-Crud-Symfony5\\templates\\base2.html.twig");
    }
}

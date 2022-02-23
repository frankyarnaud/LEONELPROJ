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
class __TwigTemplate_d220deaa12864ca5334738adab91f12d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>Lionel website</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            
            footer{
                background-color:#ff9b00;
            }

            .card{
                background-color:#067790;
            }
            .card-header{
                color:#fff;
            }
            .card-body{
                color:#fff;
            }
            .card-footer{
                color:#fff;
            }
            .nav{
                height:100px;
            }
            
               
          
            
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"nav nav-pills flex-column flex-sm-row\">
  <!--img class=\"flex-sm-fill text-sm-center nav-link active\" aria-current=\"page\" href=\"#\" -->
  <a class=\"flex-sm-fill text-sm-center nav-link text-white\" href=\"#\">Accueil</a>
   <a class=\"flex-sm-fill text-sm-center nav-link disabled text-white\">Notre Entreprise</a>
  <a class=\"flex-sm-fill text-sm-center nav-link disabled text-white \">Nos services</a>
  
</nav>

</header>
<br>
<br>
<br>
<main role=\"main\">

            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-right\">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

</main>

   <!-- Footer -->
<footer>
<br>
  <!-- Section: Links  -->
  <section class=\"text-center text-lg-start text-muted\">
    <div class=\"container text-center text-md-start mt-5\">
      <div class=\"card-deck\">
                <div class=\"card\">
                    <div class=\"card-header\">En-tête de la première carte</div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Titre de la première carte</h5>
                        <p class=\"card-text\">Une ligne de texte dans notre première carte.</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Ligne de texte supplémentaire</small></p>
                    </div>
                    <div class=\"card-footer\">En-tête de la première carte</div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header tzxt-white\">En-tête de la seconde carte</div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Titre de la seconde carte</h5>
                        <p class=\"card-text\">Une ligne de texte dans notre seconde carte.</p>
                    </div>
                    <div class=\"card-footer\">Pied de la seconde carte</div>
                </div>
                    <br>
                    <br>
                    <br>
                    <br>
                <!-- Grid column -->
                <div >
             <!-- Links -->
                <button class=\"text-uppercase fw-bold mb-4 \">
                <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">Contactez Nous</a>
                 
                    </button>

                
            </div>
        </div>
        
        
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <br>
</footer>

<!-- Footer -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"js/bootstrap.bundle.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 157,  102 => 55,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>Lionel website</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset ('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            
            footer{
                background-color:#ff9b00;
            }

            .card{
                background-color:#067790;
            }
            .card-header{
                color:#fff;
            }
            .card-body{
                color:#fff;
            }
            .card-footer{
                color:#fff;
            }
            .nav{
                height:100px;
            }
            
               
          
            
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"{{asset ('assets/css/carousel.css')}}\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"nav nav-pills flex-column flex-sm-row\">
  <!--img class=\"flex-sm-fill text-sm-center nav-link active\" aria-current=\"page\" href=\"#\" -->
  <a class=\"flex-sm-fill text-sm-center nav-link text-white\" href=\"#\">Accueil</a>
   <a class=\"flex-sm-fill text-sm-center nav-link disabled text-white\">Notre Entreprise</a>
  <a class=\"flex-sm-fill text-sm-center nav-link disabled text-white \">Nos services</a>
  
</nav>

</header>
<br>
<br>
<br>
<main role=\"main\">

            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-right\">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 140x140\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\"/><text x=\"50%\" y=\"50%\" fill=\"#777\" dy=\".3em\">140x140</text></svg>
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

</main>

   <!-- Footer -->
<footer>
<br>
  <!-- Section: Links  -->
  <section class=\"text-center text-lg-start text-muted\">
    <div class=\"container text-center text-md-start mt-5\">
      <div class=\"card-deck\">
                <div class=\"card\">
                    <div class=\"card-header\">En-tête de la première carte</div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Titre de la première carte</h5>
                        <p class=\"card-text\">Une ligne de texte dans notre première carte.</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Ligne de texte supplémentaire</small></p>
                    </div>
                    <div class=\"card-footer\">En-tête de la première carte</div>
                </div>
                <div class=\"card\">
                    <div class=\"card-header tzxt-white\">En-tête de la seconde carte</div>
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">Titre de la seconde carte</h5>
                        <p class=\"card-text\">Une ligne de texte dans notre seconde carte.</p>
                    </div>
                    <div class=\"card-footer\">Pied de la seconde carte</div>
                </div>
                    <br>
                    <br>
                    <br>
                    <br>
                <!-- Grid column -->
                <div >
             <!-- Links -->
                <button class=\"text-uppercase fw-bold mb-4 \">
                <a href=\"{{path('contact_new')}}\">Contactez Nous</a>
                 
                    </button>

                
            </div>
        </div>
        
        
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <br>
</footer>

<!-- Footer -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"js/bootstrap.bundle.js\"></script>
</body>
</html>", "base.html.twig", "C:\\Users\\edith\\OneDrive\\Desktop\\LEONELPROJ\\ProjectLionel2\\templates\\base.html.twig");
    }
}

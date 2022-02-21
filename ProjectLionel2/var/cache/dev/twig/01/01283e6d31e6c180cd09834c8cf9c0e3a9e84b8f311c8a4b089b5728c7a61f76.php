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

/* contact/index.html.twig */
class __TwigTemplate_1ca6c46e635672c2426de14054bc1773e2e34f34aab2b3e7bdd2ea05aac8f278 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 1
        echo "<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
\t\tbackground-color: #067790;
\t}
\t.contact{
\t\tpadding: 4%;
\t\theight: 400px;
\t}
\t.col-md-3{
\t\tbackground: #ff9b00;
\t\tpadding: 4%;
\t\tborder-top-left-radius: 0.5rem;
\t\tborder-bottom-left-radius: 0.5rem;
\t}
\t.contact-info{
\t\tmargin-top:10%;
\t}
\t.contact-info img{
\t\tmargin-bottom: 15%;
\t}
\t.contact-info h2{
\t\tmargin-bottom: 10%;
\t}
\t.col-md-9{
\t\tbackground: #fff;
\t\tpadding: 3%;
\t\tborder-top-right-radius: 0.5rem;
\t\tborder-bottom-right-radius: 0.5rem;
\t}
\t.contact-form label{
\t\tfont-weight:600;
\t}
\t.contact-form button{
\t\tbackground:#067790 ;
\t\tcolor: #fff;
\t\tfont-weight: 600;
\t\twidth: 25%;
\t}
\t.contact-form button:focus{
\t\tbox-shadow:none;
\t}
</style>

<div class=\"container contact\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"contact-info\">
\t\t\t\t<img src=\"https://image.ibb.co/kUASdV/contact-image.png\" alt=\"image\"/>
\t\t\t\t
\t\t\t\t  <h2>Contactez Nous</h2>
\t\t\t    
\t\t\t\t<h4>Nous Serons Heureux de Vous avoir !</h4>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"contact-form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"fname\">Nom:</label>
\t\t\t\t  <div class=\"col-sm-10\">          
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" placeholder=\"Entrez votre nom\" name=\"fname\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"lname\">Prénom:</label>
\t\t\t\t  <div class=\"col-sm-10\">          
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" placeholder=\"Entrez votre prénom\" name=\"lname\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez votre mail\" name=\"email\">
\t\t\t\t  </div>
                  <div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"email\">Téléphone:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez votre numéro de téléphone\" name=\"telephone\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"email\">Statut:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez Statut\" name=\"statut\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"comment\">Commentaire:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">        
\t\t\t\t  <div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Envoyez</button>
\t\t\t\t  </div>
                  <br>
                  <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"link-info text-uppercase\"><strong>Retour à la Homepage</strong></a>
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 100,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
\t\tbackground-color: #067790;
\t}
\t.contact{
\t\tpadding: 4%;
\t\theight: 400px;
\t}
\t.col-md-3{
\t\tbackground: #ff9b00;
\t\tpadding: 4%;
\t\tborder-top-left-radius: 0.5rem;
\t\tborder-bottom-left-radius: 0.5rem;
\t}
\t.contact-info{
\t\tmargin-top:10%;
\t}
\t.contact-info img{
\t\tmargin-bottom: 15%;
\t}
\t.contact-info h2{
\t\tmargin-bottom: 10%;
\t}
\t.col-md-9{
\t\tbackground: #fff;
\t\tpadding: 3%;
\t\tborder-top-right-radius: 0.5rem;
\t\tborder-bottom-right-radius: 0.5rem;
\t}
\t.contact-form label{
\t\tfont-weight:600;
\t}
\t.contact-form button{
\t\tbackground:#067790 ;
\t\tcolor: #fff;
\t\tfont-weight: 600;
\t\twidth: 25%;
\t}
\t.contact-form button:focus{
\t\tbox-shadow:none;
\t}
</style>

<div class=\"container contact\">
\t<div class=\"row\">
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"contact-info\">
\t\t\t\t<img src=\"https://image.ibb.co/kUASdV/contact-image.png\" alt=\"image\"/>
\t\t\t\t
\t\t\t\t  <h2>Contactez Nous</h2>
\t\t\t    
\t\t\t\t<h4>Nous Serons Heureux de Vous avoir !</h4>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"contact-form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"fname\">Nom:</label>
\t\t\t\t  <div class=\"col-sm-10\">          
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"fname\" placeholder=\"Entrez votre nom\" name=\"fname\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"lname\">Prénom:</label>
\t\t\t\t  <div class=\"col-sm-10\">          
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"lname\" placeholder=\"Entrez votre prénom\" name=\"lname\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"email\">Email:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez votre mail\" name=\"email\">
\t\t\t\t  </div>
                  <div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"email\">Téléphone:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez votre numéro de téléphone\" name=\"telephone\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"email\">Statut:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez Statut\" name=\"statut\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t  <label class=\"control-label col-sm-2\" for=\"comment\">Commentaire:</label>
\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">        
\t\t\t\t  <div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Envoyez</button>
\t\t\t\t  </div>
                  <br>
                  <a href=\"{{path('homepage')}}\" class=\"link-info text-uppercase\"><strong>Retour à la Homepage</strong></a>
                
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "contact/index.html.twig", "C:\\Users\\frank\\OneDrive\\Bureau\\LPROD\\ProjectLionel2\\templates\\contact\\index.html.twig");
    }
}

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

/* contact/_form.html.twig */
class __TwigTemplate_773c2d650634d96469b9ee9fab2d54fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/_form.html.twig"));

        // line 1
        echo "
<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-lg-12\">
            \t
                <p class=\"leads\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class=\"field_form\">
                    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "contact_success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                            <div class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "contact_error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "                            <div class=\"col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                            <div class=\"form-group col-md-6\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'row');
        echo "
                             </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "phone", [], "any", false, false, false, 35), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "statut", [], "any", false, false, false, 38), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "comentaire", [], "any", false, false, false, 41), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-12\">
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "content", [], "any", false, false, false, 44), 'row', ["label" => "Your message : "]);
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                <button class=\"btn btn-fill-out\">";
        // line 47
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Send Message")) : ("Send Message")), "html", null, true);
        echo "</button>
        
                            </div>

                        </div>
                    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  138 => 47,  132 => 44,  126 => 41,  120 => 38,  114 => 35,  108 => 32,  102 => 29,  96 => 26,  93 => 25,  80 => 19,  75 => 18,  62 => 12,  58 => 11,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-lg-12\">
            \t
                <p class=\"leads\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class=\"field_form\">
                    {{ form_start(form) }}
                        <div class=\"row\">
                            {% for message in app.flashes('contact_success') %}
                            <div class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('contact_error') %}
                            <div class=\"col-md-12 alert alert-danger alert-dismissible fade show\" role=\"alert\"> {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        {% endfor %}
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.nom) }}
                             </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.prenom) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.email) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.phone) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.statut) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                {{ form_row(form.comentaire) }}
                            </div>
                            <div class=\"form-group col-md-12\">
                                {{ form_row(form.content, {\"label\":\"Your message : \"}) }}
                            </div>
                            <div class=\"col-md-12\">
                                <button class=\"btn btn-fill-out\">{{ button_label|default('Send Message') }}</button>
        
                            </div>

                        </div>
                    {{ form_end(form)}}
                </div>
            </div>

        </div>
    </div>
</div>
", "contact/_form.html.twig", "C:\\Users\\edith\\OneDrive\\Desktop\\LEONELPROJ\\ProjectLionel2\\templates\\contact\\_form.html.twig");
    }
}

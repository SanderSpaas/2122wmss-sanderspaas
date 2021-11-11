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

/* delete.twig */
class __TwigTemplate_7e4799896112a695a51c26b86ab7930e25b86211855b232f98e1973a0c6e264f extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"nl\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Mijn takenlijst</title>
        <!-- Fonts -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" rel='stylesheet' type='text/css'>
        <link href=\"https://fonts.googleapis.com/css?family=Lato:100,300,400,700\" rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"css/tasks.css\" rel=\"stylesheet\">
    </head>
    <body id=\"app-layout\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header\"><!-- Just an image -->
                <a class=\"navbar-brand\" href=\"index.php\"><img src=\"img/ikdoeict.png\" height=\"20\" alt=\"ikdoeict alt logo\"></a>
                <a class=\"navbar-brand\" href=\"index.php\">Mijn takenlijst</a>
            </div>
            <!-- Weer te geven indien niet ingelogd -->
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"login.php\">Inloggen</a></li>
            </ul>
        </div>
    </nav>
    <div class=\"container\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Taak verwijderen
                </div>
                <div class=\"panel-body\">
                 <!-- Display Validation Errors -->
                 ";
        // line 36
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) != 0)) {
            // line 37
            echo "                 <div class=\"alert alert-danger\">
                     <strong>
                         Hier is iets misgegaan.
                                                         
                     </strong>
                     <br>
                     <br>
                     <ul>
                         ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 46
                echo "                             <li>
                                 ";
                // line 47
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                             </li>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                     </ul>
                 </div>
             ";
        }
        // line 53
        echo "                    <!-- Task Delete Form -->
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 55
            echo "                    <form action=\"delete.php?id=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" method=\"POST\" class=\"form-horizontal\">
                        <!-- Task Name -->
                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <p>Weet je zeker dat je taak <strong>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</strong> wil verwijderen?</p>
                            </div>
                        </div>
                    
                        <input type=\"hidden\" name=\"moduleAction\" value=\"delete\" />
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    
                        <!-- Add Task Button -->
                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <button type=\"submit\" class=\"btn btn-default\" id=\"btn-delete\">
                                <i class=\"fa fa-btn fa-trash\"></i>Taak verwijderen
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class=\"text-left\"><a href=\"index.php\">Annuleren en terug naar overzicht</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class=\"footer mt-auto py-3\">
        <div class=\"container\">
            <span class=\"text-muted\">&copy; 2020 Odisee &mdash; Opleiding Elektronica-ICT &mdash; Server-side Web Scripting</span>
        </div>
    </footer>
    <!-- JavaScripts -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <script src=\"js/delete.js\"></script>
</body>";
    }

    public function getTemplateName()
    {
        return "delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 65,  130 => 64,  122 => 59,  114 => 55,  110 => 54,  107 => 53,  102 => 50,  93 => 47,  90 => 46,  86 => 45,  76 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "delete.twig", "/var/www/resources/templates/delete.twig");
    }
}

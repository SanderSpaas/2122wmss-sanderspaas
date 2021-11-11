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

/* index.twig */
class __TwigTemplate_73415d0b48fd136b53658e1563cb93f20f3c45337569f756f6e8b4ee34ddeb6b extends Template
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
                    Nieuwe taak
                </div>
                <div class=\"panel-body\">
                 <!-- Display Validation Errors -->
                   ";
        // line 36
        $this->loadTemplate("partials/formErrors.twig", "index.twig", 36)->display($context);
        // line 37
        echo "                    <!-- New Task Form -->
                    <form action=\"index.php\" method=\"POST\" class=\"form-horizontal\">
                        <!-- Task Name -->
                        <div class=\"form-group\">
                            <label for=\"what\" class=\"col-sm-3 control-label\">Taak</label>
                            <div class=\"col-sm-9\">
                                <input type=\"text\" name=\"what\" id=\"what\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"priority\" class=\"col-sm-3 control-label\">Prioriteit</label>
                            <div class=\"col-sm-9\">
                                <select name=\"priority\" id=\"priority\" class=\"form-control\">
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["priorities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 51
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                                </select>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"moduleAction\" value=\"add\" />
                        <!-- Add Task Button -->
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-6\">
                                <button type=\"submit\" class=\"btn btn-default\">
                                <i class=\"fa fa-btn fa-plus\"></i>Voeg taak toe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Current Tasks -->
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Huidige taken
                </div>
                <div class=\"panel-body\">
                    
                    <table class=\"table table-striped task-table\" >
                        <thead>
                            <tr>
                                <th class=\"col-sm-8\">Taak</th>
                                <th class=\"col-sm-2\">&nbsp;</th>
                                <th class=\"col-sm-2\">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 85
            echo "                            <tr>
                                <td class=\"table-text\">
                                    <div class=\"item ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "</div>
                                </td>
                                <td>
                                    <a class=\"btn btn-primary\" href=\"edit.php?id=";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\" role=\"button\">
                                        <i class=\"fa fa-btn fa-pencil\"></i>Wijzigen
                                    </a>
                                </td>
                                <td>
                                    <a class=\"btn btn-danger\" href=\"delete.php?id=";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\" role=\"button\">
                                        <i class=\"fa fa-btn fa-trash\"></i>Verwijderen
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                        </tbody>
                    </table>
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
    <script src=\"js/index.js\"></script>
</body>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 101,  166 => 95,  158 => 90,  150 => 87,  146 => 85,  142 => 84,  109 => 53,  98 => 51,  94 => 50,  84 => 43,  76 => 37,  74 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/resources/templates/index.twig");
    }
}

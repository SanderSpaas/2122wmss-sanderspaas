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

/* edit.twig */
class __TwigTemplate_11f848f28529996e5f859086df5035df8c5737294066f801076fa048d3fcc383 extends Template
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
        <title>
            Mijn takenlijst
                                            
                                
                    
        </title>
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
                <div class=\"navbar-header\">
                    <!-- Just an image -->
                    <a class=\"navbar-brand\" href=\"index.php\">
                        <img src=\"img/ikdoeict.png\" height=\"20\" alt=\"ikdoeict alt logo\">
                    </a>
                    <a class=\"navbar-brand\" href=\"index.php\">
                        Mijn takenlijst
                                                                                            
                                                                    
                                            
                    </a>
                </div>
                <!-- Weer te geven indien niet ingelogd -->
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"login.php\">
                            Inloggen
                                                                                                            
                                                                                
                                                    
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"col-sm-offset-2 col-sm-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Taak wijzigen
                                                                                                                
                                                                                            
                                                                    
                                            
                    </div>
                    <div class=\"panel-body\">
                        <!-- Display Validation Errors -->
                        ";
        // line 60
        $this->loadTemplate("partials/formErrors.twig", "edit.twig", 60)->display($context);
        // line 61
        echo "                        <!-- Task Edit Form -->
                        <form action=\"edit.php?id=";
        // line 62
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\">
                            <!-- Task Name -->
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 65
            echo "                                <div class=\"form-group\">
                                    <label for=\"what\" class=\"col-sm-3 control-label\">
                                        Taak
                                                                                                                                                        
                                                                                                                    
                                                                            
                                    </label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"what\" id=\"what\" class=\"form-control\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"priority\" class=\"col-sm-3 control-label\">
                                        Prioriteit
                                                                                                                                                        
                                                                                                                    
                                              
                                    </label>
                                    <div class=\"col-sm-9\">
                                        <select name=\"priority\" id=\"priority\" class=\"form-control\">
                                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["priorities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 86
                echo "                                                <option option value=\"";
                echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
                echo "\" ";
                if (($context["priority"] == twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 86))) {
                    echo "selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                        </select>
                                    </div>
                                </div>
                                <input type=\"hidden\" name=\"moduleAction\" value=\"edit\" />
                                <input type=\"hidden\" name=\"id\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 92), "html", null, true);
            echo "\" />
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            <!-- Add Task Button -->
                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-3 col-sm-6\">
                                    <button type=\"submit\" class=\"btn btn-default\">
                                        <i class=\"fa fa-btn fa-pencil\"></i>
                                        Taak wijzigen                         
                                                                                                                                                        
                                                                                                                
                                                                        
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class=\"text-left\">
                            <a href=\"index.php\">
                                Annuleren en terug naar overzicht
                                                                                                                        
                                                                                        
                                                        
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </body>
    </body>
</html></div><footer class=\"footer mt-auto py-3\">
<div class=\"container\">
    <span class=\"text-muted\">
        &copy; 2020 Odisee &mdash; Opleiding Elektronica-ICT &mdash; Server-side Web Scripting
                                                    
                                
            
    </span>
</div></footer><!-- JavaScripts --><script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script><script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script><script src=\"js/edit.js\"></script></body></html>";
    }

    public function getTemplateName()
    {
        return "edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 94,  162 => 92,  156 => 88,  141 => 86,  137 => 85,  122 => 73,  112 => 65,  108 => 64,  103 => 62,  100 => 61,  98 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit.twig", "/var/www/resources/templates/edit.twig");
    }
}

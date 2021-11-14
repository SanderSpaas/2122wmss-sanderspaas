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

/* layout.twig */
class __TwigTemplate_286c58f36a9c14be704e4a42fd25ec3b05abadb8dee908a44700e732b5230a15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!DOCTYPE html>
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
                    ";
        // line 31
        if ((($context["login"] ?? null) == true)) {
            // line 32
            echo "                        ";
            $this->loadTemplate("partials/logoutButton.twig", "layout.twig", 32)->display($context);
            // line 33
            echo "                    ";
        } elseif ((($context["login"] ?? null) == "")) {
            // line 34
            echo "
                    ";
        } else {
            // line 36
            echo "                        ";
            $this->loadTemplate("partials/loginButton.twig", "layout.twig", 36)->display($context);
            // line 37
            echo "                    ";
        }
        // line 38
        echo "                </div>
            </nav>
            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            <footer class=\"footer mt-auto py-3\">
                <div class=\"container\">
                    <span class=\"text-muted\">
                        &copy; 2020 Odisee &mdash; Opleiding Elektronica-ICT &mdash; Server-side Web Scripting                      
                                            
                    </span>
                </div>
            </footer>
            <!-- JavaScripts -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"js/index.js\"></script>
        </body>
    </html>
";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  101 => 41,  99 => 40,  95 => 38,  92 => 37,  89 => 36,  85 => 34,  82 => 33,  79 => 32,  77 => 31,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/resources/templates/layout.twig");
    }
}

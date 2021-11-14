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

/* registration.twig */
class __TwigTemplate_ef0b5311c9939dd8d23bb48bd997310f5e7eb9ba1726d102ff539e1d9f84c81a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "registration.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"container\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Registreren
                                    
                </div>
                <div class=\"panel-body\">
                    <!-- Display Validation Errors -->
                    ";
        // line 12
        $this->loadTemplate("partials/formErrors.twig", "registration.twig", 12)->display($context);
        // line 13
        echo "                    <!-- Task Edit Form -->
                    <form action=\"registration.php\" method=\"POST\" class=\"form-horizontal\">
                        <!-- Task Name -->
                        <div class=\"form-group\">
                            <label for=\"username\" class=\"col-sm-3 control-label\">
                                Gebruikernaam
                            </label>
                            <div class=\"col-sm-9\">
                                <input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\" value=\"\"></div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"col-sm-3 control-label\">
                                    Paswoord
                                </label>
                                <div class=\"col-sm-9\">
                                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" value=\"\"></div>
                                </div>
                                <input type=\"hidden\" name=\"moduleAction\" value=\"register\" />
                                <!-- Add Task Button -->
                                <div class=\"form-group\">
                                    <div class=\"col-sm-offset-3 col-sm-6\">
                                        <button type=\"submit\" class=\"btn btn-default\">
                                            Registreer                             
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "registration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  61 => 12,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration.twig", "/var/www/resources/templates/registration.twig");
    }
}

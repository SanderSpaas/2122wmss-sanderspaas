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

/* partials/logoutButton.twig */
class __TwigTemplate_f350cabef65ee41cb498e64879c724ba715434508e3b28bbc99ef04c0acd56d7 extends Template
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
        echo "<!-- Weer te geven indien ingelogd -->
<form class=\"navbar-form navbar-right\" method=\"post\" action=\"logout.php\">
    <button type=\"submit\" class=\"btn btn-default\">
        Uitloggen
    </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/logoutButton.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/logoutButton.twig", "/var/www/resources/templates/partials/logoutButton.twig");
    }
}

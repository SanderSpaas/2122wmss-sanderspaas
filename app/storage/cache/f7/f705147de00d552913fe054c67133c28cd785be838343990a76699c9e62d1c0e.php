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

/* partials/loginButton.twig */
class __TwigTemplate_0cecf40d9243fa24a8b87230fc22bda084636ecdb70bb1f983bed6f00f11dfab extends Template
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
        echo " <!-- Weer te geven indien niet ingelogd -->
 <ul class=\"nav navbar-nav navbar-right\">
 <li>
     <a href=\"login.php\">
         Inloggen                        
     </a>
 </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/loginButton.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/loginButton.twig", "/var/www/resources/templates/partials/loginButton.twig");
    }
}

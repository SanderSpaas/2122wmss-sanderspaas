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

/* partials/formErrors.twig */
class __TwigTemplate_4f4a8ae4d7696a3bf44b7d4fcafe598b9d5f2e75bf6993c5cfcaeed3454ff580 extends Template
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
        echo " ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) != 0)) {
            echo " 
 <div class=\"alert alert-danger\">
 <strong>Hier is iets misgegaan.</strong>
 <br><br>
     <ul>
     ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "         <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "  </ul>
 </div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "partials/formErrors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/formErrors.twig", "/var/www/resources/templates/partials/formErrors.twig");
    }
}

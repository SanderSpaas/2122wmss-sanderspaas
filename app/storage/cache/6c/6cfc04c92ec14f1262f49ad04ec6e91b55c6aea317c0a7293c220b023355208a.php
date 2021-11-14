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
        $this->parent = $this->loadTemplate("layout.twig", "delete.twig", 1);
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
                    Taak verwijderen
                </div>
                <div class=\"panel-body\">
                 <!-- Display Validation Errors -->
                 ";
        // line 11
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) != 0)) {
            // line 12
            echo "                 <div class=\"alert alert-danger\">
                     <strong>
                         Hier is iets misgegaan.                             
                     </strong>
                     <br>
                     <br>
                     <ul>
                         ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "                             <li>
                                 ";
                // line 21
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                             </li>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                     </ul>
                 </div>
             ";
        }
        // line 27
        echo "                    <!-- Task Delete Form -->
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 29
            echo "                    <form action=\"delete.php?id=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" method=\"POST\" class=\"form-horizontal\">
                        <!-- Task Name -->
                        <div class=\"form-group\">
                            <div class=\"col-sm-12\">
                                <p>Weet je zeker dat je taak <strong>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</strong> wil verwijderen?</p>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"moduleAction\" value=\"delete\" />
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
";
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
        return array (  122 => 38,  114 => 37,  107 => 33,  99 => 29,  95 => 28,  92 => 27,  87 => 24,  78 => 21,  75 => 20,  71 => 19,  62 => 12,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "delete.twig", "/var/www/resources/templates/delete.twig");
    }
}

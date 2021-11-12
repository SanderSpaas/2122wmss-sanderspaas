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
        $this->parent = $this->loadTemplate("layout.twig", "edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"container\">
            <div class=\"col-sm-offset-2 col-sm-8\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Taak wijzigen                
                    </div>
                    <div class=\"panel-body\">
                        <!-- Display Validation Errors -->
                        ";
        // line 11
        $this->loadTemplate("partials/formErrors.twig", "edit.twig", 11)->display($context);
        // line 12
        echo "                        <!-- Task Edit Form -->
                        <form action=\"edit.php?id=";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\">
                            <!-- Task Name -->
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 16
            echo "                                <div class=\"form-group\">
                                    <label for=\"what\" class=\"col-sm-3 control-label\">
                                        Taak                                      
                                    </label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"text\" name=\"what\" id=\"what\" class=\"form-control\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 21), "html", null, true);
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
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["priorities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 31
                echo "                                                <option option value=\"";
                echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
                echo "\" ";
                if (($context["priority"] == twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 31))) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                    ";
                // line 32
                echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                        </select>
                                    </div>
                                </div>
                                <input type=\"hidden\" name=\"moduleAction\" value=\"edit\" />
                                <input type=\"hidden\" name=\"id\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" />
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        

</div>
";
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
        return array (  129 => 41,  121 => 39,  115 => 35,  106 => 32,  97 => 31,  93 => 30,  81 => 21,  74 => 16,  70 => 15,  65 => 13,  62 => 12,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit.twig", "/var/www/resources/templates/edit.twig");
    }
}

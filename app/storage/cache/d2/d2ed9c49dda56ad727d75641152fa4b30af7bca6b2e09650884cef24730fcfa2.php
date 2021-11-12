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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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
                        Nieuwe taak                   
                    </div>
                    <div class=\"panel-body\">
                        <!-- Display Validation Errors -->
                        ";
        // line 11
        $this->loadTemplate("partials/formErrors.twig", "index.twig", 11)->display($context);
        // line 12
        echo "                        <!-- New Task Form -->
                        <form action=\"index.php\" method=\"POST\" class=\"form-horizontal\">
                            <!-- Task Name -->
                            <div class=\"form-group\">
                                <label for=\"what\" class=\"col-sm-3 control-label\">
                                    Taak                           
                                </label>
                                <div class=\"col-sm-9\">
                                    <input type=\"text\" name=\"what\" id=\"what\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
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
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["priority"], "html", null, true);
            echo "\" selected=\"selected\">
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
        echo "                                    </select>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"moduleAction\" value=\"add\" />
                            <!-- Add Task Button -->
                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-3 col-sm-6\">
                                    <button type=\"submit\" class=\"btn btn-default\">
                                        <i class=\"fa fa-btn fa-plus\"></i>
                                        Voeg taak toe                                    
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

                        <table class=\"table table-striped task-table\">
                            <thead>
                                <tr>
                                    <th class=\"col-sm-8\">
                                        Taak
                                                                            
                                    </th>
                                    <th class=\"col-sm-2\">
                                        &nbsp;
                                                                            
                                    </th>
                                    <th class=\"col-sm-2\">
                                        &nbsp;
                                                                            
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 77
            echo "                                    <tr>
                                        <td class=\"table-text\">
                                            <div class=\"item ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 79), "html", null, true);
            echo "\">
                                                ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "
                                            </div>
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" href=\"edit.php?id=";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\" role=\"button\">
                                                <i class=\"fa fa-btn fa-pencil\"></i>
                                                Wijzigen
                                                                                                                                    
                                                                                            
                                            </a>
                                        </td>
                                        <td>
                                            <a class=\"btn btn-danger\" href=\"delete.php?id=";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 92), "html", null, true);
            echo "\" role=\"button\">
                                                <i class=\"fa fa-btn fa-trash\"></i>
                                                Verwijderen
                                                                                                                                    
                                                                                            
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
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
        return array (  191 => 101,  176 => 92,  165 => 84,  158 => 80,  154 => 79,  150 => 77,  146 => 76,  103 => 35,  94 => 32,  89 => 31,  85 => 30,  72 => 20,  62 => 12,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/resources/templates/index.twig");
    }
}

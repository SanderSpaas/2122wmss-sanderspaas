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

/* companies/overview.twig */
class __TwigTemplate_a88810e95e293e93644f750524f8cb5114d50815ec089de46b122900653880f7 extends Template
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
        // line 2
        return "alela.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("alela.twig", "companies/overview.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
 <!-- page content -->
 <div class=\"right_col\" role=\"main\">
 <div class=\"\">
     <div class=\"page-title\">
         <div class=\"title_left\">
             <h3>Companies</h3>
         </div>

         <div class=\"title_right\">
             <div class=\"col-md-5 col-sm-5   form-group pull-right top_search\">
                 <form action=\"/companies\" method=\"post\">
                     <div class=\"input-group\">
                         <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                         <span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\">Go!</button></span>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <div class=\"clearfix\"></div>

     <div class=\"row\" style=\"display: block;\">
         <div class=\"col-md-12 col-sm-12  \">
             <div class=\"x_panel\">
                 <div class=\"x_title\">
                     <ul class=\"nav navbar-right panel_toolbox\">
                         <li><a class=\"close-link\"><i class=\"fa fa-plus\"></i> Add a company</a></li>
                     </ul>
                     <div class=\"clearfix\"></div>
                 </div>
                 <div class=\"x_content\">
                     <table class=\"table table-striped table-hover\">
                         <thead>
                         <tr>
                             <th>#</th>
                             <th>Company name</th>
                             <th>VAT number</th>
                             <th>Postal code</th>
                             <th>City</th>
                             <th>Primary contact</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr>
                             <th scope=\"row\">1</th>
                             <td>Odisee</td>
                             <td>BE9171.743.114</td>
                             <td>9000</td>
                             <td>Gent</td>
                             <td>Peter De Meester, Joris Maervoet</td>
                         </tr>
                         <tr>
                             <th scope=\"row\">2</th>
                             <td>Café Robot</td>
                             <td>BE9171.743.114</td>
                             <td>9000</td>
                             <td>Gent</td>
                             <td>R. Botr</td>
                         </tr>
                         </tbody>
                     </table>

                 </div>
             </div>
         </div>
         <div class=\"clearfix\"></div>
     </div>
 </div>
</div>
<!-- /page content -->
";
    }

    public function getTemplateName()
    {
        return "companies/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "companies/overview.twig", "/var/www/resources/templates/companies/overview.twig");
    }
}

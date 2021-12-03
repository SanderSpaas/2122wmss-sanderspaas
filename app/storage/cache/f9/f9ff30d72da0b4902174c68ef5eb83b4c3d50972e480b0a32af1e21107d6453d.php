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

/* alela.twig */
class __TwigTemplate_99ffe29f297a2e7e4e186b253f62efdf38206692e853b8d9486bda57ced812bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Alela!</title>

    <link href=\"/alela/vendors/bootstrap/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/alela/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"/alela/vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <link href=\"/alela/vendors/icheck/green.css\" rel=\"stylesheet\">

    <link href=\"/alela/build/css/custom.min.css\" rel=\"stylesheet\">
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Alela!</span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">
                        <img src=\"images/img.jpg\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Home </a>
                            </li>
                            <li><a><i class=\"fa fa-sitemap\"></i> CRM <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"companies.html\">Companies</a></li>
                                    <li><a href=\"form.html\">Add a company</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-clone\"></i>Tickets <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"open-tickets.html\">Open tickets</a></li>
                                    <li><a href=\"reports-tickets.html\">Reports</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Reports <span
                                    class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"a.html\">Tickets</a></li>
                                    <li><a href=\"a.html\">CRM</a></li>
                                    <li><a href=\"a.html\">General usage</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=\"menu_section\">
                        <h3>Administration</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-user\"></i> Users & roles <span
                                    class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"users.html\">Users</a></li>
                                    <li><a href=\"roles.html\">Roles</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <div class=\"nav toggle\">
                    <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <nav class=\"nav navbar-nav\">
                    <ul class=\" navbar-right\">
                        <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\"
                               id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"images/img.jpg\" alt=\"\">John Doe
                            </a>
                            <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"logout.html\"><i class=\"fa fa-sign-out pull-right\"></i>
                                    Log Out</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "
        <!-- footer content -->
        <footer>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src=\"/alela/vendors/jquery/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"/alela/vendors/bootstrap/bootstrap.bundle.min.js\"></script>
<!-- FastClick -->
<script src=\"/alela/vendors/fastclick/fastclick.js\"></script>
<!-- NProgress -->
<script src=\"/alela/vendors/nprogress/nprogress.js\"></script>
<!-- iCheck -->
<script src=\"/alela/vendors/icheck/icheck.min.js\"></script>

<!-- Custom Theme Scripts -->
<script src=\"/alela/build/js/custom.min.js\"></script>
</body>
</html>
";
    }

    // line 133
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
        ";
    }

    public function getTemplateName()
    {
        return "alela.twig";
    }

    public function getDebugInfo()
    {
        return array (  202 => 133,  174 => 135,  172 => 133,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "alela.twig", "/var/www/resources/templates/alela/alela.twig");
    }
}

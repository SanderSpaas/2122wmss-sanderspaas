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

/* login.twig */
class __TwigTemplate_3013ee8f8eaa903d58b2a39e9dcfdc38a9990cd29fbc11f0334c37956680b726 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Alela!</title>

    <link href=\"/alela/vendors/bootstrap/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/alela/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"/alela/vendors/nprogress/nprogress.css\" rel=\"stylesheet\">
    <link href=\"/alela/vendors/animate/animate.min.css\" rel=\"stylesheet\">

    <link href=\"/alela/build/css/custom.min.css\" rel=\"stylesheet\">
</head>

<body class=\"login\">
<div>
    <a class=\"hiddenanchor\" id=\"signup\"></a>
    <a class=\"hiddenanchor\" id=\"signin\"></a>

    <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
            <section class=\"login_content\">
                <form>
                    <h1>Login Form</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\"/>
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\"/>
                    </div>
                    <div>
                        <span class=\"input-group-btn\"><button class=\"btn btn-default submit\" type=\"submit\">Log in</button>
                        <input type=\"hidden\" name=\"moduleAction\" value=\"login\" />
                        <a class=\"btn btn-outline-primary\" href=\"#\">Lost your password?</a>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"separator\">
                        <p class=\"change_link\">New to site?
                            <a href=\"#signup\" class=\"to_register\"> Create Account </a>
                        </p>
                        <div class=\"clearfix\"></div>
                        <br/>
                        <div>
                            <h1><i class=\"fa fa-paw\"></i> Alela!</h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
            <section class=\"login_content\">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\"/>
                    </div>
                    <div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\"/>
                    </div>
                    <div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\"/>
                    </div>
                    <div>
                        <span class=\"input-group-btn\"><button class=\"btn btn-default submit\" type=\"submit\">Submit</button></span>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"separator\">
                        <p class=\"change_link\">Already a member ?
                            <a href=\"#signin\" class=\"to_register\"> Log in </a>
                        </p>
                        <div class=\"clearfix\"></div>
                        <br/>
                        <div>
                            <h1><i class=\"fa fa-paw\"></i> Alela!</h1>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/var/www/resources/templates/alela/login.twig");
    }
}

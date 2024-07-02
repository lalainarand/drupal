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

/* themes/custom/my_theme/templates/page--front.html.twig */
class __TwigTemplate_72edef1849c53b4bda9762e31952e980 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Creative Marketing</title>
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"/themes/custom/my_theme/css/style.css\" type=\"text/css\" media=\"all\" />
</head>
<body>

    <header class=\"header\">
        <div>
            <img src=\"/sites/default/files/header.png\" alt=\"Creative Marketing\">
        </div>
        <nav>
            <a href=\"#\" class=\"nav-link active\">Home</a>
            <a href=\"#\" class=\"nav-link\">Services<i class=\"fa fa-caret-down\"></i></a>
            <a href=\"#\" class=\"nav-link\">Blog</a>
            <a href=\"#\" class=\"nav-link\">About</a>
            <a href=\"#\" class=\"nav-link\">FAQ</a>
        </nav>
    </header>

    <section class=\"hero\">
        <div class=\"content\">
            <h1>Subscribe Now to Our Newsletter</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <form>
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                </div>
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                </div>
                <button type=\"submit\" class=\"btn\">
                    Send <i class=\"fa fa-caret-right\"></i>
                </button>
                
            </form>
        </div>
        <div class=\"image\">
             <img src=\"/sites/default/files/newsletter-image.jpg\" alt=\"Newsletter Image\" class=\"img-fluid\">
        </div>
    </section>

    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/my_theme/templates/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/my_theme/templates/page--front.html.twig", "/home/Workspace/my_drupal_site/web/themes/custom/my_theme/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

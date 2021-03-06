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

/* C:\xampp\htdocs\olmish\HungThinhLand/themes/demo/partials/site/footer.htm */
class __TwigTemplate_d534d025528e88142d7113825db6e4bca7c23825e96c75e52e64c629e69b03c0 extends \Twig\Template
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
        echo "<div class=\"container container-xl\">
    <div class=\"row\">
        <div class=\"col-lg col-md-4 col-12 mb-7 mb-lg-0\">
            <h3 class=\"fs-20 mb-3\">Company</h3>
            <p class=\"fs-14 lh-185 pr-xl-12\">
                Find a location nearest you. See <a class=\"font-weight-600\" href=\"#\"><u>Our Stores</u></a>
            </p>
            <p class=\"fs-14 lh-185 mb-0\"><strong class=\"text-secondary\">+391 (0)35 2568 4593</strong>
                <br>
                hello@domain.com
            </p>
        </div>
        <div class=\"col-lg col-md-4  col-12 mb-7 mb-lg-0\">
            <h3 class=\"fs-20 mb-3\">Useful links</h3>
            <ul class=\"list-unstyled mb-0\">
                <li class=\"pb-1\"><a href=\"#\" class=\"text-body lh-175\">New Products</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Best Sellers</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Bundle & Save</a></li>
                <li class=\"pt-1\"><a href=\"#\" class=\"text-body lh-175\">Online Gift Card</a></li>
            </ul>
        </div>
        <div class=\"col-lg col-md-4 col-12 mb-7 mb-lg-0\">
            <h3 class=\"fs-20 mb-3\">Infomation</h3>
            <ul class=\"list-unstyled mb-0\">
                <li class=\"pb-1\"><a href=\"#\" class=\"text-body lh-175\">Start a Return</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Contact Us</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Shipping FAQ</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Terms & Conditions</a></li>
                <li class=\"pt-1\"><a href=\"#\" class=\"text-body lh-175\">Privacy Policy</a></li>
            </ul>
        </div>
        <div class=\"col-lg-5 col-12 mb-9 mb-lg-0\">
            <h3 class=\"mb-2\">Good emails.</h3>
            <p class=\"lh-2\">Enter your email below to be the first to know about new collections and product
                launches.</p>
            <form class=\"pt-4\">
                <div class=\"input-group position-relative\">
                    <input type=\"email\" class=\"form-control bg-white rounded-left\"
                        placeholder=\"Enter your email address\">
                    <button type=\"submit\" class=\"btn btn-secondary bg-hover-primary border-hover-primary\">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row mt-0 mt-lg-15 align-items-center\">
        <div class=\"col-12 col-md-6 col-lg-4 d-flex align-items-center order-2 order-lg-1 mt-4 mt-md-7 mt-lg-0\">
            <p class=\"mb-0\">?? Glowing 2021</p>
            <ul class=\"list-inline fs-18 ml-3 mb-0\">
                <li class=\"list-inline-item mr-4\">
                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                </li>
                <li class=\"list-inline-item mr-4\">
                    <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                </li>
                <li class=\"list-inline-item mr-4\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                </li>
            </ul>
        </div>
        <div class=\"col-12 col-lg-4 text-md-center order-1 order-lg-2\">
            <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-black-x1.png");
        echo "\" alt=\"Glowing\">
        </div>
        <div class=\"col-12 col-md-6 col-lg-4 text-md-right order-3 mt-4 mt-md-7 mt-lg-0\">
            <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-pay.png");
        echo "\" alt=\"Pay\">
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\olmish\\HungThinhLand/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 69,  106 => 66,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container container-xl\">
    <div class=\"row\">
        <div class=\"col-lg col-md-4 col-12 mb-7 mb-lg-0\">
            <h3 class=\"fs-20 mb-3\">Company</h3>
            <p class=\"fs-14 lh-185 pr-xl-12\">
                Find a location nearest you. See <a class=\"font-weight-600\" href=\"#\"><u>Our Stores</u></a>
            </p>
            <p class=\"fs-14 lh-185 mb-0\"><strong class=\"text-secondary\">+391 (0)35 2568 4593</strong>
                <br>
                hello@domain.com
            </p>
        </div>
        <div class=\"col-lg col-md-4  col-12 mb-7 mb-lg-0\">
            <h3 class=\"fs-20 mb-3\">Useful links</h3>
            <ul class=\"list-unstyled mb-0\">
                <li class=\"pb-1\"><a href=\"#\" class=\"text-body lh-175\">New Products</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Best Sellers</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Bundle & Save</a></li>
                <li class=\"pt-1\"><a href=\"#\" class=\"text-body lh-175\">Online Gift Card</a></li>
            </ul>
        </div>
        <div class=\"col-lg col-md-4 col-12 mb-7 mb-lg-0\">
            <h3 class=\"fs-20 mb-3\">Infomation</h3>
            <ul class=\"list-unstyled mb-0\">
                <li class=\"pb-1\"><a href=\"#\" class=\"text-body lh-175\">Start a Return</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Contact Us</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Shipping FAQ</a></li>
                <li class=\"py-1\"><a href=\"#\" class=\"text-body lh-175\">Terms & Conditions</a></li>
                <li class=\"pt-1\"><a href=\"#\" class=\"text-body lh-175\">Privacy Policy</a></li>
            </ul>
        </div>
        <div class=\"col-lg-5 col-12 mb-9 mb-lg-0\">
            <h3 class=\"mb-2\">Good emails.</h3>
            <p class=\"lh-2\">Enter your email below to be the first to know about new collections and product
                launches.</p>
            <form class=\"pt-4\">
                <div class=\"input-group position-relative\">
                    <input type=\"email\" class=\"form-control bg-white rounded-left\"
                        placeholder=\"Enter your email address\">
                    <button type=\"submit\" class=\"btn btn-secondary bg-hover-primary border-hover-primary\">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row mt-0 mt-lg-15 align-items-center\">
        <div class=\"col-12 col-md-6 col-lg-4 d-flex align-items-center order-2 order-lg-1 mt-4 mt-md-7 mt-lg-0\">
            <p class=\"mb-0\">?? Glowing 2021</p>
            <ul class=\"list-inline fs-18 ml-3 mb-0\">
                <li class=\"list-inline-item mr-4\">
                    <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                </li>
                <li class=\"list-inline-item mr-4\">
                    <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                </li>
                <li class=\"list-inline-item mr-4\">
                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                </li>
            </ul>
        </div>
        <div class=\"col-12 col-lg-4 text-md-center order-1 order-lg-2\">
            <img src=\"{{'assets/images/logo-black-x1.png'|theme}}\" alt=\"Glowing\">
        </div>
        <div class=\"col-12 col-md-6 col-lg-4 text-md-right order-3 mt-4 mt-md-7 mt-lg-0\">
            <img src=\"{{'assets/images/icon-pay.png'|theme}}\" alt=\"Pay\">
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\olmish\\HungThinhLand/themes/demo/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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

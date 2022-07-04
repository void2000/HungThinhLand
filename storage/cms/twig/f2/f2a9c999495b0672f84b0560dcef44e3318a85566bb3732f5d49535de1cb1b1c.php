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

/* D:\xampp\htdocs\HungThinhLand/themes/demo/pages/shop-product.htm */
class __TwigTemplate_674f8c9ec70327034479984ec6225dabee801c27518bc3d3acb0e960cd9e5a8a extends \Twig\Template
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
        echo "<main id=\"content\">
<section class=\"py-2 bg-gray-2\">
<div class=\"container\">
<nav aria-label=\"breadcrumb\">
<ol class=\"breadcrumb breadcrumb-site py-0 d-flex justify-content-center\">
<li class=\"breadcrumb-item\"><a class=\"text-decoration-none text-body\" href=\"index.html\">Home</a>
</li>
<li class=\"breadcrumb-item active pl-0 d-flex align-items-center\" aria-current=\"page\">Shop Alternatings
</li>
</ol>
</nav>
</div>
</section>
<section>
<div class=\"container container-xl\">
<h2 class=\"text-center mt-9 mb-8\">Shop Alternating</h2>
<div class=\"d-flex justify-content-between align-items-center flex-wrap\">
<a href=\"#\" class=\" text-secondary d-flex align-items-center text-decoration-none my-sm-0 my-3\" data-canvas=\"true\" data-canvas-options='{\"container\":\".filter-canvas\"}'\\>
<svg class=\"icon icon-text-align-left-light mr-2 fs-32\">
<use xlink:href=\"#icon-text-align-left-light\"></use>
</svg>
Show Sidebar
</a>
<div class=\"d-flex align-items-center\">
<div class=\"switch-layout d-lg-flex align-items-center d-none\">
<span class=\"pr-5\">See</span>
<a href=\"#\" class=\"active pr-5\" title=\"Grid View\">
<svg class=\"icon icon-squares-four fs-32 hover-secondary\">
<use xlink:href=\"#icon-squares-four\"></use>
</svg>
</a>
<a href=\"shop-page-05.html\" title=\"List View\">
<svg class=\"icon icon-list fs-32 hover-secondary\">
<use xlink:href=\"#icon-list\"></use>
</svg>
</a>
</div>
<div class=\"dropdown show lh-1 rounded ml-lg-5 ml-0\" style=\"background-color:#f5f5f5\">
<a href=\"#\" class=\"dropdown-toggle custom-dropdown-toggle text-decoration-none text-secondary p-3 mw-210 position-relative d-block\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
Default Sorting
</a>
<div class=\"dropdown-menu custom-dropdown-item\" aria-labelledby=\"dropdownMenuButton\">
<a class=\"dropdown-item\" href=\"#\">Price high to low</a>
<a class=\"dropdown-item\" href=\"#\">Price low to high</a>
<a class=\"dropdown-item\" href=\"#\">Random</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"mt-7\">
<div class=\"container container-xl\">
<div class=\"row\">

    
<div class=\"col-xl-3 col-lg-4 col-md-6 mb-6 mb-lg-7\">
<div class=\"card border-0 product\" data-animate=\"fadeInUp\">
<div class=\"position-relative\">
<img src=\"images/product-01.jpg\" alt=\"Facial cleanser\">
<div class=\"card-img-overlay d-flex p-3\">
<div>
<span class=\"badge badge-primary\">-20%</span>
</div>
<div class=\"my-auto w-100 content-change-vertical\">
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
<svg class=\"icon icon-shopping-bag-open-light fs-24\">
 <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
</svg>
</a>
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
</a>
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
<svg class=\"icon icon-star-light fs-24\">
<use xlink:href=\"#icon-star-light\"></use>
</svg>
</a>
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
<svg class=\"icon icon-arrows-left-right-light fs-24\">
<use xlink:href=\"#icon-arrows-left-right-light\"></use>
</svg>
</a>
</div>
</div>
</div>
<div class=\"card-body pt-4 text-center\">
<p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
<span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
<span>\$29.00</span>
</p>
<h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-page-01.html\">Facial cleanser</a></h2>
<div class=\"d-flex align-items-center justify-content-center flex-wrap\">
<ul class=\"list-inline mb-0 lh-1\">
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
</ul>
<span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
</div>
</div>
</div>
</div>



</div>
</div>
</section>
<section class=\"pb-lg-13 pb-11\">
<nav>
<ul class=\"pagination justify-content-center align-items-center mb-0 fs-16 font-weight-600\">
<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\" tabindex=\"-1\"><i class=\"far fa-angle-double-left\"></i></a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">1</a>
</li>
<li class=\"page-item active\" aria-current=\"page\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">2</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">3</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">4</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">5</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">...</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">16</a>
</li>
<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\"><i class=\"far fa-angle-double-right\"></i></a>
</li>
</ul>
</nav>
</section>
</main>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/shop-product.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main id=\"content\">
<section class=\"py-2 bg-gray-2\">
<div class=\"container\">
<nav aria-label=\"breadcrumb\">
<ol class=\"breadcrumb breadcrumb-site py-0 d-flex justify-content-center\">
<li class=\"breadcrumb-item\"><a class=\"text-decoration-none text-body\" href=\"index.html\">Home</a>
</li>
<li class=\"breadcrumb-item active pl-0 d-flex align-items-center\" aria-current=\"page\">Shop Alternatings
</li>
</ol>
</nav>
</div>
</section>
<section>
<div class=\"container container-xl\">
<h2 class=\"text-center mt-9 mb-8\">Shop Alternating</h2>
<div class=\"d-flex justify-content-between align-items-center flex-wrap\">
<a href=\"#\" class=\" text-secondary d-flex align-items-center text-decoration-none my-sm-0 my-3\" data-canvas=\"true\" data-canvas-options='{\"container\":\".filter-canvas\"}'\\>
<svg class=\"icon icon-text-align-left-light mr-2 fs-32\">
<use xlink:href=\"#icon-text-align-left-light\"></use>
</svg>
Show Sidebar
</a>
<div class=\"d-flex align-items-center\">
<div class=\"switch-layout d-lg-flex align-items-center d-none\">
<span class=\"pr-5\">See</span>
<a href=\"#\" class=\"active pr-5\" title=\"Grid View\">
<svg class=\"icon icon-squares-four fs-32 hover-secondary\">
<use xlink:href=\"#icon-squares-four\"></use>
</svg>
</a>
<a href=\"shop-page-05.html\" title=\"List View\">
<svg class=\"icon icon-list fs-32 hover-secondary\">
<use xlink:href=\"#icon-list\"></use>
</svg>
</a>
</div>
<div class=\"dropdown show lh-1 rounded ml-lg-5 ml-0\" style=\"background-color:#f5f5f5\">
<a href=\"#\" class=\"dropdown-toggle custom-dropdown-toggle text-decoration-none text-secondary p-3 mw-210 position-relative d-block\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
Default Sorting
</a>
<div class=\"dropdown-menu custom-dropdown-item\" aria-labelledby=\"dropdownMenuButton\">
<a class=\"dropdown-item\" href=\"#\">Price high to low</a>
<a class=\"dropdown-item\" href=\"#\">Price low to high</a>
<a class=\"dropdown-item\" href=\"#\">Random</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"mt-7\">
<div class=\"container container-xl\">
<div class=\"row\">

    
<div class=\"col-xl-3 col-lg-4 col-md-6 mb-6 mb-lg-7\">
<div class=\"card border-0 product\" data-animate=\"fadeInUp\">
<div class=\"position-relative\">
<img src=\"images/product-01.jpg\" alt=\"Facial cleanser\">
<div class=\"card-img-overlay d-flex p-3\">
<div>
<span class=\"badge badge-primary\">-20%</span>
</div>
<div class=\"my-auto w-100 content-change-vertical\">
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\" class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
<svg class=\"icon icon-shopping-bag-open-light fs-24\">
 <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
</svg>
</a>
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\" class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
<span data-toggle=\"modal\" data-target=\"#quick-view\">
<svg class=\"icon icon-eye-light fs-24\">
<use xlink:href=\"#icon-eye-light\"></use>
</svg>
</span>
</a>
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\" class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
<svg class=\"icon icon-star-light fs-24\">
<use xlink:href=\"#icon-star-light\"></use>
</svg>
</a>
<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\" class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
<svg class=\"icon icon-arrows-left-right-light fs-24\">
<use xlink:href=\"#icon-arrows-left-right-light\"></use>
</svg>
</a>
</div>
</div>
</div>
<div class=\"card-body pt-4 text-center\">
<p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
<span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
<span>\$29.00</span>
</p>
<h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-page-01.html\">Facial cleanser</a></h2>
<div class=\"d-flex align-items-center justify-content-center flex-wrap\">
<ul class=\"list-inline mb-0 lh-1\">
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
<li class=\"list-inline-item fs-12 text-primary mr-0\"><i class=\"fas fa-star\"></i>
</li>
</ul>
<span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
</div>
</div>
</div>
</div>



</div>
</div>
</section>
<section class=\"pb-lg-13 pb-11\">
<nav>
<ul class=\"pagination justify-content-center align-items-center mb-0 fs-16 font-weight-600\">
<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\" tabindex=\"-1\"><i class=\"far fa-angle-double-left\"></i></a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">1</a>
</li>
<li class=\"page-item active\" aria-current=\"page\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">2</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">3</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">4</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">5</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">...</a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">16</a>
</li>
<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\"><i class=\"far fa-angle-double-right\"></i></a>
</li>
</ul>
</nav>
</section>
</main>", "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/shop-product.htm", "");
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

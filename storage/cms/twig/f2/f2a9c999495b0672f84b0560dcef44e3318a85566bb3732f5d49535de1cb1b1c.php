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

";
        // line 56
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, true, 56), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, true, 56)], "method", false, false, true, 56), "active", [], "method", false, false, true, 56);
        // line 57
        echo "

";
        // line 59
        if ( !twig_test_empty(($context["obProductList"] ?? null))) {
            // line 60
            echo "
";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 62
                echo "
";
                // line 63
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, true, 63), "active", [], "method", false, false, true, 63), "first", [], "method", false, false, true, 63);
                // line 64
                echo "<div class=\"col-xl-3 col-lg-4 col-md-6 mb-6 mb-lg-7\">
<div class=\"card border-0 product\" data-animate=\"fadeInUp\">
<div class=\"position-relative\">
";
                // line 67
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, true, 67))) {
                    // line 68
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, true, 68), "path", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, true, 68), "description", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                    echo "\">
";
                }
                // line 70
                echo "<div class=\"card-img-overlay d-flex p-3\">


<!-- phan khuyen mai -->
";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, true, 74) > 0)) {
                    echo "     
<div>  
<span class=\"badge badge-primary\">";
                    // line 76
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 76) - twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 76)) / twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 76)) * 100), "html", null, true);
                    echo "%</span>
</div>
";
                }
                // line 79
                echo "<!-- end phan khuyen mai -->

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
";
                // line 110
                echo "
<p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">

";
                // line 113
                if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price_value", [], "any", false, false, true, 113) > 0)) {
                    echo "    
<span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">";
                    // line 114
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo "</span>
";
                }
                // line 116
                echo "
<span>";
                // line 117
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "</span>
</p>
";
                // line 120
                echo "
<h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-page-01.html\">";
                // line 121
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "</a></h2>
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
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 142
        echo "


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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 142,  209 => 121,  206 => 120,  199 => 117,  196 => 116,  189 => 114,  185 => 113,  180 => 110,  148 => 79,  142 => 76,  137 => 74,  131 => 70,  123 => 68,  121 => 67,  116 => 64,  114 => 63,  111 => 62,  107 => 61,  104 => 60,  102 => 59,  98 => 57,  96 => 56,  39 => 1,);
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

{% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}


{% if obProductList is not empty() %}

{% for obProduct in obProductList %}

{% set obOffer = obProduct.offer.active().first() %}
<div class=\"col-xl-3 col-lg-4 col-md-6 mb-6 mb-lg-7\">
<div class=\"card border-0 product\" data-animate=\"fadeInUp\">
<div class=\"position-relative\">
{% if obProduct.preview_image is not empty %}
<img src=\"{{ obProduct.preview_image.path }}\" alt=\"{{ obProduct.preview_image.description }}\">
{% endif %}
<div class=\"card-img-overlay d-flex p-3\">


<!-- phan khuyen mai -->
{% if obOffer.old_price_value > 0 %}     
<div>  
<span class=\"badge badge-primary\">{{ ((obOffer.old_price - obOffer.price)/obOffer.old_price)*100  }}%</span>
</div>
{% endif %}
<!-- end phan khuyen mai -->

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
{# phan gia san pham #}

<p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">

{% if obOffer.old_price_value > 0 %}    
<span class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">{{ obOffer.old_price }} {{ obOffer.currency }}</span>
{% endif %}

<span>{{ obOffer.price }} {{ obOffer.currency }}</span>
</p>
{# end phan gia san pham #}

<h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a href=\"product-page-01.html\">{{ obProduct.name }}</a></h2>
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
{% endfor %}
{% endif %}



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
        static $tags = array("set" => 56, "if" => 59, "for" => 61);
        static $filters = array("escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
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

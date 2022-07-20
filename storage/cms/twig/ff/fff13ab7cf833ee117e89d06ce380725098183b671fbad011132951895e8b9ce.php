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

/* D:\xampp\htdocs\HungThinhLand/themes/demo/pages/home.htm */
class __TwigTemplate_b20965ce60992cdcd3789b145e021cfca1d860c69d7ae7d46da914d2b1b2ba65 extends \Twig\Template
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
        echo "<section class=\"slick-slider slider mx-0\"
data-slick-options='{\"slidesToShow\": 1,\"infinite\":true,\"autoplay\":true,\"dots\":true,\"arrows\":false,\"fade\":false,\"cssEase\":\"ease-in-out\",\"speed\":600}'>


";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 5), "slideShows", [], "any", false, false, true, 5), "slide_show_content", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "

<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url(";
            // line 10
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_image", [], "any", false, false, true, 10), 10, $this->source));
            echo ")\">

        <div class=\"container container-xl pt-6 pb-7 col-md-5\">
            ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", [], "any", false, false, true, 13))) {
                // line 14
                echo "            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\"></p>
                <h1 class=\"mb-4 fs-56 lh-128\">";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</h1>
                <p class=\"fs-18 lh-166 mb-7\" style=\"max-width: 454px\">";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</p>
            </div>
            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_link", [], "any", false, false, true, 21) != "")) {
                // line 22
                echo "            <a href=\"shop-page-04.html\" class=\"btn btn-secondary rounded bg-hover-primary border-0\"
                data-animate=\"fadeInUp\">Shop Now</a>
            ";
            }
            // line 25
            echo "        </div>
        <div class=\"col-md-7\">
            <style>
                #child-img{

                }
                #child-img1{

                }
            </style>
            <!-- <div id=\"child-img\">
                <img id=\"child-img1\" src=\"";
            // line 36
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "Child_Image", [], "any", false, false, true, 36), 36, $this->source));
            echo "\" alt=\"\">
            </div> -->
                
           
        </div>
    </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
<!--
<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url(";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-slider-02.jpg");
        echo ");\">
        <div class=\"container container-xl pt-6 pb-7\">
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\">New collection</p>
                <h1 class=\"mb-4 fs-56 lh-128\">Get The Perfectly <br>
                    Hydrated Skin</h1>
                <p class=\"fs-18 lh-166 mb-7\" style=\"max-width: 454px\">Made using clean, non-toxic
                    ingredients, our products are designed for
                    everyone.</p>
            </div>
            <a href=\"shop-page-04.html\" class=\"btn btn-secondary rounded bg-hover-primary border-0\"
                data-animate=\"fadeInUp\">Shop Now</a>
        </div>
    </div>
</div>
<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url(";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-slider-03.jpg");
        echo ");\">
        <div class=\"container container-xl pt-6 pb-7\">
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\">Get the glow</p>
                <h1 class=\"mb-4 fs-56 lh-128\">Be Your<br>
                    Kind of Beauty</h1>
                <p class=\"fs-18 lh-166 mb-7\" style=\"max-width: 454px\">Made using clean, non-toxic
                    ingredients, our products are designed for
                    everyone.</p>
            </div>
            <a href=\"shop-page-04.html\" class=\"btn btn-secondary rounded bg-hover-primary border-0\"
                data-animate=\"fadeInUp\">Shop Now</a>
        </div>
    </div>
</div>
-->
</section>
<section class=\"pt-md-11 pt-9\">
<div class=\"container container-xl\">
    <h2 class=\"text-center mb-3\" data-animate=\"fadeInUp\">Our Featured Products</h2>
    <p class=\"mb-9 fs-18 text-center\" data-animate=\"fadeInUp\">Get the skin you want to feel</p>
    <div class=\"slick-slider mx-n2\"
        data-slick-options='{\"slidesToShow\": 4,\"dots\":false,\"arrows\":true,\"responsive\":[{\"breakpoint\": 1368,\"settings\": {\"arrows\":false,\"dots\":true}},{\"breakpoint\": 1200,\"settings\": {\"slidesToShow\":3,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"arrows\":false,\"dots\":true}}]}'>
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"https://www.siogyumolcs.hu/assets/img/img-index-category-hover.jpg\" alt=\"Facial cleanser\" style=\"opacity: 0;
                    transition: opacity .4s;\">
                    <img src=\"https://www.siogyumolcs.hu/storage/categories/JxmHLTnGfur1tCSPOAGCS72GlfC08U6yGFHst2dg/category_small.png\" alt=\"Facial cleanser\">
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span
                            class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
        <!-- <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-02.jpg");
        echo "\" alt=\"Bio-shroom Rejuvenating Serum\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a></h2>
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
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-03.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                            <span class=\"badge badge-warning\">New</span>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"";
        // line 248
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-04.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                            <span class=\"badge badge-primary\">-20%</span>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span
                            class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-05.jpg");
        echo "\" alt=\"Facial cleanser\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
        </div> -->
    </div>
</div>
</section>
<section class=\"pt-9 pt-lg-10\">
<div class=\" \"  >
    <div class=\"row\">
        <div class=\"col-12 col-lg-6 mb-6 mb-lg-0\">
            <div class=\"card border-0 banner banner-01 hover-zoom-in hover-shine\" data-animate=\"fadeInUp\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url(";
        // line 379
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-01.jpg");
        echo ");    box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 50%); \" ></div>
                <div class=\"card-img-overlay d-inline-flex flex-column p-6 p-md-8\">
                    <h6 class=\"card-subtitle mb-2 text-secondary letter-spacing-01\">NEW COLLECTION</h6>
                    <h3 class=\"card-title fs-34 lh-129\" style=\"max-width: 310px\">Intensive Glow C+ Serum
                    </h3>
                    <div class=\"mt-4\">
                        <a href=\"#\"
                            class=\"fs-16 font-weight-600 btn text-secondary hover-white bg-white bg-hover-secondary shadow-1\">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-6\">
            <div class=\"card border-0 banner banner-01 hover-zoom-in hover-shine\" data-animate=\"fadeInUp\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url(";
        // line 395
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-02.jpg");
        echo ");     box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 50%);\"></div>
                <div class=\"card-img-overlay d-inline-flex flex-column p-6 p-md-8\">
                    <h3 class=\"card-title fs-34 lh-129 mb-2\">25% off Everything</h3>
                    <p class=\"card-text text-secondary font-weight-500\" style=\"max-width: 236px;\">
                        Makeup with extended range in colors for every human.
                    </p>
                    <div class=\"mt-2\">
                        <a href=\"shop-page-01.html\"
                            class=\"fs-16 font-weight-600 btn text-secondary hover-white bg-white bg-hover-secondary shadow-1\">Shop
                            Sale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"pt-md-11 pt-9\">
    <div class=\"container container-xl\">
        <h2 class=\"text-center mb-3\" data-animate=\"fadeInUp\">Our Featured Products</h2>
        <p class=\"mb-9 fs-18 text-center\" data-animate=\"fadeInUp\">Get the skin you want to feel</p>
        <div class=\"slick-slider mx-n2\"
            data-slick-options='{\"slidesToShow\": 4,\"dots\":false,\"arrows\":true,\"responsive\":[{\"breakpoint\": 1368,\"settings\": {\"arrows\":false,\"dots\":true}},{\"breakpoint\": 1200,\"settings\": {\"slidesToShow\":3,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"arrows\":false,\"dots\":true}}]}'>
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"";
        // line 421
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-01.jpg");
        echo "\" alt=\"Facial cleanser\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                                <span class=\"badge badge-primary\">-20%</span>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span
                                class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"";
        // line 485
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-02.jpg");
        echo "\" alt=\"Bio-shroom Rejuvenating Serum\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"";
        // line 546
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-03.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                                <span class=\"badge badge-warning\">New</span>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"";
        // line 608
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-04.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                                <span class=\"badge badge-primary\">-20%</span>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span
                                class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"";
        // line 672
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-05.jpg");
        echo "\" alt=\"Facial cleanser\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
    </section>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 672,  713 => 608,  648 => 546,  584 => 485,  517 => 421,  488 => 395,  469 => 379,  399 => 312,  332 => 248,  267 => 186,  203 => 125,  141 => 66,  121 => 49,  115 => 45,  100 => 36,  87 => 25,  82 => 22,  80 => 21,  77 => 20,  71 => 17,  67 => 16,  63 => 14,  61 => 13,  55 => 10,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slick-slider slider mx-0\"
data-slick-options='{\"slidesToShow\": 1,\"infinite\":true,\"autoplay\":true,\"dots\":true,\"arrows\":false,\"fade\":false,\"cssEase\":\"ease-in-out\",\"speed\":600}'>


{% for slide in slider.slides.slideShows.slide_show_content %}


<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url({{slide.slide_image|media}})\">

        <div class=\"container container-xl pt-6 pb-7 col-md-5\">
            {% if (slide.slide_title or slide.slide_description) %}
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\"></p>
                <h1 class=\"mb-4 fs-56 lh-128\">{{slide.slide_title}}</h1>
                <p class=\"fs-18 lh-166 mb-7\" style=\"max-width: 454px\">{{slide.slide_description}}</p>
            </div>
            {% endif %}

            {% if slide.slide_link != '' %}
            <a href=\"shop-page-04.html\" class=\"btn btn-secondary rounded bg-hover-primary border-0\"
                data-animate=\"fadeInUp\">Shop Now</a>
            {% endif %}
        </div>
        <div class=\"col-md-7\">
            <style>
                #child-img{

                }
                #child-img1{

                }
            </style>
            <!-- <div id=\"child-img\">
                <img id=\"child-img1\" src=\"{{slide.Child_Image|media}}\" alt=\"\">
            </div> -->
                
           
        </div>
    </div>
</div>

{% endfor %}

<!--
<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url({{'assets/images/bg-slider-02.jpg'|theme}});\">
        <div class=\"container container-xl pt-6 pb-7\">
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\">New collection</p>
                <h1 class=\"mb-4 fs-56 lh-128\">Get The Perfectly <br>
                    Hydrated Skin</h1>
                <p class=\"fs-18 lh-166 mb-7\" style=\"max-width: 454px\">Made using clean, non-toxic
                    ingredients, our products are designed for
                    everyone.</p>
            </div>
            <a href=\"shop-page-04.html\" class=\"btn btn-secondary rounded bg-hover-primary border-0\"
                data-animate=\"fadeInUp\">Shop Now</a>
        </div>
    </div>
</div>
<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url({{'assets/images/bg-slider-03.jpg'|theme}});\">
        <div class=\"container container-xl pt-6 pb-7\">
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\">Get the glow</p>
                <h1 class=\"mb-4 fs-56 lh-128\">Be Your<br>
                    Kind of Beauty</h1>
                <p class=\"fs-18 lh-166 mb-7\" style=\"max-width: 454px\">Made using clean, non-toxic
                    ingredients, our products are designed for
                    everyone.</p>
            </div>
            <a href=\"shop-page-04.html\" class=\"btn btn-secondary rounded bg-hover-primary border-0\"
                data-animate=\"fadeInUp\">Shop Now</a>
        </div>
    </div>
</div>
-->
</section>
<section class=\"pt-md-11 pt-9\">
<div class=\"container container-xl\">
    <h2 class=\"text-center mb-3\" data-animate=\"fadeInUp\">Our Featured Products</h2>
    <p class=\"mb-9 fs-18 text-center\" data-animate=\"fadeInUp\">Get the skin you want to feel</p>
    <div class=\"slick-slider mx-n2\"
        data-slick-options='{\"slidesToShow\": 4,\"dots\":false,\"arrows\":true,\"responsive\":[{\"breakpoint\": 1368,\"settings\": {\"arrows\":false,\"dots\":true}},{\"breakpoint\": 1200,\"settings\": {\"slidesToShow\":3,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"arrows\":false,\"dots\":true}}]}'>
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"https://www.siogyumolcs.hu/assets/img/img-index-category-hover.jpg\" alt=\"Facial cleanser\" style=\"opacity: 0;
                    transition: opacity .4s;\">
                    <img src=\"https://www.siogyumolcs.hu/storage/categories/JxmHLTnGfur1tCSPOAGCS72GlfC08U6yGFHst2dg/category_small.png\" alt=\"Facial cleanser\">
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span
                            class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
        <!-- <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"{{'assets/images/product-02.jpg'|theme}}\" alt=\"Bio-shroom Rejuvenating Serum\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a></h2>
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
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"{{'assets/images/product-03.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                            <span class=\"badge badge-warning\">New</span>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"{{'assets/images/product-04.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                            <span class=\"badge badge-primary\">-20%</span>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span
                            class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
        <div class=\"box\">
            <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                <div class=\"position-relative\">
                    <img src=\"{{'assets/images/product-05.jpg'|theme}}\" alt=\"Facial cleanser\">
                    <div class=\"card-img-overlay d-flex p-3\">
                        <div>
                        </div>
                        <div class=\"my-auto w-100 content-change-vertical\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                    <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                    <svg class=\"icon icon-eye-light fs-24\">
                                        <use xlink:href=\"#icon-eye-light\"></use>
                                    </svg>
                                </span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                <svg class=\"icon icon-star-light fs-24\">
                                    <use xlink:href=\"#icon-star-light\"></use>
                                </svg>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                    <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"card-body pt-4 text-center\">
                    <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                        <span>\$29.00</span>
                    </p>
                    <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                            href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
        </div> -->
    </div>
</div>
</section>
<section class=\"pt-9 pt-lg-10\">
<div class=\" \"  >
    <div class=\"row\">
        <div class=\"col-12 col-lg-6 mb-6 mb-lg-0\">
            <div class=\"card border-0 banner banner-01 hover-zoom-in hover-shine\" data-animate=\"fadeInUp\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url({{'assets/images/banner-01.jpg'|theme}});    box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 50%); \" ></div>
                <div class=\"card-img-overlay d-inline-flex flex-column p-6 p-md-8\">
                    <h6 class=\"card-subtitle mb-2 text-secondary letter-spacing-01\">NEW COLLECTION</h6>
                    <h3 class=\"card-title fs-34 lh-129\" style=\"max-width: 310px\">Intensive Glow C+ Serum
                    </h3>
                    <div class=\"mt-4\">
                        <a href=\"#\"
                            class=\"fs-16 font-weight-600 btn text-secondary hover-white bg-white bg-hover-secondary shadow-1\">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-lg-6\">
            <div class=\"card border-0 banner banner-01 hover-zoom-in hover-shine\" data-animate=\"fadeInUp\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url({{'assets/images/banner-02.jpg'|theme}});     box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 50%);\"></div>
                <div class=\"card-img-overlay d-inline-flex flex-column p-6 p-md-8\">
                    <h3 class=\"card-title fs-34 lh-129 mb-2\">25% off Everything</h3>
                    <p class=\"card-text text-secondary font-weight-500\" style=\"max-width: 236px;\">
                        Makeup with extended range in colors for every human.
                    </p>
                    <div class=\"mt-2\">
                        <a href=\"shop-page-01.html\"
                            class=\"fs-16 font-weight-600 btn text-secondary hover-white bg-white bg-hover-secondary shadow-1\">Shop
                            Sale</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"pt-md-11 pt-9\">
    <div class=\"container container-xl\">
        <h2 class=\"text-center mb-3\" data-animate=\"fadeInUp\">Our Featured Products</h2>
        <p class=\"mb-9 fs-18 text-center\" data-animate=\"fadeInUp\">Get the skin you want to feel</p>
        <div class=\"slick-slider mx-n2\"
            data-slick-options='{\"slidesToShow\": 4,\"dots\":false,\"arrows\":true,\"responsive\":[{\"breakpoint\": 1368,\"settings\": {\"arrows\":false,\"dots\":true}},{\"breakpoint\": 1200,\"settings\": {\"slidesToShow\":3,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"arrows\":false,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"arrows\":false,\"dots\":true}}]}'>
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"{{'assets/images/product-01.jpg'|theme}}\" alt=\"Facial cleanser\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                                <span class=\"badge badge-primary\">-20%</span>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span
                                class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"{{'assets/images/product-02.jpg'|theme}}\" alt=\"Bio-shroom Rejuvenating Serum\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"{{'assets/images/product-03.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                                <span class=\"badge badge-warning\">New</span>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"{{'assets/images/product-04.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                                <span class=\"badge badge-primary\">-20%</span>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span
                                class=\"fs-13 font-weight-500 text-decoration-through text-body pr-1\">\$39.00</span>
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a></h2>
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
            <div class=\"box\">
                <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                    <div class=\"position-relative\">
                        <img src=\"{{'assets/images/product-05.jpg'|theme}}\" alt=\"Facial cleanser\">
                        <div class=\"card-img-overlay d-flex p-3\">
                            <div>
                            </div>
                            <div class=\"my-auto w-100 content-change-vertical\">
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"View products\"
                                    class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                        <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Quick view\"
                                    class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                    <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                        <svg class=\"icon icon-eye-light fs-24\">
                                            <use xlink:href=\"#icon-eye-light\"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Add to wishlist\"
                                    class=\"add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                    <svg class=\"icon icon-star-light fs-24\">
                                        <use xlink:href=\"#icon-star-light\"></use>
                                    </svg>
                                </a>
                                <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Compare\"
                                    class=\"add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle\">
                                    <svg class=\"icon icon-arrows-left-right-light fs-24\">
                                        <use xlink:href=\"#icon-arrows-left-right-light\"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body pt-4 text-center\">
                        <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                            <span>\$29.00</span>
                        </p>
                        <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                href=\"product-detail-01.html\">Facial cleanser</a></h2>
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
    </section>", "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "if" => 13);
        static $filters = array("media" => 10, "escape" => 16, "theme" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['media', 'escape', 'theme'],
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

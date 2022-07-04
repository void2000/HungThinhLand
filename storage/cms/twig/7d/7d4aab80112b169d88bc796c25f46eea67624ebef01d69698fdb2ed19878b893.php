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

/* C:\xampp\htdocs\olmish\HungThinhLand/themes/demo/pages/home.htm */
class __TwigTemplate_6bb4bc64eb7a849b45bc0f6c1d475e581e689f275184cc67d81151491eca100b extends \Twig\Template
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
data-slick-options='{\"slidesToShow\": 1,\"infinite\":true,\"autoplay\":true,\"dots\":false,\"arrows\":false,\"fade\":true,\"cssEase\":\"ease-in-out\",\"speed\":600}'>
<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url(";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-slider-01.jpg");
        echo ");\">
        <div class=\"container container-xl pt-6 pb-7\">
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\">Essenstial Items</p>
                <h1 class=\"mb-4 fs-56 lh-128\">Beauty Inspired <br>
                    by Real Life</h1>
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
        // line 22
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
        // line 39
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
        // line 64
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
        // line 128
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
        // line 189
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
        // line 251
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
        // line 315
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
</section>
<section class=\"pt-9 pt-lg-10\">
<div class=\"container container-xl\">
    <div class=\"row\">
        <div class=\"col-12 col-lg-6 mb-6 mb-lg-0\">
            <div class=\"card border-0 banner banner-01 hover-zoom-in hover-shine\" data-animate=\"fadeInUp\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url(";
        // line 382
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-01.jpg");
        echo ");\"></div>
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
        // line 398
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-02.jpg");
        echo ");\"></div>
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
<section class=\"pt-11 pb-xl-9 pb-5\">
<div class=\"container container-xl\">
    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-01 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-01\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Free Shipping</h3>
                    <p class=\"cart-text fs-18 mb-0\">Free Shipping for orders over \$130</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-02 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-02\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Returns</h3>
                    <p class=\"cart-text fs-18 mb-0\">Within 30 days for an exchange.</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-03 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-03\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Online Support</h3>
                    <p class=\"cart-text fs-18 mb-0\">24 hours a day, 7 days a week</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-04 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-04\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Flexible Payment</h3>
                    <p class=\"cart-text fs-18 mb-0\">Pay with Multiple Credit Cards</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"py-lg-13 py-11\" style=\"background-color: #edf1f0\">
<div class=\"container container-xl\">
    <h2 class=\"text-center mb-8\">As seen in</h2>
    <div class=\"slick-slider\"
        data-slick-options='{\"slidesToShow\": 3,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 992,\"settings\": {\"slidesToShow\": 2,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"dots\":true}}]}'>
        <div class=\"box\">
            <div class=\"card border-0 bg-transparent\" data-animate=\"fadeInUp\">
                <div class=\"card-body px-3 py-0 text-center\">
                    <img src=\"";
        // line 485
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-03.png");
        echo "\" alt=\"testimonial 03\" class=\"mb-3 w-auto mx-auto\">
                    <p class=\"card-text fs-20 font-weight-600 font-weight-600 text-secondary mx-xl-6\">
                        “Also the customer service is phenomenal. I would purchase again.“
                    </p>
                </div>
            </div>
        </div>
        <div class=\"box\">
            <div class=\"card border-0 bg-transparent\" data-animate=\"fadeInUp\">
                <div class=\"card-body px-3 py-0 text-center\">
                    <img src=\"";
        // line 495
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-02.png");
        echo "\" alt=\"testimonial 02\" class=\"mb-3 w-auto mx-auto\">
                    <p class=\"card-text fs-20 font-weight-600 font-weight-600 text-secondary mx-xl-6\">
                        “Great product line. Very attentive staff to deal with.“
                    </p>
                </div>
            </div>
        </div>
        <div class=\"box\">
            <div class=\"card border-0 bg-transparent\" data-animate=\"fadeInUp\">
                <div class=\"card-body px-3 py-0 text-center\">
                    <img src=\"";
        // line 505
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-01.png");
        echo "\" alt=\"testimonial 01\" class=\"mb-3 w-auto mx-auto\">
                    <p class=\"card-text fs-20 font-weight-600 font-weight-600 text-secondary mx-xl-6\">
                        “Looking to affordably upgrade your everyday dinnerware? Look no further than
                        e.Space“
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
<div class=\"container container-xl\">
    <div class=\"row mt-10 mt-lg-13 mb-6\">
        <div class=\"col-12 text-center\">
            <h2 class=\"mb-3\" data-animate=\"fadeInUp\">Customer Favorite Beauty Essentials</h2>
            <p class=\"fs-18 mx-auto lh-166\" style=\"max-width: 462px\" data-animate=\"fadeInUp\">Made using
                clean, non-toxic ingredients, our
                products are
                designed for everyone.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-5 mb-8 mb-lg-0\">
            <div class=\"card border-0 hover-shine hover-zoom-in banner banner-04\" data-animate=\"fadeIn\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url(";
        // line 531
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banner-33.jpg");
        echo ");\"></div>
                <div class=\"card-img-overlay d-inline-flex flex-column justify-content-end p-8\">
                    <h2 class=\"mb-3 text-white\">Empower Yourself</h2>
                    <p class=\"card-title fs-18 text-white mb-6\">Get the skin you want to feel</p>
                    <div>
                        <a href=\"#\"
                            class=\"fs-16 font-weight-600 btn text-secondary hover-white bg-white bg-hover-secondary shadow-1\">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-7\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 548
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-01.jpg");
        echo "\" alt=\"Facial cleanser\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                    <span class=\"badge badge-primary\">-20%</span>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span
                                    class=\"fs-13 font-weight-500 text-decoration-through text-body\">\$39.00</span>
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Facial cleanser</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 621
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-02.jpg");
        echo "\" alt=\"Bio-shroom Rejuvenating Serum\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 691
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-06.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 761
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-03.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 831
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-07.jpg");
        echo "\" alt=\"Facial cleanser\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                    <span class=\"badge badge-primary\">-20%</span>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span
                                    class=\"fs-13 font-weight-500 text-decoration-through text-body\">\$39.00</span>
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Facial cleanser</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 904
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/product-08.jpg");
        echo "\" alt=\"Coffee Bean Caffeine Eye Cream\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                    <span class=\"badge badge-warning\">New</span>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"pt-xxl-15 pb-lg-13 pt-6 pb-9\">
<div class=\"container container-xl\">
    <h2 class=\"text-center mb-3\" data-animate=\"fadeInUp\">More to Discover</h2>
    <p class=\"mb-9 fs-18 text-center mx-auto\" style=\"max-width: 530px\" data-animate=\"fadeInUp\">Our bundles
        were designed to conveniently package your tanning essentials while saving you money.</p>
    <div class=\"row\">
        <div class=\"col-md-6 mb-6 mb-md-0\">
            <div class=\"card border-0 text-center hover-shine\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 985
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image-box-10.jpg");
        echo "\" alt=\"Summer Collection\">
                <div class=\"card-body px-0 pt-6 pb-0\">
                    <h3 class=\"fs-24 mb-2\"><a href=\"#\" class=\"text-decoration-none\">Summer Collection</a>
                    </h3>
                    <a href=\"shop-page-01.html\" class=\"btn btn-link text-secondary\">Shop now<i
                            class=\"far fa-arrow-right fs-12 pl-1\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-6 mb-md-0\">
            <div class=\"card border-0 text-center hover-shine\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 996
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image-box-12.jpg");
        echo "\" alt=\"From Our Blog\">
                <div class=\"card-body px-0 pt-6 pb-0\">
                    <h3 class=\"fs-24 mb-2\"><a href=\"#\" class=\"text-decoration-none\">From Our Blog</a></h3>
                    <a href=\"blog-grid.html\" class=\"btn btn-link text-secondary\">Read more<i
                            class=\"far fa-arrow-right fs-12 pl-1\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"pb-6\">
<div class=\"container-fluid\">
    <div class=\"slick-slider\"
        data-slick-options='{\"slidesToShow\": 5,\"infinite\":false,\"autoplay\":true,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 1366,\"settings\": {\"slidesToShow\":5}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":4}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 3}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 2}}]}'>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 1013
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-01.jpg");
        echo "\" alt=\"Instagram 01\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 1018
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-02.jpg");
        echo "\" alt=\"Instagram 02\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 1023
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-03.jpg");
        echo "\" alt=\"Instagram 03\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 1028
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-04.jpg");
        echo "\" alt=\"Instagram 04\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"";
        // line 1033
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-05.jpg");
        echo "\" alt=\"Instagram 05\">
            </a>
        </div>
    </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\olmish\\HungThinhLand/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1151 => 1033,  1143 => 1028,  1135 => 1023,  1127 => 1018,  1119 => 1013,  1099 => 996,  1085 => 985,  1001 => 904,  925 => 831,  852 => 761,  779 => 691,  706 => 621,  630 => 548,  610 => 531,  581 => 505,  568 => 495,  555 => 485,  465 => 398,  446 => 382,  376 => 315,  309 => 251,  244 => 189,  180 => 128,  113 => 64,  85 => 39,  65 => 22,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slick-slider slider mx-0\"
data-slick-options='{\"slidesToShow\": 1,\"infinite\":true,\"autoplay\":true,\"dots\":false,\"arrows\":false,\"fade\":true,\"cssEase\":\"ease-in-out\",\"speed\":600}'>
<div class=\"box px-0\">
    <div class=\"bg-img-cover-center py-12 py-lg-17\"
        style=\"background-image: url({{'assets/images/bg-slider-01.jpg'|theme}});\">
        <div class=\"container container-xl pt-6 pb-7\">
            <div data-animate=\"fadeInDown\">
                <p class=\"text-secondary mb-5 text-uppercase font-weight-600\">Essenstial Items</p>
                <h1 class=\"mb-4 fs-56 lh-128\">Beauty Inspired <br>
                    by Real Life</h1>
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
</section>
<section class=\"pt-9 pt-lg-10\">
<div class=\"container container-xl\">
    <div class=\"row\">
        <div class=\"col-12 col-lg-6 mb-6 mb-lg-0\">
            <div class=\"card border-0 banner banner-01 hover-zoom-in hover-shine\" data-animate=\"fadeInUp\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url({{'assets/images/banner-01.jpg'|theme}});\"></div>
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
                    style=\"background-image: url({{'assets/images/banner-02.jpg'|theme}});\"></div>
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
<section class=\"pt-11 pb-xl-9 pb-5\">
<div class=\"container container-xl\">
    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-01 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-01\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Free Shipping</h3>
                    <p class=\"cart-text fs-18 mb-0\">Free Shipping for orders over \$130</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-02 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-02\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Returns</h3>
                    <p class=\"cart-text fs-18 mb-0\">Within 30 days for an exchange.</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-03 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-03\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Online Support</h3>
                    <p class=\"cart-text fs-18 mb-0\">24 hours a day, 7 days a week</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6\">
            <div class=\"card bg-transparent border-0 align-items-center text-center mb-xl-0 mb-6\"
                data-animate=\"fadeInUp\">
                <div class=\"card-img\">
                    <svg class=\"icon icon-box-04 fs-70 text-primary\">
                        <use xlink:href=\"#icon-box-04\"></use>
                    </svg>
                </div>
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title fs-20 mb-2\">Flexible Payment</h3>
                    <p class=\"cart-text fs-18 mb-0\">Pay with Multiple Credit Cards</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"py-lg-13 py-11\" style=\"background-color: #edf1f0\">
<div class=\"container container-xl\">
    <h2 class=\"text-center mb-8\">As seen in</h2>
    <div class=\"slick-slider\"
        data-slick-options='{\"slidesToShow\": 3,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 992,\"settings\": {\"slidesToShow\": 2,\"dots\":true}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"dots\":true}}]}'>
        <div class=\"box\">
            <div class=\"card border-0 bg-transparent\" data-animate=\"fadeInUp\">
                <div class=\"card-body px-3 py-0 text-center\">
                    <img src=\"{{'assets/images/testimonial-03.png'|theme}}\" alt=\"testimonial 03\" class=\"mb-3 w-auto mx-auto\">
                    <p class=\"card-text fs-20 font-weight-600 font-weight-600 text-secondary mx-xl-6\">
                        “Also the customer service is phenomenal. I would purchase again.“
                    </p>
                </div>
            </div>
        </div>
        <div class=\"box\">
            <div class=\"card border-0 bg-transparent\" data-animate=\"fadeInUp\">
                <div class=\"card-body px-3 py-0 text-center\">
                    <img src=\"{{'assets/images/testimonial-02.png'|theme}}\" alt=\"testimonial 02\" class=\"mb-3 w-auto mx-auto\">
                    <p class=\"card-text fs-20 font-weight-600 font-weight-600 text-secondary mx-xl-6\">
                        “Great product line. Very attentive staff to deal with.“
                    </p>
                </div>
            </div>
        </div>
        <div class=\"box\">
            <div class=\"card border-0 bg-transparent\" data-animate=\"fadeInUp\">
                <div class=\"card-body px-3 py-0 text-center\">
                    <img src=\"{{'assets/images/testimonial-01.png'|theme}}\" alt=\"testimonial 01\" class=\"mb-3 w-auto mx-auto\">
                    <p class=\"card-text fs-20 font-weight-600 font-weight-600 text-secondary mx-xl-6\">
                        “Looking to affordably upgrade your everyday dinnerware? Look no further than
                        e.Space“
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
<div class=\"container container-xl\">
    <div class=\"row mt-10 mt-lg-13 mb-6\">
        <div class=\"col-12 text-center\">
            <h2 class=\"mb-3\" data-animate=\"fadeInUp\">Customer Favorite Beauty Essentials</h2>
            <p class=\"fs-18 mx-auto lh-166\" style=\"max-width: 462px\" data-animate=\"fadeInUp\">Made using
                clean, non-toxic ingredients, our
                products are
                designed for everyone.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-5 mb-8 mb-lg-0\">
            <div class=\"card border-0 hover-shine hover-zoom-in banner banner-04\" data-animate=\"fadeIn\">
                <div class=\"card-img bg-img-cover-center\"
                    style=\"background-image: url({{'assets/images/banner-33.jpg'|theme}});\"></div>
                <div class=\"card-img-overlay d-inline-flex flex-column justify-content-end p-8\">
                    <h2 class=\"mb-3 text-white\">Empower Yourself</h2>
                    <p class=\"card-title fs-18 text-white mb-6\">Get the skin you want to feel</p>
                    <div>
                        <a href=\"#\"
                            class=\"fs-16 font-weight-600 btn text-secondary hover-white bg-white bg-hover-secondary shadow-1\">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-7\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"{{'assets/images/product-01.jpg'|theme}}\" alt=\"Facial cleanser\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                    <span class=\"badge badge-primary\">-20%</span>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span
                                    class=\"fs-13 font-weight-500 text-decoration-through text-body\">\$39.00</span>
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Facial cleanser</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"{{'assets/images/product-02.jpg'|theme}}\" alt=\"Bio-shroom Rejuvenating Serum\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Bio-shroom Rejuvenating Serum</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"{{'assets/images/product-06.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"{{'assets/images/product-03.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"{{'assets/images/product-07.jpg'|theme}}\" alt=\"Facial cleanser\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                    <span class=\"badge badge-primary\">-20%</span>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span
                                    class=\"fs-13 font-weight-500 text-decoration-through text-body\">\$39.00</span>
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Facial cleanser</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-3\">
                    <div class=\"card border-0 product\" data-animate=\"fadeInUp\">
                        <div class=\"position-relative\">
                            <img src=\"{{'assets/images/product-08.jpg'|theme}}\" alt=\"Coffee Bean Caffeine Eye Cream\">
                            <div class=\"card-img-overlay d-flex p-3\">
                                <div>
                                    <span class=\"badge badge-warning\">New</span>
                                </div>
                                <div class=\"my-auto w-100 content-change-vertical\">
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"View products\"
                                        class=\"add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2\">
                                        <svg class=\"icon icon-shopping-bag-open-light fs-24\">
                                            <use xlink:href=\"#icon-shopping-bag-open-light\"></use>
                                        </svg>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Quick view\"
                                        class=\"preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none\">
                                        <span data-toggle=\"modal\" data-target=\"#quick-view\">
                                            <svg class=\"icon icon-eye-light fs-24\">
                                                <use xlink:href=\"#icon-eye-light\"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\"
                                        title=\"Add to wishlist\"
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
                        <div class=\"card-body px-0 pt-4 text-center\">
                            <p class=\"card-text font-weight-bold fs-16 mb-1 text-secondary\">
                                <span>\$29.00</span>
                            </p>
                            <h2 class=\"card-title fs-15 font-weight-500 mb-2\"><a
                                    href=\"product-detail-01.html\">Coffee Bean Caffeine Eye Cream</a>
                            </h2>
                            <div class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <ul class=\"list-inline mb-0 lh-1\">
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                    <li class=\"list-inline-item fs-12 text-primary mr-0\"><i
                                            class=\"fas fa-star\"></i>
                                    </li>
                                </ul>
                                <span class=\"card-text fs-14 font-weight-400 pl-2 lh-1\">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"pt-xxl-15 pb-lg-13 pt-6 pb-9\">
<div class=\"container container-xl\">
    <h2 class=\"text-center mb-3\" data-animate=\"fadeInUp\">More to Discover</h2>
    <p class=\"mb-9 fs-18 text-center mx-auto\" style=\"max-width: 530px\" data-animate=\"fadeInUp\">Our bundles
        were designed to conveniently package your tanning essentials while saving you money.</p>
    <div class=\"row\">
        <div class=\"col-md-6 mb-6 mb-md-0\">
            <div class=\"card border-0 text-center hover-shine\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/image-box-10.jpg'|theme}}\" alt=\"Summer Collection\">
                <div class=\"card-body px-0 pt-6 pb-0\">
                    <h3 class=\"fs-24 mb-2\"><a href=\"#\" class=\"text-decoration-none\">Summer Collection</a>
                    </h3>
                    <a href=\"shop-page-01.html\" class=\"btn btn-link text-secondary\">Shop now<i
                            class=\"far fa-arrow-right fs-12 pl-1\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-6 mb-md-0\">
            <div class=\"card border-0 text-center hover-shine\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/image-box-12.jpg'|theme}}\" alt=\"From Our Blog\">
                <div class=\"card-body px-0 pt-6 pb-0\">
                    <h3 class=\"fs-24 mb-2\"><a href=\"#\" class=\"text-decoration-none\">From Our Blog</a></h3>
                    <a href=\"blog-grid.html\" class=\"btn btn-link text-secondary\">Read more<i
                            class=\"far fa-arrow-right fs-12 pl-1\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class=\"pb-6\">
<div class=\"container-fluid\">
    <div class=\"slick-slider\"
        data-slick-options='{\"slidesToShow\": 5,\"infinite\":false,\"autoplay\":true,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 1366,\"settings\": {\"slidesToShow\":5}},{\"breakpoint\": 992,\"settings\": {\"slidesToShow\":4}},{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 3}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 2}}]}'>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/instagram-01.jpg'|theme}}\" alt=\"Instagram 01\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/instagram-02.jpg'|theme}}\" alt=\"Instagram 02\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/instagram-03.jpg'|theme}}\" alt=\"Instagram 03\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/instagram-04.jpg'|theme}}\" alt=\"Instagram 04\">
            </a>
        </div>
        <div class=\"box\">
            <a href=\"#\" class=\"hover-zoom-in hover-shine d-block\" data-animate=\"fadeInUp\">
                <img src=\"{{'assets/images/instagram-05.jpg'|theme}}\" alt=\"Instagram 05\">
            </a>
        </div>
    </div>
</div>
</section>", "C:\\xampp\\htdocs\\olmish\\HungThinhLand/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
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

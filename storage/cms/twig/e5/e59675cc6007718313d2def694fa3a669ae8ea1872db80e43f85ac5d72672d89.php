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

/* D:\xampp\htdocs\HungThinhLand/themes/demo/partials/site/header.htm */
class __TwigTemplate_7d07dd10ce9a8f98686cd06ea83f795be059e9b06a3465f80bbc82601050fe6e extends \Twig\Template
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
        echo "<div class=\"sticky-area bg-white\">
    <div class=\"container container-xxl\">
        <nav class=\"navbar navbar-expand-xl px-0 d-block\">
            <div class=\"d-none d-xl-block\">
                <div class=\"d-flex align-items-center flex-nowrap\">
                    <div class=\"w-50\">
                        <div
                            class=\"d-flex mt-3 mt-xl-0 align-items-center w-100 justify-content-start ml-xxl-12\">
                            <a class=\"navbar-brand mw-184px d-inline-block py-0\" href=\"index.html\">
                                <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\"  width=\"93px\" alt=\"olmish\">
                            </a>
                        </div>
                    </div>
                    <div class=\"mx-auto flex-shrink-0 px-10\">
                        <ul class=\"navbar-nav hover-menu main-menu px-0 mx-xl-n5\">
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-home dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"index.html\"
                                    data-toggle=\"dropdown\">
                                    Home
                                    <span class=\"caret\"></span>
                                </a>
                                <div class=\"dropdown-menu x-animated x-fadeInUp pt-3 pb-0 pb-xl-3 mw-260px\">
                                    <div class=\"row px-7\">
                                        <div class=\"col-6\">
                                            <ul class=\"p-0\">
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-01.html\">
                                                        Home 01
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-02.html\">
                                                        Home 02
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-03.html\">
                                                        Home 03
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-04.html\">
                                                        Home 04
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-05.html\">
                                                        Home 05
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-06.html\">
                                                        Home 06
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-07.html\">
                                                        Home 07
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-08.html\">
                                                        Home 08
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-09.html\">
                                                        Home 09
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-6\">
                                            <ul class=\"p-0\">
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-10.html\">
                                                        Home 10
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-11.html\">
                                                        Home 11
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-12.html\">
                                                        Home 12
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-13.html\">
                                                        Home 13
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-14.html\">
                                                        Home 14
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-15.html\">
                                                        Home 15
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-16.html\">
                                                        Home 16
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-17.html\">
                                                        Home 17
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-18.html\">
                                                        Home 18
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-shop dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"store.html\"
                                    data-toggle=\"dropdown\">
                                    Shop
                                    <span class=\"caret\"></span>
                                </a>
                                <div
                                    class=\"dropdown-menu dropdown-menu-xl px-0 pb-10 pt-5 dropdown-menu-listing overflow-hidden x-animated x-fadeInUp\">
                                    <div class=\"container container-xxl px-xxl-9 d-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Shop Pages
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-01.html\">
                                                        Shop Layout <sup>V1</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-02.html\">
                                                        Shop Layout <sup>V2</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-03.html\">
                                                        Shop Layout <sup>V3</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-04.html\">
                                                        Shop Layout <sup>V4</sup>
                                                    </a>
                                                </div>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-05.html\">
                                                        Shop Layout <sup>V5</sup>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Product Page
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-01.html\">
                                                        Product Detail <sup>V1</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-02.html\">
                                                        Product Detail <sup>V2</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-03.html\">
                                                        Product Detail <sup>V3</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-04.html\">
                                                        Product Detail <sup>V4</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-05.html\">
                                                        Product Detail <sup>V5</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-06.html\">
                                                        Product Detail <sup>V6</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-07.html\">
                                                        Product Detail <sup>V7</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-08.html\">
                                                        Product Detail <sup>V8</sup>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Product Type
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-04.html\">
                                                        Product Simple
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-05.html\">
                                                        Product Variable
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-06.html\">
                                                        Product Time Limit
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-08.html\">
                                                        Product Grouped
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Shop Pages
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shopping-cart.html\">
                                                        Shopping Cart
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"compare.html\">
                                                        Compare
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"wishlist.html\">
                                                        Wishlist
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"checkout.html\">
                                                        Checkout
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col h-100\">
                                                <div class=\"card border-0 mt-2\">
                                                    <img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bg-mega-menu.jpg");
        echo "\" alt=\"bg mega menu\"
                                                        class=\"card-img\">
                                                    <div
                                                        class=\"card-img-overlay d-flex flex-column pt-xxl-7 pb-3 px-xxl-6\">
                                                        <p
                                                            class=\"text-secondary letter-spacing-01 font-weight-600 mb-2 text-uppercase\">
                                                            new collection
                                                        </p>
                                                        <h3 class=\"fs-34\">Special <br>
                                                            Offer</h3>
                                                        <div class=\"mt-auto\">
                                                            <a href=\"shop-page-01.html\"
                                                                class=\"btn btn-white hover-white bg-hover-secondary border-hover-secondary\">Shop
                                                                Sale</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-pages dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" data-toggle=\"dropdown\">
                                    Pages
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp\">
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            About Us
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"about-us-01.html\">About Us 01</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"about-us-02.html\">About Us 02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            Contact us
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"contact-us-01.html\">Contact Us
                                                    01</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"contact-us-02.html\">Contact Us
                                                    02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-item\">
                                        <a class=\"dropdown-link\" href=\"faqs.html\">
                                            FAQs
                                        </a>
                                    </li>
                                    <li class=\"dropdown-item\">
                                        <a class=\"dropdown-link\" href=\"find-a-store.html\">
                                            Store
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-blog dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" data-toggle=\"dropdown\">
                                    Blog
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp\">
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            Blog Listing
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-grid.html\">Blog Grid</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-grid-sidebar.html\">Blog Grid
                                                    Sidebar</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-masonry.html\">Blog
                                                    Masonsy</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-list.html\">Blog List</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-classic.html\">Blog
                                                    Classic</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            Blog Detail
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-detail-01.html\">Blog Detail
                                                    01</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-detail-02.html\">Blog Detail
                                                    02</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-docs dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" data-toggle=\"dropdown\">
                                    Docs
                                    <span class=\"caret\"></span>
                                </a>
                                <div class=\"dropdown-menu px-0 pt-3 dropdown-menu-docs x-animated x-fadeInUp\">
                                    <div class=\"dropdown-body\">
                                        <a class=\"dropdown-item py-1\"
                                            href=\"docs/getting-started/dev-environment-setup.html\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-file-alt\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">Documentation</span>
                                                    <small class=\"d-block\">Kick-start customization</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"dropdown-divider m-0\"></div>
                                        <a class=\"dropdown-item py-1\" href=\"docs/content/typography.html\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-layer-group\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">UI Kit<span
                                                            class=\"badge badge-danger ml-2\">50+</span></span>
                                                    <small class=\"d-block\">Flexible components</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"dropdown-divider m-0\"></div>
                                        <a class=\"dropdown-item py-1\"
                                            href=\"docs/getting-started/changelog.html\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-edit\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">Changelog<span
                                                            class=\"badge badge-success ml-2\">v1.1.0</span></span>
                                                    <small class=\"d-block\">Regular updates</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"dropdown-divider m-0\"></div>
                                        <a class=\"dropdown-item py-1\" href=\"../index.htm\" target=\"_blank\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-life-ring\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">Support</span>
                                                    <small class=\"d-block\">https://sp.g5plus.net/</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"w-50\">
                        <div class=\"d-flex align-items-center justify-content-end\">
                            <!-- <a href=\"#search-popup\" data-gtf-mfp=\"true\"
                                data-mfp-options='{\"type\":\"inline\",\"focus\": \"#keyword\",\"mainClass\": \"mfp-search-form mfp-move-from-top mfp-align-top\"}'
                                class=\"nav-search d-flex align-items-center pr-3\">
                                <svg class=\"icon icon-magnifying-glass-light fs-28\">
                                    <use xlink:href=\"#icon-magnifying-glass-light\"></use>
                                </svg>
                            </a> -->
                            <ul
                                class=\"navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link pr-3 py-0\" href=\"#\"    >
                                        <i class=\"fab fa-facebook-f a\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link pr-3 py-0\" href=\"#\"    >
                                        <i class=\"fab fa-instagram a\"></i>
                                    </a>  
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link pr-3 py-0\" href=\"#\"    >
                                        <i class=\"fab fa-youtube a\"></i>
                                    </a>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex align-items-center d-xl-none\">
                <button class=\"navbar-toggler border-0 px-0 canvas-toggle\" type=\"button\" data-canvas=\"true\"
                    data-canvas-options='{\"width\":\"250px\",\"container\":\".sidenav\"}'>
                    <span class=\"fs-24 toggle-icon\"></span>
                </button>
                <div class=\"mx-auto\"><a class=\"navbar-brand mw-184px d-inline-block mr-0 py-5\"
                        href=\"index.html\">
                        <img src=\"";
        // line 501
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-black-02.png");
        echo "\" alt=\"Glowing\">
                    </a></div>
                <a href=\"#search-popup\" data-gtf-mfp=\"true\"
                    data-mfp-options='{\"type\":\"inline\",\"focus\": \"#keyword\",\"mainClass\": \"mfp-search-form mfp-move-from-top mfp-align-top\"}'
                    class=\"nav-search d-flex align-items-center\">
                    <svg class=\"icon icon-magnifying-glass-light fs-28\">
                        <use xlink:href=\"#icon-magnifying-glass-light\"></use>
                    </svg>
                    <span class=\"d-none d-xl-inline-block ml-2 font-weight-500\">Search</span></a>
            </div>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 501,  316 => 273,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sticky-area bg-white\">
    <div class=\"container container-xxl\">
        <nav class=\"navbar navbar-expand-xl px-0 d-block\">
            <div class=\"d-none d-xl-block\">
                <div class=\"d-flex align-items-center flex-nowrap\">
                    <div class=\"w-50\">
                        <div
                            class=\"d-flex mt-3 mt-xl-0 align-items-center w-100 justify-content-start ml-xxl-12\">
                            <a class=\"navbar-brand mw-184px d-inline-block py-0\" href=\"index.html\">
                                <img src=\"{{'assets/images/logo.png'|theme}}\"  width=\"93px\" alt=\"olmish\">
                            </a>
                        </div>
                    </div>
                    <div class=\"mx-auto flex-shrink-0 px-10\">
                        <ul class=\"navbar-nav hover-menu main-menu px-0 mx-xl-n5\">
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-home dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"index.html\"
                                    data-toggle=\"dropdown\">
                                    Home
                                    <span class=\"caret\"></span>
                                </a>
                                <div class=\"dropdown-menu x-animated x-fadeInUp pt-3 pb-0 pb-xl-3 mw-260px\">
                                    <div class=\"row px-7\">
                                        <div class=\"col-6\">
                                            <ul class=\"p-0\">
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-01.html\">
                                                        Home 01
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-02.html\">
                                                        Home 02
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-03.html\">
                                                        Home 03
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-04.html\">
                                                        Home 04
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-05.html\">
                                                        Home 05
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-06.html\">
                                                        Home 06
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-07.html\">
                                                        Home 07
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-08.html\">
                                                        Home 08
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-09.html\">
                                                        Home 09
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=\"col-6\">
                                            <ul class=\"p-0\">
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-10.html\">
                                                        Home 10
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-11.html\">
                                                        Home 11
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-12.html\">
                                                        Home 12
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-13.html\">
                                                        Home 13
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-14.html\">
                                                        Home 14
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-15.html\">
                                                        Home 15
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-16.html\">
                                                        Home 16
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-17.html\">
                                                        Home 17
                                                    </a>
                                                </li>
                                                <li class=\"dropdown-item px-0\">
                                                    <a class=\"dropdown-link\" href=\"home-18.html\">
                                                        Home 18
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-shop dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"store.html\"
                                    data-toggle=\"dropdown\">
                                    Shop
                                    <span class=\"caret\"></span>
                                </a>
                                <div
                                    class=\"dropdown-menu dropdown-menu-xl px-0 pb-10 pt-5 dropdown-menu-listing overflow-hidden x-animated x-fadeInUp\">
                                    <div class=\"container container-xxl px-xxl-9 d-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Shop Pages
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-01.html\">
                                                        Shop Layout <sup>V1</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-02.html\">
                                                        Shop Layout <sup>V2</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-03.html\">
                                                        Shop Layout <sup>V3</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-04.html\">
                                                        Shop Layout <sup>V4</sup>
                                                    </a>
                                                </div>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shop-page-05.html\">
                                                        Shop Layout <sup>V5</sup>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Product Page
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-01.html\">
                                                        Product Detail <sup>V1</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-02.html\">
                                                        Product Detail <sup>V2</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-03.html\">
                                                        Product Detail <sup>V3</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-04.html\">
                                                        Product Detail <sup>V4</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-05.html\">
                                                        Product Detail <sup>V5</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-06.html\">
                                                        Product Detail <sup>V6</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-07.html\">
                                                        Product Detail <sup>V7</sup>
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-08.html\">
                                                        Product Detail <sup>V8</sup>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Product Type
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-04.html\">
                                                        Product Simple
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-05.html\">
                                                        Product Variable
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-06.html\">
                                                        Product Time Limit
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"product-detail-08.html\">
                                                        Product Grouped
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col\">

                                                <h4 class=\"dropdown-header text-secondary fs-18 mb-1 lh-1\">
                                                    Shop Pages
                                                </h4>

                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"shopping-cart.html\">
                                                        Shopping Cart
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"compare.html\">
                                                        Compare
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"wishlist.html\">
                                                        Wishlist
                                                    </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"dropdown-link\" href=\"checkout.html\">
                                                        Checkout
                                                    </a>
                                                </div>
                                            </div>
                                            <div class=\"col h-100\">
                                                <div class=\"card border-0 mt-2\">
                                                    <img src=\"{{'assets/images/bg-mega-menu.jpg'|theme}}\" alt=\"bg mega menu\"
                                                        class=\"card-img\">
                                                    <div
                                                        class=\"card-img-overlay d-flex flex-column pt-xxl-7 pb-3 px-xxl-6\">
                                                        <p
                                                            class=\"text-secondary letter-spacing-01 font-weight-600 mb-2 text-uppercase\">
                                                            new collection
                                                        </p>
                                                        <h3 class=\"fs-34\">Special <br>
                                                            Offer</h3>
                                                        <div class=\"mt-auto\">
                                                            <a href=\"shop-page-01.html\"
                                                                class=\"btn btn-white hover-white bg-hover-secondary border-hover-secondary\">Shop
                                                                Sale</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-pages dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" data-toggle=\"dropdown\">
                                    Pages
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp\">
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            About Us
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"about-us-01.html\">About Us 01</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"about-us-02.html\">About Us 02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            Contact us
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"contact-us-01.html\">Contact Us
                                                    01</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"contact-us-02.html\">Contact Us
                                                    02</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-item\">
                                        <a class=\"dropdown-link\" href=\"faqs.html\">
                                            FAQs
                                        </a>
                                    </li>
                                    <li class=\"dropdown-item\">
                                        <a class=\"dropdown-link\" href=\"find-a-store.html\">
                                            Store
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-blog dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" data-toggle=\"dropdown\">
                                    Blog
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp\">
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            Blog Listing
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-grid.html\">Blog Grid</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-grid-sidebar.html\">Blog Grid
                                                    Sidebar</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-masonry.html\">Blog
                                                    Masonsy</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-list.html\">Blog List</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-classic.html\">Blog
                                                    Classic</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-item dropdown dropright\">
                                        <a class=\"dropdown-link dropdown-toggle\" href=\"#\"
                                            data-toggle=\"dropdown\">
                                            Blog Detail
                                        </a>
                                        <ul
                                            class=\"dropdown-menu dropdown-submenu pt-3 pb-0 pb-xl-3 x-animated x-fadeInLeft\">
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-detail-01.html\">Blog Detail
                                                    01</a>
                                            </li>
                                            <li class=\"dropdown-item\">
                                                <a class=\"dropdown-link\" href=\"blog-detail-02.html\">Blog Detail
                                                    02</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li aria-haspopup=\"true\" aria-expanded=\"false\"
                                class=\"nav-item dropdown-item-docs dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
                                <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" data-toggle=\"dropdown\">
                                    Docs
                                    <span class=\"caret\"></span>
                                </a>
                                <div class=\"dropdown-menu px-0 pt-3 dropdown-menu-docs x-animated x-fadeInUp\">
                                    <div class=\"dropdown-body\">
                                        <a class=\"dropdown-item py-1\"
                                            href=\"docs/getting-started/dev-environment-setup.html\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-file-alt\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">Documentation</span>
                                                    <small class=\"d-block\">Kick-start customization</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"dropdown-divider m-0\"></div>
                                        <a class=\"dropdown-item py-1\" href=\"docs/content/typography.html\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-layer-group\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">UI Kit<span
                                                            class=\"badge badge-danger ml-2\">50+</span></span>
                                                    <small class=\"d-block\">Flexible components</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"dropdown-divider m-0\"></div>
                                        <a class=\"dropdown-item py-1\"
                                            href=\"docs/getting-started/changelog.html\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-edit\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">Changelog<span
                                                            class=\"badge badge-success ml-2\">v1.1.0</span></span>
                                                    <small class=\"d-block\">Regular updates</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"dropdown-divider m-0\"></div>
                                        <a class=\"dropdown-item py-1\" href=\"../index.htm\" target=\"_blank\">
                                            <div class=\"media\">
                                                <div class=\"fs-20 mr-3\">
                                                    <i class=\"fal fa-life-ring\"></i>
                                                </div>
                                                <div class=\"media-body\">
                                                    <span class=\"d-block lh-15\">Support</span>
                                                    <small class=\"d-block\">https://sp.g5plus.net/</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"w-50\">
                        <div class=\"d-flex align-items-center justify-content-end\">
                            <!-- <a href=\"#search-popup\" data-gtf-mfp=\"true\"
                                data-mfp-options='{\"type\":\"inline\",\"focus\": \"#keyword\",\"mainClass\": \"mfp-search-form mfp-move-from-top mfp-align-top\"}'
                                class=\"nav-search d-flex align-items-center pr-3\">
                                <svg class=\"icon icon-magnifying-glass-light fs-28\">
                                    <use xlink:href=\"#icon-magnifying-glass-light\"></use>
                                </svg>
                            </a> -->
                            <ul
                                class=\"navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link pr-3 py-0\" href=\"#\"    >
                                        <i class=\"fab fa-facebook-f a\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link pr-3 py-0\" href=\"#\"    >
                                        <i class=\"fab fa-instagram a\"></i>
                                    </a>  
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link pr-3 py-0\" href=\"#\"    >
                                        <i class=\"fab fa-youtube a\"></i>
                                    </a>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-flex align-items-center d-xl-none\">
                <button class=\"navbar-toggler border-0 px-0 canvas-toggle\" type=\"button\" data-canvas=\"true\"
                    data-canvas-options='{\"width\":\"250px\",\"container\":\".sidenav\"}'>
                    <span class=\"fs-24 toggle-icon\"></span>
                </button>
                <div class=\"mx-auto\"><a class=\"navbar-brand mw-184px d-inline-block mr-0 py-5\"
                        href=\"index.html\">
                        <img src=\"{{'assets/images/logo-black-02.png'|theme}}\" alt=\"Glowing\">
                    </a></div>
                <a href=\"#search-popup\" data-gtf-mfp=\"true\"
                    data-mfp-options='{\"type\":\"inline\",\"focus\": \"#keyword\",\"mainClass\": \"mfp-search-form mfp-move-from-top mfp-align-top\"}'
                    class=\"nav-search d-flex align-items-center\">
                    <svg class=\"icon icon-magnifying-glass-light fs-28\">
                        <use xlink:href=\"#icon-magnifying-glass-light\"></use>
                    </svg>
                    <span class=\"d-none d-xl-inline-block ml-2 font-weight-500\">Search</span></a>
            </div>
        </nav>
    </div>
</div>", "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 10);
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

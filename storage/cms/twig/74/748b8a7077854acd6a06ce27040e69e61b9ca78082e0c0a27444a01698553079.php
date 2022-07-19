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

/* C:\xampp\htdocs\olmish\HungThinhLand/themes/demo/partials/site/header.htm */
class __TwigTemplate_fab65fecf68e2905683b487e6089a2580bc16afcadd05c85daa39730195e4c9e extends \Twig\Template
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
                        
                        ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "                    </div>
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
        // line 56
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
        return "C:\\xampp\\htdocs\\olmish\\HungThinhLand/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 56,  63 => 17,  59 => 16,  50 => 10,  39 => 1,);
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
                        
                        {% component 'staticMenu' %}
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
</div>", "C:\\xampp\\htdocs\\olmish\\HungThinhLand/themes/demo/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 16);
        static $filters = array("theme" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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

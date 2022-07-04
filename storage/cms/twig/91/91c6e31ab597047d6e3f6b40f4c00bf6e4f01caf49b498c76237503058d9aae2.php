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

/* D:\xampp\htdocs\HungThinhLand/plugins/peterhegman/slickslider/components/slider/default.htm */
class __TwigTemplate_ec282b79bf32aa7ea3ad0be02b122d30e0e5cd36666681980a5db20cac664396 extends \Twig\Template
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
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 1), "slideShows", [], "any", false, false, true, 1) === "no_slider")) {
            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 3
            echo "    <script>
\t\t\$(document).ready(function(){
\t\t\tvar args = {
\t\t\t\taccessibility: ";
            // line 6
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 6), "slideShows", [], "any", false, false, true, 6), "accessibility", [], "any", false, false, true, 6), 6, $this->source)]);
            echo ",
\t\t\t\tautoplay: ";
            // line 7
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 7), "slideShows", [], "any", false, false, true, 7), "autoplay", [], "any", false, false, true, 7), 7, $this->source)]);
            echo ",
\t\t\t\tautoplaySpeed: ";
            // line 8
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 8), "slideShows", [], "any", false, false, true, 8), "autoplay_speed", [], "any", false, false, true, 8)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 8), "slideShows", [], "any", false, false, true, 8), "autoplay_speed", [], "any", false, false, true, 8), "html", null, true))) : (print (3000)));
            echo ",
\t\t\t\tarrows: ";
            // line 9
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 9), "slideShows", [], "any", false, false, true, 9), "arrows", [], "any", false, false, true, 9), 9, $this->source)]);
            echo ",
\t\t\t\tprevArrow: '";
            // line 10
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 10), "slideShows", [], "any", false, false, true, 10), "prev_arrow", [], "any", false, false, true, 10)) ? ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 10), "slideShows", [], "any", false, false, true, 10), "prev_arrow", [], "any", false, false, true, 10), 10, $this->source)) : ("<button type=\"button\" class=\"slick-prev\">Previous</button>"));
            echo "',
\t\t\t\tnextArrow: '";
            // line 11
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 11), "slideShows", [], "any", false, false, true, 11), "next_arrow", [], "any", false, false, true, 11)) ? ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 11), "slideShows", [], "any", false, false, true, 11), "next_arrow", [], "any", false, false, true, 11), 11, $this->source)) : ("<button type=\"button\" class=\"slick-next\">Next</button>"));
            echo "',
\t\t\t\tcenterMode: ";
            // line 12
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 12), "slideShows", [], "any", false, false, true, 12), "center_mode", [], "any", false, false, true, 12), 12, $this->source)]);
            echo ",
\t\t\t\tcenterPadding: '";
            // line 13
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 13), "slideShows", [], "any", false, false, true, 13), "center_padding", [], "any", false, false, true, 13)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 13), "slideShows", [], "any", false, false, true, 13), "center_padding", [], "any", false, false, true, 13), "html", null, true))) : (print ("50px")));
            echo "',
\t\t\t\tcssEase: '";
            // line 14
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 14), "slideShows", [], "any", false, false, true, 14), "css_ease", [], "any", false, false, true, 14)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 14), "slideShows", [], "any", false, false, true, 14), "css_ease", [], "any", false, false, true, 14), "html", null, true))) : (print ("ease")));
            echo "',
\t\t\t\tdots: ";
            // line 15
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 15), "slideShows", [], "any", false, false, true, 15), "dots", [], "any", false, false, true, 15), 15, $this->source)]);
            echo ",
\t\t\t\tdraggable: ";
            // line 16
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 16), "slideShows", [], "any", false, false, true, 16), "draggable", [], "any", false, false, true, 16), 16, $this->source)]);
            echo ",
\t\t\t\tfade: ";
            // line 17
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 17), "slideShows", [], "any", false, false, true, 17), "fade", [], "any", false, false, true, 17), 17, $this->source)]);
            echo ",
\t\t\t\tfocusOnSelect: ";
            // line 18
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 18), "slideShows", [], "any", false, false, true, 18), "focus_on_select", [], "any", false, false, true, 18), 18, $this->source)]);
            echo ",
\t\t\t\teasing: '";
            // line 19
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 19), "slideShows", [], "any", false, false, true, 19), "easing", [], "any", false, false, true, 19)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 19), "slideShows", [], "any", false, false, true, 19), "easing", [], "any", false, false, true, 19), "html", null, true))) : (print ("linear")));
            echo "',
\t\t\t\tedgeFriction: ";
            // line 20
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 20), "slideShows", [], "any", false, false, true, 20), "edge_friction", [], "any", false, false, true, 20)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 20), "slideShows", [], "any", false, false, true, 20), "edge_friction", [], "any", false, false, true, 20), "html", null, true))) : (print (0.15)));
            echo ",
\t\t\t\tinfinite: ";
            // line 21
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 21), "slideShows", [], "any", false, false, true, 21), "infinite", [], "any", false, false, true, 21), 21, $this->source)]);
            echo ",
\t\t\t\tinitialSlide: ";
            // line 22
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 22), "slideShows", [], "any", false, false, true, 22), "initial_slide", [], "any", false, false, true, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 22), "slideShows", [], "any", false, false, true, 22), "initial_slide", [], "any", false, false, true, 22), "html", null, true))) : (print (0)));
            echo ",
\t\t\t\tlazyLoad: '";
            // line 23
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 23), "slideShows", [], "any", false, false, true, 23), "lazy_load", [], "any", false, false, true, 23)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 23), "slideShows", [], "any", false, false, true, 23), "lazy_load", [], "any", false, false, true, 23), "html", null, true))) : (print ("ondemand")));
            echo "',
\t\t\t\tmobileFirst: ";
            // line 24
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 24), "slideShows", [], "any", false, false, true, 24), "mobile_first", [], "any", false, false, true, 24), 24, $this->source)]);
            echo ",
\t\t\t\tpauseOnFocus: ";
            // line 25
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 25), "slideShows", [], "any", false, false, true, 25), "pause_on_focus", [], "any", false, false, true, 25), 25, $this->source)]);
            echo ",
\t\t\t\tpauseOnHover: ";
            // line 26
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 26), "slideShows", [], "any", false, false, true, 26), "pause_on_hover", [], "any", false, false, true, 26), 26, $this->source)]);
            echo ",
\t\t\t\tpauseOnDotsHover: ";
            // line 27
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 27), "slideShows", [], "any", false, false, true, 27), "pause_on_dots_hover", [], "any", false, false, true, 27), 27, $this->source)]);
            echo ",
\t\t\t\trows: ";
            // line 28
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 28), "slideShows", [], "any", false, false, true, 28), "rows", [], "any", false, false, true, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 28), "slideShows", [], "any", false, false, true, 28), "rows", [], "any", false, false, true, 28), "html", null, true))) : (print (1)));
            echo ",
\t\t\t\tslidesPerRow: ";
            // line 29
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 29), "slideShows", [], "any", false, false, true, 29), "slides_per_row", [], "any", false, false, true, 29)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 29), "slideShows", [], "any", false, false, true, 29), "slides_per_row", [], "any", false, false, true, 29), "html", null, true))) : (print (1)));
            echo ",
\t\t\t\tslidesToShow: ";
            // line 30
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 30), "slideShows", [], "any", false, false, true, 30), "slides_to_show", [], "any", false, false, true, 30)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 30), "slideShows", [], "any", false, false, true, 30), "slides_to_show", [], "any", false, false, true, 30), "html", null, true))) : (print (1)));
            echo ",
\t\t\t\tslidesToScroll: ";
            // line 31
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 31), "slideShows", [], "any", false, false, true, 31), "slides_to_scroll", [], "any", false, false, true, 31)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 31), "slideShows", [], "any", false, false, true, 31), "slides_to_scroll", [], "any", false, false, true, 31), "html", null, true))) : (print (1)));
            echo ",
\t\t\t\tspeed: ";
            // line 32
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 32), "slideShows", [], "any", false, false, true, 32), "speed", [], "any", false, false, true, 32)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 32), "slideShows", [], "any", false, false, true, 32), "speed", [], "any", false, false, true, 32), "html", null, true))) : (print (300)));
            echo ",
\t\t\t\tswipe: ";
            // line 33
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 33), "slideShows", [], "any", false, false, true, 33), "swipe", [], "any", false, false, true, 33), 33, $this->source)]);
            echo ",
\t\t\t\ttouchMove: ";
            // line 34
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 34), "slideShows", [], "any", false, false, true, 34), "touch_move", [], "any", false, false, true, 34), 34, $this->source)]);
            echo ",
\t\t\t\ttouchThreshold: ";
            // line 35
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 35), "slideShows", [], "any", false, false, true, 35), "touch_threshold", [], "any", false, false, true, 35)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 35), "slideShows", [], "any", false, false, true, 35), "touch_threshold", [], "any", false, false, true, 35), "html", null, true))) : (print (5)));
            echo ",
\t\t\t\tuseCSS: ";
            // line 36
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 36), "slideShows", [], "any", false, false, true, 36), "use_css", [], "any", false, false, true, 36), 36, $this->source)]);
            echo ",
\t\t\t\tuseTransform: ";
            // line 37
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 37), "slideShows", [], "any", false, false, true, 37), "use_transform", [], "any", false, false, true, 37), 37, $this->source)]);
            echo ",
\t\t\t\tvertical: ";
            // line 38
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 38), "slideShows", [], "any", false, false, true, 38), "vertical", [], "any", false, false, true, 38), 38, $this->source)]);
            echo ",
\t\t\t\tverticalSwiping: ";
            // line 39
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 39), "slideShows", [], "any", false, false, true, 39), "vertical_swiping", [], "any", false, false, true, 39), 39, $this->source)]);
            echo ",
\t\t\t\trtl: ";
            // line 40
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 40), "slideShows", [], "any", false, false, true, 40), "rtl", [], "any", false, false, true, 40), 40, $this->source)]);
            echo ",
\t\t\t\twaitForAnimate: ";
            // line 41
            echo call_user_func_array($this->env->getFunction('numberToBoolean')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 41), "slideShows", [], "any", false, false, true, 41), "wait_for_animate", [], "any", false, false, true, 41), 41, $this->source)]);
            echo ",
\t\t\t\tzIndex: ";
            // line 42
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 42), "slideShows", [], "any", false, false, true, 42), "z_index", [], "any", false, false, true, 42)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 42), "slideShows", [], "any", false, false, true, 42), "z_index", [], "any", false, false, true, 42), "html", null, true))) : (print (1000)));
            echo ",
\t\t\t\tresponsive: ";
            // line 43
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 43), "breakpointJson", [], "any", false, false, true, 43), 43, $this->source);
            echo "
\t\t\t};
\t\t\t\$('.slick-slider-";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 45), "slideShows", [], "any", false, false, true, 45), "id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "').slick(args);

\t\t\t// \$(window).resize(function() {
\t\t\t// \t\$('.slick-slider-";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 48), "slideShows", [], "any", false, false, true, 48), "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "').slick('unslick');
\t\t\t// \t\$('.slick-slider-";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 49), "slideShows", [], "any", false, false, true, 49), "id", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "').slick(args);
\t\t\t// });
\t\t});

    </script>
";
            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 55
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 56
            echo "    <style>
    \t.slick-slider-";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 57), "slideShows", [], "any", false, false, true, 57), "id", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo " .slick-slide > div > div {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 60), "slideShows", [], "any", false, false, true, 60), "id", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo " .slick-slide > div > a {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 63), "slideShows", [], "any", false, false, true, 63), "id", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo " .slick-slide .slide-image {
    \t\tmin-height: ";
            // line 64
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 64), "slideShows", [], "any", false, false, true, 64), "slide_show_height", [], "any", false, false, true, 64)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 64), "slideShows", [], "any", false, false, true, 64), "slide_show_height", [], "any", false, false, true, 64), "html", null, true))) : (print ("500px")));
            echo ";
    \t\tposition: relative;
    \t\tbackground-size: cover;
\t\t    display: -webkit-box;
\t\t    display: -ms-flexbox;
\t\t    display: flex;
\t\t    -webkit-box-pack: center;
\t        -ms-flex-pack: center;
            justify-content: center;
\t\t    -webkit-box-align: center;
\t        -ms-flex-align: center;
            align-items: center;
    \t}
    \t.slick-slider-";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 77), "slideShows", [], "any", false, false, true, 77), "id", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo " .slick-slide .slide-image .slide-content {
    \t\tcolor: #ffffff;
    \t\ttext-align: center;
    \t}
    \t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 81), "slideShows", [], "any", false, false, true, 81), "responsive", [], "any", false, false, true, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["breakpoint"]) {
                // line 82
                echo "
    \t\t@media (max-width: ";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breakpoint"], "breakpoint", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "px) {
\t\t    \t.slick-slider-";
                // line 84
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 84), "slideShows", [], "any", false, false, true, 84), "id", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo " .slick-slide .slide-image {
\t\t    \t\tmin-height: ";
                // line 85
                ((twig_get_attribute($this->env, $this->source, $context["breakpoint"], "responsive_slide_show_height", [], "any", false, false, true, 85)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breakpoint"], "responsive_slide_show_height", [], "any", false, false, true, 85), "html", null, true))) : (print ("500px")));
                echo ";
\t\t    \t}
    \t\t}

    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breakpoint'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    </style>
";
            // line 55
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 92
            echo "<div class=\"slick-slider-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 92), "slideShows", [], "any", false, false, true, 92), "id", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "\">
\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "slides", [], "any", false, false, true, 93), "slideShows", [], "any", false, false, true, 93), "slide_show_content", [], "any", false, false, true, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 94
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_link", [], "any", false, false, true, 94) != "")) {
                    // line 95
                    echo "\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_link", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                    echo "\" class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '";
                    // line 96
                    echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_image", [], "any", false, false, true, 96), 96, $this->source));
                    echo "' ); background-position: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "image_horizontal_position", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                    echo "% ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "image_position", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                    echo "%;\">
\t\t        \t";
                    // line 97
                    if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", [], "any", false, false, true, 97) || twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", [], "any", false, false, true, 97))) {
                        // line 98
                        echo "\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>";
                        // line 99
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                        echo "</h1>
\t        \t\t\t<p>";
                        // line 100
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                        echo "</p>
\t    \t\t\t</div>
\t\t        \t";
                    }
                    // line 103
                    echo "\t\t        </div>
\t        </a>
        ";
                } else {
                    // line 106
                    echo "        \t<div class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '";
                    // line 107
                    echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_image", [], "any", false, false, true, 107), 107, $this->source));
                    echo "' ); background-position: ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "image_horizontal_position", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                    echo "% ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "image_position", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                    echo "%;\">
\t\t        \t";
                    // line 108
                    if ((twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", [], "any", false, false, true, 108) || twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", [], "any", false, false, true, 108))) {
                        // line 109
                        echo "\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>";
                        // line 110
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_title", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                        echo "</h1>
\t        \t\t\t<p>";
                        // line 111
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slide"], "slide_description", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                        echo "</p>
\t    \t\t\t</div>
\t\t        \t";
                    }
                    // line 114
                    echo "\t\t        </div>
\t        </div>
        ";
                }
                // line 117
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/plugins/peterhegman/slickslider/components/slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 118,  372 => 117,  367 => 114,  361 => 111,  357 => 110,  354 => 109,  352 => 108,  344 => 107,  341 => 106,  336 => 103,  330 => 100,  326 => 99,  323 => 98,  321 => 97,  313 => 96,  308 => 95,  305 => 94,  301 => 93,  296 => 92,  294 => 55,  291 => 90,  280 => 85,  276 => 84,  272 => 83,  269 => 82,  265 => 81,  258 => 77,  242 => 64,  238 => 63,  232 => 60,  226 => 57,  223 => 56,  221 => 55,  219 => 2,  211 => 49,  207 => 48,  201 => 45,  196 => 43,  192 => 42,  188 => 41,  184 => 40,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  160 => 34,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not(slider.slides.slideShows is same as ('no_slider')) %}
{% put scripts %}
    <script>
\t\t\$(document).ready(function(){
\t\t\tvar args = {
\t\t\t\taccessibility: {{numberToBoolean(slider.slides.slideShows.accessibility)}},
\t\t\t\tautoplay: {{numberToBoolean(slider.slides.slideShows.autoplay)}},
\t\t\t\tautoplaySpeed: {{ slider.slides.slideShows.autoplay_speed ?: 3000 }},
\t\t\t\tarrows: {{numberToBoolean(slider.slides.slideShows.arrows)}},
\t\t\t\tprevArrow: '{{ slider.slides.slideShows.prev_arrow ? slider.slides.slideShows.prev_arrow|raw : '<button type=\"button\" class=\"slick-prev\">Previous</button>' }}',
\t\t\t\tnextArrow: '{{ slider.slides.slideShows.next_arrow ? slider.slides.slideShows.next_arrow|raw : '<button type=\"button\" class=\"slick-next\">Next</button>' }}',
\t\t\t\tcenterMode: {{numberToBoolean(slider.slides.slideShows.center_mode)}},
\t\t\t\tcenterPadding: '{{slider.slides.slideShows.center_padding ?: '50px' }}',
\t\t\t\tcssEase: '{{slider.slides.slideShows.css_ease ?: 'ease'}}',
\t\t\t\tdots: {{numberToBoolean(slider.slides.slideShows.dots)}},
\t\t\t\tdraggable: {{numberToBoolean(slider.slides.slideShows.draggable)}},
\t\t\t\tfade: {{numberToBoolean(slider.slides.slideShows.fade)}},
\t\t\t\tfocusOnSelect: {{numberToBoolean(slider.slides.slideShows.focus_on_select)}},
\t\t\t\teasing: '{{slider.slides.slideShows.easing ?: 'linear'}}',
\t\t\t\tedgeFriction: {{slider.slides.slideShows.edge_friction ?: 0.15}},
\t\t\t\tinfinite: {{numberToBoolean(slider.slides.slideShows.infinite)}},
\t\t\t\tinitialSlide: {{slider.slides.slideShows.initial_slide ?: 0}},
\t\t\t\tlazyLoad: '{{slider.slides.slideShows.lazy_load ?: 'ondemand'}}',
\t\t\t\tmobileFirst: {{numberToBoolean(slider.slides.slideShows.mobile_first)}},
\t\t\t\tpauseOnFocus: {{numberToBoolean(slider.slides.slideShows.pause_on_focus)}},
\t\t\t\tpauseOnHover: {{numberToBoolean(slider.slides.slideShows.pause_on_hover)}},
\t\t\t\tpauseOnDotsHover: {{numberToBoolean(slider.slides.slideShows.pause_on_dots_hover)}},
\t\t\t\trows: {{slider.slides.slideShows.rows ?: 1}},
\t\t\t\tslidesPerRow: {{slider.slides.slideShows.slides_per_row ?: 1}},
\t\t\t\tslidesToShow: {{slider.slides.slideShows.slides_to_show ?: 1}},
\t\t\t\tslidesToScroll: {{slider.slides.slideShows.slides_to_scroll ?: 1}},
\t\t\t\tspeed: {{slider.slides.slideShows.speed ?: 300}},
\t\t\t\tswipe: {{numberToBoolean(slider.slides.slideShows.swipe)}},
\t\t\t\ttouchMove: {{numberToBoolean(slider.slides.slideShows.touch_move)}},
\t\t\t\ttouchThreshold: {{slider.slides.slideShows.touch_threshold ?: 5}},
\t\t\t\tuseCSS: {{numberToBoolean(slider.slides.slideShows.use_css)}},
\t\t\t\tuseTransform: {{numberToBoolean(slider.slides.slideShows.use_transform)}},
\t\t\t\tvertical: {{numberToBoolean(slider.slides.slideShows.vertical)}},
\t\t\t\tverticalSwiping: {{numberToBoolean(slider.slides.slideShows.vertical_swiping)}},
\t\t\t\trtl: {{numberToBoolean(slider.slides.slideShows.rtl)}},
\t\t\t\twaitForAnimate: {{numberToBoolean(slider.slides.slideShows.wait_for_animate)}},
\t\t\t\tzIndex: {{slider.slides.slideShows.z_index ?: 1000}},
\t\t\t\tresponsive: {{slider.slides.breakpointJson|raw}}
\t\t\t};
\t\t\t\$('.slick-slider-{{slider.slides.slideShows.id}}').slick(args);

\t\t\t// \$(window).resize(function() {
\t\t\t// \t\$('.slick-slider-{{slider.slides.slideShows.id}}').slick('unslick');
\t\t\t// \t\$('.slick-slider-{{slider.slides.slideShows.id}}').slick(args);
\t\t\t// });
\t\t});

    </script>
{% endput %}
{% put styles %}
    <style>
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide > div > div {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide > div > a {
    \t\tfloat: left!important;
    \t}
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide .slide-image {
    \t\tmin-height: {{slider.slides.slideShows.slide_show_height ?: '500px'}};
    \t\tposition: relative;
    \t\tbackground-size: cover;
\t\t    display: -webkit-box;
\t\t    display: -ms-flexbox;
\t\t    display: flex;
\t\t    -webkit-box-pack: center;
\t        -ms-flex-pack: center;
            justify-content: center;
\t\t    -webkit-box-align: center;
\t        -ms-flex-align: center;
            align-items: center;
    \t}
    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide .slide-image .slide-content {
    \t\tcolor: #ffffff;
    \t\ttext-align: center;
    \t}
    \t{% for breakpoint in slider.slides.slideShows.responsive %}

    \t\t@media (max-width: {{breakpoint.breakpoint}}px) {
\t\t    \t.slick-slider-{{slider.slides.slideShows.id}} .slick-slide .slide-image {
\t\t    \t\tmin-height: {{breakpoint.responsive_slide_show_height ?: '500px'}};
\t\t    \t}
    \t\t}

    \t{% endfor %}
    </style>
{% endput %}
<div class=\"slick-slider-{{slider.slides.slideShows.id}}\">
\t{% for slide in slider.slides.slideShows.slide_show_content %}
\t\t{% if slide.slide_link != '' %}
\t\t\t<a href=\"{{slide.slide_link}}\" class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '{{slide.slide_image|media}}' ); background-position: {{slide.image_horizontal_position}}% {{slide.image_position}}%;\">
\t\t        \t{% if (slide.slide_title or slide.slide_description) %}
\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>{{slide.slide_title}}</h1>
\t        \t\t\t<p>{{slide.slide_description}}</p>
\t    \t\t\t</div>
\t\t        \t{% endif %}
\t\t        </div>
\t        </a>
        {% else %}
        \t<div class=\"slide\">
\t\t        <div class=\"slide-image\" style=\"background-image: url( '{{slide.slide_image|media}}' ); background-position: {{slide.image_horizontal_position}}% {{slide.image_position}}%;\">
\t\t        \t{% if (slide.slide_title or slide.slide_description) %}
\t        \t\t<div class=\"slide-content\">
\t        \t\t\t<h1>{{slide.slide_title}}</h1>
\t        \t\t\t<p>{{slide.slide_description}}</p>
\t    \t\t\t</div>
\t\t        \t{% endif %}
\t\t        </div>
\t        </div>
        {% endif %}
    {% endfor %}
</div>
{% endif %}
", "D:\\xampp\\htdocs\\HungThinhLand/plugins/peterhegman/slickslider/components/slider/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "put" => 2, "for" => 81);
        static $filters = array("escape" => 8, "raw" => 10, "media" => 96);
        static $functions = array("numberToBoolean" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'put', 'for'],
                ['escape', 'raw', 'media'],
                ['numberToBoolean']
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

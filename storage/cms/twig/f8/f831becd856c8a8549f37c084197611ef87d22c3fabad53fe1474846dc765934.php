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

/* D:\xampp\htdocs\HungThinhLand/themes/demo/pages/blog-list.htm */
class __TwigTemplate_f8d912a564188bfff89b96908b8cfbd7ef5222752fa1e2dbdd0730a5751fcc91 extends \Twig\Template
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
<li class=\"breadcrumb-item active pl-0 d-flex align-items-center\" aria-current=\"page\">Blog Update</li>
</ol>
</nav>
</div>
</section>
<section class=\"pt-9 pb-lg-13 pb-11\">
<div class=\"container\">
<h2 class=\"text-center mb-8\" data-animate=\"fadeInUp\">Blog Update</h2>
<div class=\"row\">

    ";
        // line 18
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 18);
        // line 19
        echo "

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "
<div class=\"col-lg-4 col-md-6 mb-7\" data-animate=\"fadeInUp\">
<div class=\"card border-0 text-center\">
<div class=\"position-relative d-flex align-items-end card-img\">

";
            // line 27
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 27), "count", [], "any", false, false, true, 27)) {
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "\" class=\"hover-shine\">
    <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 30) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 30)) : (twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 30))), "html", null, true);
                    echo "\">
</a>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 34
            echo "
";
            // line 35
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 35), "count", [], "any", false, false, true, 35)) {
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    echo "  
<a href=\"#\" class=\"badge pos-fixed-bottom-n12-center text-secondary bg-gray bg-hover-secondary hover-white position-absolute fs-15 py-1 px-3 font-weight-500\">
    ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo "
</a>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 42
            echo "
</div>
<div class=\"card-body p-0\">
<h3 class=\"card-title mb-0 mt-6 fs-24 lh-15 mx-xl-3\">
<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" class=\"text-decoration-none\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</a>
</h3>
<ul class=\"list-inline mt-5 fs-15 lh-1\">
<li class=\"list-inline-item pr-3 border-right border-2x\">By <a class=\"text-decoration-none\" href=\"#\">";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 49), "first_name", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 49), "last_name", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</a>
</li>
<li class=\"list-inline-item pr-3\">";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 51), 51, $this->source), "d M, Y"), "html", null, true);
            echo "</li>
</ul>
</div>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "

</div>
<nav class=\"pt-2\">
<ul class=\"pagination justify-content-center align-items-center mb-0 fs-16 font-weight-600\">
<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\" tabindex=\"-1\"><i class=\"far fa-angle-double-left\"></i></a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">1</a>
</li>

<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\"><i class=\"far fa-angle-double-right\"></i></a>
</li>
</ul>
</nav>
</div>
</section>
</main>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/blog-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  141 => 51,  134 => 49,  126 => 46,  120 => 42,  110 => 38,  103 => 36,  101 => 35,  98 => 34,  86 => 30,  81 => 29,  77 => 28,  75 => 27,  68 => 22,  64 => 21,  60 => 19,  58 => 18,  39 => 1,);
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
<li class=\"breadcrumb-item active pl-0 d-flex align-items-center\" aria-current=\"page\">Blog Update</li>
</ol>
</nav>
</div>
</section>
<section class=\"pt-9 pb-lg-13 pb-11\">
<div class=\"container\">
<h2 class=\"text-center mb-8\" data-animate=\"fadeInUp\">Blog Update</h2>
<div class=\"row\">

    {% set posts = blogPosts.posts %}


{% for post in posts %}

<div class=\"col-lg-4 col-md-6 mb-7\" data-animate=\"fadeInUp\">
<div class=\"card border-0 text-center\">
<div class=\"position-relative d-flex align-items-end card-img\">

{% if post.featured_images.count %}
{% for image in post.featured_images %}
<a href=\"{{ post.url }}\" class=\"hover-shine\">
    <img src=\"{{ image.path }}\" alt=\"{{ image.description != null ? image.description : image.filename }}\">
</a>
{%endfor%}
{% endif %}

{% if post.categories.count %}
{% for category in post.categories %}  
<a href=\"#\" class=\"badge pos-fixed-bottom-n12-center text-secondary bg-gray bg-hover-secondary hover-white position-absolute fs-15 py-1 px-3 font-weight-500\">
    {{ category.name }}
</a>
{% endfor %}
{% endif %}

</div>
<div class=\"card-body p-0\">
<h3 class=\"card-title mb-0 mt-6 fs-24 lh-15 mx-xl-3\">
<a href=\"{{ post.url }}\" class=\"text-decoration-none\">{{ post.title }}</a>
</h3>
<ul class=\"list-inline mt-5 fs-15 lh-1\">
<li class=\"list-inline-item pr-3 border-right border-2x\">By <a class=\"text-decoration-none\" href=\"#\">{{ post.user.first_name}} {{ post.user.last_name}}</a>
</li>
<li class=\"list-inline-item pr-3\">{{ post.published_at|date('d M, Y') }}</li>
</ul>
</div>
</div>
</div>
{% endfor %}


</div>
<nav class=\"pt-2\">
<ul class=\"pagination justify-content-center align-items-center mb-0 fs-16 font-weight-600\">
<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\" tabindex=\"-1\"><i class=\"far fa-angle-double-left\"></i></a>
</li>
<li class=\"page-item\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\">1</a>
</li>

<li class=\"page-item fs-18 d-none d-sm-block\">
<a class=\"page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex\" href=\"#\"><i class=\"far fa-angle-double-right\"></i></a>
</li>
</ul>
</nav>
</div>
</section>
</main>", "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/blog-list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "for" => 21, "if" => 27);
        static $filters = array("escape" => 29, "date" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'date'],
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

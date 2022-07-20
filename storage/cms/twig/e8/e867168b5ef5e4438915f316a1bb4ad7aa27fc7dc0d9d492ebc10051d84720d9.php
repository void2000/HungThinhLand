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

/* D:\xampp\htdocs\HungThinhLand/themes/demo/pages/blog-detail.htm */
class __TwigTemplate_663029369d2f0ee015da58c44b630c55790841b3fd7c1be45139da6d93417fad extends \Twig\Template
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
<li class=\"breadcrumb-item\"><a class=\"text-decoration-none\" href=\"index.html\">Home</a>
</li>
<li class=\"breadcrumb-item active pl-0 d-flex align-items-center\" aria-current=\"page\">Blog Detail 02</li>
</ol>
</nav>
</div>
</section>
<section class=\"py-11 pb-lg-13\">
<div class=\"container\">
<section class=\"pb-3\">
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<div class=\"text-center mb-3\">
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 19), "count", [], "any", false, false, true, 19)) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "  
        <a href=\"#\" class=\"badge text-secondary bg-gray-2  fs-15 py-1 lh-12 px-3 font-weight-500\">
        Life Style
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "</div>
<h2 class=\"mb-2 fs-34 text-center\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
</h2>
<ul class=\"list-inline lh-1 d-flex align-items-center justify-content-center mb-8 flex-wrap\">
<li class=\"list-inline-item pr-3\">
<img src=\"images/blog-detail-01.png\" alt=\"blog detail 01\">
</li>
<li class=\"list-inline-item pr-3 border-right border-2x\">By <a class=\"text-decoration-none\" href=\"#\">";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 34), "first_name", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 34), "last_name", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</a></li>
<li class=\"list-inline-item pr-3\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 35), 35, $this->source), "M d, Y"), "html", null, true);
        echo "</li>
<li class=\"list-inline-item pr-1\"><span class=\"rounded-circle d-block\" style=\"width: 4px; height: 4px;background-color: #C4C4C4\"></span>
</li>
<li class=\"list-inline-item pr-1\">134 views</li>
</ul>

<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
    ";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 43), 43, $this->source);
        echo "
 </div>
</div>
</section>


<section>
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<h2 class=\"mb-7 fs-34 text-center\">
Related Posts
</h2>
<div class=\"slick-slider pb-11 border-bottom\" data-slick-options='{\"slidesToShow\": 3,\"infinite\":true,\"autoplay\":false,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"dots\":true}}]}'>
<div class=\"box\">
<div class=\"card border-0\">
<a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
<img src=\"images/blog-detail-05.jpg\" alt=\"Our Favorite Multitasking Products\">
</a>
<div class=\"card-body px-0 pt-3 pb-0\">
<a href=\"#\" class=\"card-text text-uppercase font-weight-600 letter-spacing-01 fs-13 text-body\">
Videos
</a>
<h3 class=\"card-title mb-0 fs-16 font-weight-600 lh-16 mt-2\">
<a href=\"blog-detail-01.html\">Our Favorite Multitasking Products</a>
</h3>
</div>
</div>
</div>
<div class=\"box\">
<div class=\"card border-0\">
<a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
<img src=\"images/blog-detail-04.jpg\" alt=\"How to Plop Hair for Bouncy, Beautiful Curls\">
</a>
<div class=\"card-body px-0 pt-3 pb-0\">
<a href=\"#\" class=\"card-text text-uppercase font-weight-600 letter-spacing-01 fs-13 text-body\">
Videos
</a>
<h3 class=\"card-title mb-0 fs-16 font-weight-600 lh-16 mt-2\">
<a href=\"blog-detail-01.html\">How to Plop Hair for Bouncy, Beautiful Curls</a>
</h3>
</div>
</div>
</div>
<div class=\"box\">
<div class=\"card border-0\">
<a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
<img src=\"images/blog-detail-07.jpg\" alt=\"Are You Washing Your Face Properly?\">
</a>
<div class=\"card-body px-0 pt-3 pb-0\">
<a href=\"#\" class=\"card-text text-uppercase font-weight-600 letter-spacing-01 fs-13 text-body\">
Videos
</a>
<h3 class=\"card-title mb-0 fs-16 font-weight-600 lh-16 mt-2\">
<a href=\"blog-detail-01.html\">Are You Washing Your Face Properly?</a>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"pt-10 pb-7\">
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<h2 class=\"mb-8 fs-34 text-center\">
5 Comments
</h2>
<ol class=\"list-unstyled\">
<li class=\"pb-6 mb-6 border-bottom\">
<div class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-06.png\" alt=\"Elizabeth\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Elizabeth</span>
</p>
<p class=\"mb-3\">This skin care gift set is made with potent vitamins, stimulating caffeine, and natural acids. It’s designed to rejuvenate your complexion without the use of harsh chemicals or bleaching agents.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</div>
<div class=\"mt-6 mb-2\">
<ol class=\"list-unstyled ml-sm-12 pl-4 border-sm-left\">
<li class=\"media mt-7\">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-07.png\" alt=\"admin\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">admin</span>
</p>
<p class=\"mb-3\">Vitamin C promotes healthy collagen levels, while 3 types of caffeine awaken and rejuvenate the skin and eyes.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</li>
</ol>
</div>
<div class=\"mt-6 mb-2\">
<ol class=\"list-unstyled ml-sm-12 pl-4 border-sm-left\">
<li class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-08.png\" alt=\"Lucille D\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Lucille D</span>
</p>
<p class=\"mb-3\">Vitamin C promotes healthy collagen levels, while 3 types of caffeine awaken and rejuvenate the skin and eyes.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</li>
</ol>
</div>
</li>
</ol>
<ol class=\"list-unstyled\">
<li class=\"pb-6 mb-6 border-bottom\">
<div class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-10.png\" alt=\"Lucille D\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Lucille D</span>
</p>
<p class=\"mb-3\">We may not be doing the whole ‘get up and go’ thing like we used to, especially if the only place we’re going is our couch. But to get up and glow?</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</div>
</li>
</ol>
<ol class=\"list-unstyled\">
<li class=\"pb-6 mb-6 border-bottom\">
<div class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-09.png\" alt=\"Jennifer. c\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Jennifer. c</span>
</p>
<p class=\"mb-3\">This skin care gift set is made with potent vitamins, stimulating caffeine, and natural acids. It’s designed to rejuvenate your complexion without the use of harsh chemicals or bleaching agents.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</div>
</li>
</ol>
</div>
</div>
</section>
<section>
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<h2 class=\"mb-1 fs-34 text-center mb-7\">Leave a Comment</h2>
<form>
<div class=\"row\">
<div class=\"col-sm-6 mb-6\">
<input type=\"text\" class=\"form-control border-0\" placeholder=\"Name\" required=\"\">
</div>
<div class=\"col-sm-6 mb-6\">
<input type=\"email\" class=\"form-control border-0\" placeholder=\"Email\" required=\"\">
</div>
</div>
<div class=\"form-group mb-6\">
<textarea class=\"form-control border-0\" placeholder=\"Message\" rows=\"6\"></textarea>
</div>
<div class=\"custom-control custom-checkbox mb-7\">
<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
<label class=\"custom-control-label text-body\" for=\"customCheck1\">Save my name, email in this
browse
for the next time I comment</label>
</div>
<div class=\"text-center\">
<button type=\"submit\" class=\"btn btn-secondary bg-hover-primary border-hover-primary px-7\">
Submit
</button>
</div>
 </form>
</div>
</div>
</section>
</div>
</section>
</main>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/blog-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  97 => 35,  91 => 34,  82 => 28,  78 => 26,  75 => 25,  61 => 20,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main id=\"content\">
<section class=\"py-2 bg-gray-2\">
<div class=\"container\">
<nav aria-label=\"breadcrumb\">
<ol class=\"breadcrumb breadcrumb-site py-0 d-flex justify-content-center\">
<li class=\"breadcrumb-item\"><a class=\"text-decoration-none\" href=\"index.html\">Home</a>
</li>
<li class=\"breadcrumb-item active pl-0 d-flex align-items-center\" aria-current=\"page\">Blog Detail 02</li>
</ol>
</nav>
</div>
</section>
<section class=\"py-11 pb-lg-13\">
<div class=\"container\">
<section class=\"pb-3\">
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<div class=\"text-center mb-3\">
    {% if post.categories.count %}
    {% for category in post.categories %}  
        <a href=\"#\" class=\"badge text-secondary bg-gray-2  fs-15 py-1 lh-12 px-3 font-weight-500\">
        Life Style
        </a>
    {% endfor %}
    {% endif %}
</div>
<h2 class=\"mb-2 fs-34 text-center\">
    {{ post.title }}
</h2>
<ul class=\"list-inline lh-1 d-flex align-items-center justify-content-center mb-8 flex-wrap\">
<li class=\"list-inline-item pr-3\">
<img src=\"images/blog-detail-01.png\" alt=\"blog detail 01\">
</li>
<li class=\"list-inline-item pr-3 border-right border-2x\">By <a class=\"text-decoration-none\" href=\"#\">{{ post.user.first_name}} {{ post.user.last_name}}</a></li>
<li class=\"list-inline-item pr-3\">{{ post.published_at|date('M d, Y') }}</li>
<li class=\"list-inline-item pr-1\"><span class=\"rounded-circle d-block\" style=\"width: 4px; height: 4px;background-color: #C4C4C4\"></span>
</li>
<li class=\"list-inline-item pr-1\">134 views</li>
</ul>

<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
    {{ post.content_html|raw }}
 </div>
</div>
</section>


<section>
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<h2 class=\"mb-7 fs-34 text-center\">
Related Posts
</h2>
<div class=\"slick-slider pb-11 border-bottom\" data-slick-options='{\"slidesToShow\": 3,\"infinite\":true,\"autoplay\":false,\"dots\":false,\"arrows\":false,\"responsive\":[{\"breakpoint\": 768,\"settings\": {\"slidesToShow\": 2,\"dots\":true}},{\"breakpoint\": 576,\"settings\": {\"slidesToShow\": 1,\"dots\":true}}]}'>
<div class=\"box\">
<div class=\"card border-0\">
<a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
<img src=\"images/blog-detail-05.jpg\" alt=\"Our Favorite Multitasking Products\">
</a>
<div class=\"card-body px-0 pt-3 pb-0\">
<a href=\"#\" class=\"card-text text-uppercase font-weight-600 letter-spacing-01 fs-13 text-body\">
Videos
</a>
<h3 class=\"card-title mb-0 fs-16 font-weight-600 lh-16 mt-2\">
<a href=\"blog-detail-01.html\">Our Favorite Multitasking Products</a>
</h3>
</div>
</div>
</div>
<div class=\"box\">
<div class=\"card border-0\">
<a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
<img src=\"images/blog-detail-04.jpg\" alt=\"How to Plop Hair for Bouncy, Beautiful Curls\">
</a>
<div class=\"card-body px-0 pt-3 pb-0\">
<a href=\"#\" class=\"card-text text-uppercase font-weight-600 letter-spacing-01 fs-13 text-body\">
Videos
</a>
<h3 class=\"card-title mb-0 fs-16 font-weight-600 lh-16 mt-2\">
<a href=\"blog-detail-01.html\">How to Plop Hair for Bouncy, Beautiful Curls</a>
</h3>
</div>
</div>
</div>
<div class=\"box\">
<div class=\"card border-0\">
<a href=\"blog-detail-01.html\" class=\"hover-shine card-img-top\">
<img src=\"images/blog-detail-07.jpg\" alt=\"Are You Washing Your Face Properly?\">
</a>
<div class=\"card-body px-0 pt-3 pb-0\">
<a href=\"#\" class=\"card-text text-uppercase font-weight-600 letter-spacing-01 fs-13 text-body\">
Videos
</a>
<h3 class=\"card-title mb-0 fs-16 font-weight-600 lh-16 mt-2\">
<a href=\"blog-detail-01.html\">Are You Washing Your Face Properly?</a>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class=\"pt-10 pb-7\">
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<h2 class=\"mb-8 fs-34 text-center\">
5 Comments
</h2>
<ol class=\"list-unstyled\">
<li class=\"pb-6 mb-6 border-bottom\">
<div class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-06.png\" alt=\"Elizabeth\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Elizabeth</span>
</p>
<p class=\"mb-3\">This skin care gift set is made with potent vitamins, stimulating caffeine, and natural acids. It’s designed to rejuvenate your complexion without the use of harsh chemicals or bleaching agents.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</div>
<div class=\"mt-6 mb-2\">
<ol class=\"list-unstyled ml-sm-12 pl-4 border-sm-left\">
<li class=\"media mt-7\">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-07.png\" alt=\"admin\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">admin</span>
</p>
<p class=\"mb-3\">Vitamin C promotes healthy collagen levels, while 3 types of caffeine awaken and rejuvenate the skin and eyes.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</li>
</ol>
</div>
<div class=\"mt-6 mb-2\">
<ol class=\"list-unstyled ml-sm-12 pl-4 border-sm-left\">
<li class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-08.png\" alt=\"Lucille D\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Lucille D</span>
</p>
<p class=\"mb-3\">Vitamin C promotes healthy collagen levels, while 3 types of caffeine awaken and rejuvenate the skin and eyes.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</li>
</ol>
</div>
</li>
</ol>
<ol class=\"list-unstyled\">
<li class=\"pb-6 mb-6 border-bottom\">
<div class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-10.png\" alt=\"Lucille D\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Lucille D</span>
</p>
<p class=\"mb-3\">We may not be doing the whole ‘get up and go’ thing like we used to, especially if the only place we’re going is our couch. But to get up and glow?</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</div>
</li>
</ol>
<ol class=\"list-unstyled\">
<li class=\"pb-6 mb-6 border-bottom\">
<div class=\"media \">
<div class=\"w-60px d-block mr-6\">
<img src=\"images/blog-detail-09.png\" alt=\"Jennifer. c\">
</div>
<div class=\"media-body\">
<p class=\"d-flex mb-1 align-items-center\">
<span class=\"font-weight-600 fs-14 letter-spacing-01 text-secondary text-uppercase\">Jennifer. c</span>
</p>
<p class=\"mb-3\">This skin care gift set is made with potent vitamins, stimulating caffeine, and natural acids. It’s designed to rejuvenate your complexion without the use of harsh chemicals or bleaching agents.</p>
<span class=\"fs-15 text-muted pr-2 lh-1\">02 Dec, 2020 at 2:29 PM</span><a href=\"#\" class=\"pl-2  border-left text-secondary font-weight-600\">Reply</a>
</div>
</div>
</li>
</ol>
</div>
</div>
</section>
<section>
<div class=\"row\">
<div class=\"col-lg-8 offset-lg-2\">
<h2 class=\"mb-1 fs-34 text-center mb-7\">Leave a Comment</h2>
<form>
<div class=\"row\">
<div class=\"col-sm-6 mb-6\">
<input type=\"text\" class=\"form-control border-0\" placeholder=\"Name\" required=\"\">
</div>
<div class=\"col-sm-6 mb-6\">
<input type=\"email\" class=\"form-control border-0\" placeholder=\"Email\" required=\"\">
</div>
</div>
<div class=\"form-group mb-6\">
<textarea class=\"form-control border-0\" placeholder=\"Message\" rows=\"6\"></textarea>
</div>
<div class=\"custom-control custom-checkbox mb-7\">
<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck1\">
<label class=\"custom-control-label text-body\" for=\"customCheck1\">Save my name, email in this
browse
for the next time I comment</label>
</div>
<div class=\"text-center\">
<button type=\"submit\" class=\"btn btn-secondary bg-hover-primary border-hover-primary px-7\">
Submit
</button>
</div>
 </form>
</div>
</div>
</section>
</div>
</section>
</main>", "D:\\xampp\\htdocs\\HungThinhLand/themes/demo/pages/blog-detail.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 20);
        static $filters = array("escape" => 28, "date" => 35, "raw" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date', 'raw'],
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

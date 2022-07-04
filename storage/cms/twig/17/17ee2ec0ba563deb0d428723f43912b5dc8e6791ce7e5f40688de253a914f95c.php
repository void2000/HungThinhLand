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

/* D:\xampp\htdocs\HungThinhLand/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_b6fda9b490b95e79fb7da4f96e1a1b3715ae7351d6ffe719fba65e9fc3ce79e6 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 2), "isHidden", [], "any", false, false, true, 2)) {
                // line 3
                echo "        
        
        <li aria-haspopup=\"true\" aria-expanded=\"false\"
            class=\"nav-item dropdown-item-blog dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
            ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 7)) {
                    // line 8
                    echo "            <a class=\"nav-link ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 8)) ? ("dropdown-toggle") : (""));
                    echo " p-0\" href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "\" data-toggle=\"dropdown\">
                ";
                    // line 9
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "
                <span class=\"caret\"></span>
            </a>
            ";
                }
                // line 13
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 13)) {
                    // line 14
                    echo "            <ul class=\"dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp\">
                ";
                    // line 15
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 15)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 16
                    echo "            </ul>
            ";
                }
                // line 18
                echo "        </li>
         
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\HungThinhLand/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  79 => 16,  74 => 15,  71 => 14,  68 => 13,  61 => 9,  54 => 8,  52 => 7,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items %}
    {% if not item.viewBag.isHidden %}
        
        
        <li aria-haspopup=\"true\" aria-expanded=\"false\"
            class=\"nav-item dropdown-item-blog dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-4\">
            {% if item.url %}
            <a class=\"nav-link {{ item.items ? 'dropdown-toggle' : '' }} p-0\" href=\"{{ item.url }}\" data-toggle=\"dropdown\">
                {{ item.title }}
                <span class=\"caret\"></span>
            </a>
            {% endif %}
            {% if item.items %}
            <ul class=\"dropdown-menu pt-3 pb-0 pb-xl-3 x-animated x-fadeInUp\">
                {% partial __SELF__ ~ \"::items\" items=item.items %}
            </ul>
            {% endif %}
        </li>
         
    {% endif %}
{% endfor %}
", "D:\\xampp\\htdocs\\HungThinhLand/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 2, "partial" => 15);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
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

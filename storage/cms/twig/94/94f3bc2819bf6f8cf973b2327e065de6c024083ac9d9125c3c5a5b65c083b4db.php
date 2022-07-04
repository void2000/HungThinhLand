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

/* C:\xampp\htdocs\olmish\HungThinhLand/plugins/rainlab/pages/components/staticmenu/default.htm */
class __TwigTemplate_021a59210c8dec267ff7d219ad94b9d450082c587889e5075fe8449d77bfe88a extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 1)) {
            // line 2
            echo "    
    <ul class=\"navbar-nav hover-menu main-menu px-0 mx-xl-n5\">
        ";
            // line 4
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 4)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        
    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\olmish\\HungThinhLand/plugins/rainlab/pages/components/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.menuItems %}
    
    <ul class=\"navbar-nav hover-menu main-menu px-0 mx-xl-n5\">
        {% partial __SELF__ ~ \"::items\" items=__SELF__.menuItems %}
        
    </ul>
{% endif %}
", "C:\\xampp\\htdocs\\olmish\\HungThinhLand/plugins/rainlab/pages/components/staticmenu/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "partial" => 4);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
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

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gowilds/templates/page/header.html.twig */
class __TwigTemplate_1e74fbff67df7f78a0faeba2a55fd0d3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header id=\"header\" class=\"header-default header-one\">
\t
\t";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 3)) {
            // line 4
            yield "\t\t<div class=\"topbar topbar__one\">
\t\t\t<div class=\"topbar__content header-default__topbar-content\">
\t\t\t\t<div class=\"topbar__left\">
\t\t\t\t\t<div class=\"topbar__left-content\"> 
\t\t\t\t\t\t";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            yield "
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"topbar__right\">
\t\t\t\t\t<div class=\"topbar__right-content\"> 
\t\t\t\t\t\t";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar_right", [], "any", false, false, true, 13)) {
                // line 14
                yield "\t\t\t\t\t\t\t";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar_right", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                yield "
\t\t\t\t\t\t";
            }
            // line 16
            yield "\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 21
        yield "
\t";
        // line 22
        $context["class_sticky"] = "";
        // line 23
        yield "\t";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 24
            yield "\t\t";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 25
            yield "\t";
        }
        yield "  

\t<div class=\"header-one__main ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 27, $this->source), "html", null, true);
        yield "\">
\t\t<div class=\"header-one__content\">
\t\t\t<div class=\"header-one__main-inner p-relative\">
\t\t\t\t<div class=\"header-one__left\">\t\t
\t\t\t\t\t<div class=\"header-one__branding\">
\t\t\t\t\t\t";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 32)) {
            // line 33
            yield "\t\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t";
        }
        // line 35
        yield "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"header-one__right\">
\t\t\t\t\t<div class=\"header-one__main-menu\">
\t\t\t\t\t\t<div class=\"gva-offcanvas-mobile\">
\t\t\t\t\t\t\t<div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
\t\t\t\t\t\t\t<div class=\"main-menu-inner\">
\t\t\t\t\t\t\t\t";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 43)) {
            // line 44
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 46
        yield "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 48)) {
            // line 49
            yield "\t\t\t\t\t\t\t\t<div class=\"after-offcanvas hidden\">
\t\t\t\t\t\t\t\t\t";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 53
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"menu-bar\" class=\"menu-bar menu-bar-mobile d-xxl-none d-xl-none\">
\t\t\t\t\t\t\t<span class=\"one\"></span>
\t\t\t\t\t\t\t<span class=\"two\"></span>
\t\t\t\t\t\t\t<span class=\"three\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 61)) {
            // line 62
            yield "\t\t\t\t\t\t<div class=\"search-one__box\">
\t\t\t\t\t\t\t<span class=\"search-one__icon\"><i class=\"flaticon-magnifying-glass\"></i></span>
\t\t\t\t\t\t\t<div class=\"search-one__content\">  
\t\t\t\t\t\t\t\t";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 69
        yield "
\t\t\t\t\t";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user", [], "any", false, false, true, 70)) {
            // line 71
            yield "\t\t\t\t\t\t<div class=\"user-one__box\">
\t\t\t\t\t\t\t<span class=\"user-one__icon\"><span class=\"icon las la-user-circle\"></span></span>
\t\t\t\t\t\t\t<div class=\"user-one__content\">  
\t\t\t\t\t\t\t\t";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 78
        yield "\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>

</header>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "sticky_menu"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/page/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  186 => 78,  179 => 74,  174 => 71,  172 => 70,  169 => 69,  162 => 65,  157 => 62,  155 => 61,  145 => 53,  139 => 50,  136 => 49,  134 => 48,  130 => 46,  124 => 44,  122 => 43,  112 => 35,  106 => 33,  104 => 32,  96 => 27,  90 => 25,  87 => 24,  84 => 23,  82 => 22,  79 => 21,  72 => 16,  66 => 14,  64 => 13,  56 => 8,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/page/header.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/page/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 22);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                [],
                $this->source
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

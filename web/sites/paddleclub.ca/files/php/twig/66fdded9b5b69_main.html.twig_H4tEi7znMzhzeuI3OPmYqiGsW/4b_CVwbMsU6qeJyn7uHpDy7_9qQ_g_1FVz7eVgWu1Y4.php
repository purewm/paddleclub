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

/* @gowilds/page/main.html.twig */
class __TwigTemplate_dbd75caff671ea94662d6e65e6cb30c5 extends Template
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
        yield "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 4
        $context["cl_main"] = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ";
        // line 5
        yield "\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 5) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 5))) {
            yield "\t
\t\t\t";
            // line 6
            $context["cl_main"] = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ";
            // line 7
            yield "\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 7) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 7))) {
            yield "\t
\t\t\t";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 8)) {
                // line 9
                yield "\t\t\t \t";
                $context["cl_main"] = "col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-r ";
                // line 10
                yield "\t\t\t";
            }
            yield " \t\t
\t\t\t";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 11)) {
                // line 12
                yield "\t\t\t\t";
                $context["cl_main"] = "col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-l ";
                // line 13
                yield "\t\t\t";
            }
            yield "\t\t\t\t
      ";
        }
        // line 14
        yield " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null), 16, $this->source), "html", null, true);
        yield "\">
\t\t\t<div class=\"main-content-inner\">
\t\t\t\t";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 18)) {
            // line 19
            yield "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 23
        yield "\t\t\t</div>
\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 27)) {
            // line 28
            yield "\t\t\t";
            $context["cl_left"] = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2";
            // line 29
            yield "\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 29)) {
                // line 30
                yield "\t\t\t \t";
                $context["cl_left"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2";
                // line 31
                yield "\t\t\t";
            }
            yield " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_left"] ?? null), 33, $this->source), "html", null, true);
            yield " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 39
        yield "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 42)) {
            // line 43
            yield "\t\t\t";
            $context["cl_right"] = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3";
            // line 44
            yield "\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 44)) {
                // line 45
                yield "\t\t\t\t";
                $context["cl_right"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3";
                // line 46
                yield "\t\t\t";
            }
            yield "\t 

\t\t\t<div class=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_right"] ?? null), 48, $this->source), "html", null, true);
            yield " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 54
        yield "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@gowilds/page/main.html.twig";
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
        return array (  173 => 54,  166 => 50,  161 => 48,  155 => 46,  152 => 45,  149 => 44,  146 => 43,  144 => 42,  139 => 39,  132 => 35,  127 => 33,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  110 => 27,  104 => 23,  98 => 20,  95 => 19,  93 => 18,  88 => 16,  84 => 14,  78 => 13,  75 => 12,  73 => 11,  68 => 10,  65 => 9,  63 => 8,  58 => 7,  56 => 6,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@gowilds/page/main.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/page/main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 5);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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

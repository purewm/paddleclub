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

/* themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_edb89e47167699938038f847b57c5655 extends Template
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
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        yield "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 10
        yield from         $this->loadTemplate(($context["header_skin"] ?? null), "themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t\t
\t\t";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12)) {
            // line 13
            yield "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            yield "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 18
        yield "
\t\t<div role=\"main\" class=\"main main-page";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null), 19, $this->source), "html", null, true);
        yield "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 22)) {
            // line 23
            yield "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        yield "\t

\t\t\t";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 28)) {
            // line 29
            yield "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 37
        yield "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 39)) {
            // line 40
            yield "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 48
        yield "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container-full container-bg\">
\t\t\t\t\t";
        // line 53
        yield from         $this->loadTemplate("@gowilds/page/main-no-sidebar.html.twig", "themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 57)) {
            // line 58
            yield "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            yield "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 66
        yield "\t\t\t
\t\t</div>
\t</div>

\t";
        // line 70
        yield from         $this->loadTemplate("@gowilds/page/footer.html.twig", "themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig", 70)->unwrap()->yield($context);
        // line 71
        yield "</div>

";
        // line 73
        yield from         $this->loadTemplate("@gowilds/page/parts/quick-side.html.twig", "themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig", 73)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header_skin", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig";
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
        return array (  168 => 73,  164 => 71,  162 => 70,  156 => 66,  148 => 61,  143 => 58,  141 => 57,  136 => 54,  134 => 53,  127 => 48,  119 => 43,  114 => 40,  112 => 39,  108 => 37,  100 => 32,  95 => 29,  93 => 28,  89 => 26,  83 => 24,  80 => 23,  78 => 22,  72 => 19,  69 => 18,  63 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  50 => 10,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/page/page-layout/page--layout--fw.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "include" => 10, "if" => 12);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
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

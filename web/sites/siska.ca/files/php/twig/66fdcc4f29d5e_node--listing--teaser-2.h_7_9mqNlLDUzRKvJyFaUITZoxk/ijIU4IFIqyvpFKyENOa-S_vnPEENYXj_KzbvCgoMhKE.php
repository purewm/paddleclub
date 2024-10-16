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

/* themes/custom/gowilds/templates/listings/node/node--listing--teaser-2.html.twig */
class __TwigTemplate_a963422c159110a054b337e5b789600e extends Template
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
        // line 2
        $context["classes"] = ["node", "node-detail", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 6)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 7)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("node--unpublished") : ("")), ((        // line 9
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 9, $this->source)))) : ("")), "clearfix"];
        // line 13
        $context["conAddress"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_listing_address", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["conVideo"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_listing_video", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield "
<div class=\"listing-two__single teaser_2\">
\t<div class=\"listing-two__wrap\">  
\t\t<div class=\"listing-two__image\">
\t\t\t";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_image", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        yield "
\t\t</div>
\t\t<div class=\"listing-two__content\">  
\t\t\t<div class=\"listing-two__content-inner\">
\t\t\t\t<div class=\"listing-two__preview\">
\t\t\t\t\t";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_gallery", [], "any", false, false, true, 24)) {
            // line 25
            yield "\t\t\t\t\t\t<div class=\"listing-two__gallery gallery-popup\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_gallery", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            yield "</div>
\t\t\t\t\t";
        }
        // line 26
        yield "  
\t\t\t\t\t";
        // line 27
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_listing_video", [], "any", false, false, true, 27))) {
            // line 28
            yield "\t\t\t\t\t\t<div class=\"listing-two__video\">
\t\t\t\t\t\t\t<a class=\"popup-video\" href=\"";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["conVideo"] ?? null), 29, $this->source)), "html", null, true);
            yield "\"><i class=\"icon la la-video-camera\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 32
        yield "\t\t\t\t</div>
\t\t\t\t<h3 class=\"listing-two__title\"><a href=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 33, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 33, $this->source), "html", null, true);
        yield "</a></h3>
\t\t\t\t<div class=\"listing-two__meta\">
\t\t\t\t\t";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_listing_address", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35)) {
            // line 36
            yield "\t\t\t\t\t\t<div class=\"listing-two__address\"><i class=\"icon fas fa-map-marker-alt\"></i>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(($context["conAddress"] ?? null), 36, $this->source)), "html", null, true);
            yield "</div>
\t\t\t\t\t";
        }
        // line 38
        yield "\t\t\t\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_listing_price", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38)) {
            // line 39
            yield "\t\t\t\t\t\t<div class=\"listing-two__price\">
\t\t\t\t\t\t\t<i class=\"icon fa-solid fa-circle-dollar-to-slot\"></i>
\t\t\t\t\t\t\t";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("From"));
            yield " <span class=\"price-new\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_listing_price", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            yield "</span></div>
\t\t\t\t\t";
        }
        // line 43
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>  
\t
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/listings/node/node--listing--teaser-2.html.twig";
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
        return array (  129 => 43,  122 => 41,  118 => 39,  115 => 38,  109 => 36,  107 => 35,  100 => 33,  97 => 32,  91 => 29,  88 => 28,  86 => 27,  83 => 26,  77 => 25,  75 => 24,  67 => 19,  61 => 15,  56 => 14,  51 => 13,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/listings/node/node--listing--teaser-2.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/listings/node/node--listing--teaser-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 24);
        static $filters = array("clean_class" => 5, "escape" => 13, "render" => 27, "trim" => 29, "striptags" => 36, "t" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'render', 'trim', 'striptags', 't'],
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

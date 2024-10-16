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

/* themes/custom/gowilds/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_18d4f790c2c1d21ad84e6983db5a38b3 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "
";
        // line 16
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["site-branding"], "method", false, false, true, 16);
        // line 17
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "setting_logo", "site_name", "site_slogan"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "  ";
        if (($context["site_logo"] ?? null)) {
            // line 19
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\" class=\"site-branding-logo\">
      ";
            // line 20
            if (($context["setting_logo"] ?? null)) {
                // line 21
                yield "         <img class=\"logo-default\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), [".svg" => ".png"]), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" />
         <img class=\"logo-default logo-white hidden\" src=\"";
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 22, $this->source), ["logo.svg" => "logo-white.png"]), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" />
      ";
            } else {
                // line 23
                yield "  
        <img class=\"logo-site\" src=\"";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 24, $this->source), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" />
      ";
            }
            // line 25
            yield "  
    </a>
  ";
        }
        // line 28
        yield "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 29
            yield "    <div class=\"site-branding__text\">
      ";
            // line 30
            if (($context["site_name"] ?? null)) {
                // line 31
                yield "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" rel=\"home\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 32, $this->source), "html", null, true);
                yield "</a>
        </div>
      ";
            }
            // line 35
            yield "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 36
                yield "        <div class=\"site-branding__slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 36, $this->source), "html", null, true);
                yield "</div>
      ";
            }
            // line 38
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/block/block--system-branding-block.html.twig";
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
        return array (  133 => 38,  127 => 36,  124 => 35,  114 => 32,  111 => 31,  109 => 30,  106 => 29,  103 => 28,  98 => 25,  91 => 24,  88 => 23,  81 => 22,  74 => 21,  72 => 20,  65 => 19,  62 => 18,  50 => 17,  48 => 16,  45 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "block" => 17, "if" => 18);
        static $filters = array("t" => 19, "escape" => 21, "replace" => 21);
        static $functions = array("path" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['t', 'escape', 'replace'],
                ['path'],
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

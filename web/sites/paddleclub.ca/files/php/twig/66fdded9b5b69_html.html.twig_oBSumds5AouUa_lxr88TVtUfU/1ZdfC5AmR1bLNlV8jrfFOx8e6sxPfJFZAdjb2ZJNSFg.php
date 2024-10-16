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

/* themes/custom/gowilds/templates/page/html.html.twig */
class __TwigTemplate_c35e940d8b8b0208bc02d3d9136ab6d9 extends Template
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
        // line 26
        yield "<!DOCTYPE html>
<html";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        yield ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        yield "\">
    <title>";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        yield "\">

    <js-placeholder token=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        yield "\">

    ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 35, $this->source));
        yield "

    ";
        // line 37
        if (($context["customize_css"] ?? null)) {
            // line 38
            yield "      <style type=\"text/css\">
        ";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 39, $this->source));
            yield "
      </style>
    ";
        }
        // line 42
        yield "
    ";
        // line 43
        if (($context["customize_styles"] ?? null)) {
            // line 44
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null), 44, $this->source));
            yield "
    ";
        }
        // line 46
        yield "
    ";
        // line 47
        if (($context["pagebuilder_style"] ?? null)) {
            // line 48
            yield "      <style type=\"text/css\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["pagebuilder_style"] ?? null), 48, $this->source));
            yield "</style>
    ";
        }
        // line 50
        yield "
  </head>

  ";
        // line 53
        $context["body_classes"] = [((        // line 54
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), (( !        // line 55
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 55, $this->source))))), ((        // line 56
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 56, $this->source)))) : ("")), ((        // line 57
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 57, $this->source)))) : (""))];
        // line 60
        yield "
  <body";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        yield ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>

    ";
        // line 67
        if (($context["preloader"] ?? null)) {
            yield " 
      <div id=\"gva-preloader\" >
        <div id=\"preloader-inner\" class=\"cssload-container\">
          <div class=\"wait-text\">";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Please wait..."));
            yield " </div> 
          <div class=\"cssload-item cssload-moon\"></div>
        </div>
      </div>
    ";
        }
        // line 74
        yield "  

    ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 76, $this->source), "html", null, true);
        yield "
    ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 77, $this->source), "html", null, true);
        yield "
    ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 78, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 79, $this->source));
        yield "\">
    
    ";
        // line 81
        if (($context["addon_template"] ?? null)) {
            // line 82
            yield "      <div class=\"permission-save-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null), 82, $this->source), "html", null, true);
            yield "\">
         ";
            // line 83
            yield from             $this->loadTemplate(($context["addon_template"] ?? null), "themes/custom/gowilds/templates/page/html.html.twig", 83)->unwrap()->yield($context);
            // line 84
            yield "      </div>  
    ";
        }
        // line 86
        yield "    <div id=\"gva-overlay\"></div>
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "placeholder_token", "head_title", "links_google_fonts", "customize_css", "customize_styles", "pagebuilder_style", "logged_in", "root_path", "node_type", "node_id", "attributes", "preloader", "page_top", "page", "page_bottom", "addon_template", "save_customize_permission"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/page/html.html.twig";
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
        return array (  182 => 86,  178 => 84,  176 => 83,  171 => 82,  169 => 81,  164 => 79,  160 => 78,  156 => 77,  152 => 76,  148 => 74,  140 => 70,  134 => 67,  128 => 64,  122 => 61,  119 => 60,  117 => 57,  116 => 56,  115 => 55,  114 => 54,  113 => 53,  108 => 50,  102 => 48,  100 => 47,  97 => 46,  91 => 44,  89 => 43,  86 => 42,  80 => 39,  77 => 38,  75 => 37,  70 => 35,  65 => 33,  60 => 31,  56 => 30,  52 => 29,  47 => 27,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/page/html.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/page/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37, "set" => 53, "include" => 83);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 55, "t" => 64);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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

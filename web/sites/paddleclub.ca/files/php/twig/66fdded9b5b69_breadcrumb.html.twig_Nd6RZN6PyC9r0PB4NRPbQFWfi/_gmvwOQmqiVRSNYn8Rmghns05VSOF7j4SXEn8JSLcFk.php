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

/* themes/custom/gowilds/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_088834f4b7cabe19a5d919733dc2eff0 extends Template
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
        // line 10
        yield "<div class=\"breadcrumb-links\">
  <div class=\"content-inner\">
    ";
        // line 12
        if (($context["breadcrumb"] ?? null)) {
            // line 13
            yield "      <nav class=\"breadcrumb ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 13, $this->source), "html", null, true);
            yield "\" aria-labelledby=\"system-breadcrumb\">
        <ol>
          ";
            // line 15
            $context["i"] = 0;
            yield "  
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                yield "            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 18
                yield "            <li>
              ";
                // line 19
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19)) {
                    // line 20
                    yield "                <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    yield "</a>
              ";
                } else {
                    // line 22
                    yield "                ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    yield "
              ";
                }
                // line 24
                yield "              ";
                if ((($context["i"] ?? null) < (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumb"] ?? null)) - 1))) {
                    // line 25
                    yield "                <span class=\"\">&nbsp;/&nbsp;</span>
              ";
                }
                // line 26
                yield "  
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "          <li></li>
        </ol>
      </nav>
    ";
        }
        // line 33
        yield "  </div> 
</div>  ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "background"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/navigation/breadcrumb.html.twig";
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
        return array (  107 => 33,  101 => 29,  93 => 26,  89 => 25,  86 => 24,  80 => 22,  72 => 20,  70 => 19,  67 => 18,  64 => 17,  60 => 16,  56 => 15,  50 => 13,  48 => 12,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "set" => 15, "for" => 16);
        static $filters = array("escape" => 13, "length" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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

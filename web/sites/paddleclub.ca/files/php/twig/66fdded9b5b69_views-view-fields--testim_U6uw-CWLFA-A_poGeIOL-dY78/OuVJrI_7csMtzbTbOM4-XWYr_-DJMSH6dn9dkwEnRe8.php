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

/* themes/custom/gowilds/templates/views/testimonial/views-view-fields--testimonial-1.html.twig */
class __TwigTemplate_3acfc3481f0eb806b7d9139d248e81b7 extends Template
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
        yield "<article class=\"testimonial-one__single\">      
   <div class=\"testimonial-one__content\">
      <div class=\"testimonial-one__quote\">
         <div class=\"testimonial-one__stars\"> 
            <i class=\"fa fa-star\"></i> 
            <i class=\"fa fa-star\"></i> 
            <i class=\"fa fa-star\"></i> 
            <i class=\"fa fa-star\"></i> 
            <i class=\"fa fa-star\"></i>
         </div>
         ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source))), "html", null, true);
        yield "
         <span class=\"testimonial-one__quote-icon\"><i class=\"gwflaticon-quote\"></i></span>
         <span class=\"testimonial-one__arrow\"> <span class=\"first\"></span> <span class=\"second\"></span> </span>
      </div>  
      <div class=\"testimonial-one__meta\">
         <div class=\"testimonial-one__avatar\">
            ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_testimonial_avatar", [], "any", false, false, true, 17), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        yield "
         </div>
         <div class=\"testimonial-one__info\">
            <h3 class=\"testimonial-one__name\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_testimonial_name", [], "any", false, false, true, 20), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        yield "</h3>
            <div class=\"testimonial-one__job\">";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_testimonial_job", [], "any", false, false, true, 21), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        yield "</div>   
         </div>
      </div>
   </div>
</article>
  ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/views/testimonial/views-view-fields--testimonial-1.html.twig";
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
        return array (  75 => 21,  71 => 20,  65 => 17,  56 => 11,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/views/testimonial/views-view-fields--testimonial-1.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/views/testimonial/views-view-fields--testimonial-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 11, "trim" => 11, "striptags" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trim', 'striptags'],
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

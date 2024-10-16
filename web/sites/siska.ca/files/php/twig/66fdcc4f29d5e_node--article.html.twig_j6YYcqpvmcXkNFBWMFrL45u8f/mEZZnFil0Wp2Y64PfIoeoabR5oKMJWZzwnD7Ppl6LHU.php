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

/* themes/custom/gowilds/templates/node/node--article.html.twig */
class __TwigTemplate_e8fab2a21cda39d61125da8c11ada68f extends Template
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
        yield "
<!-- Start Display article for teaser page -->
";
        // line 15
        if ((($context["view_mode"] ?? null) == "teaser")) {
            yield " 
  <div class=\"post-block teaser-1\">
    <div class=\"post-image\">
      ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "
      <div class=\"post-created\"> 
        <span class=\"day\">";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 20), 20, $this->source), "d"), "html", null, true);
            yield "</span>
        <span class=\"month\">";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 21), 21, $this->source), "M"), "html", null, true);
            yield "</span>
      </div>
    </div>
    <div class=\"post-content\">
        ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            yield "
        <div class=\"post-content-inner\">
          <div class=\"post-meta\">
            <span class=\"post-author\"><i class=\"fas fa-user-circle\"></i>";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 28, $this->source), "html", null, true);
            yield "</span>
            <span class=\"post-comment\"><i class=\"fas fa-comments\"></i>";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 29, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            yield "</span>
          </div>
          <h3 class=\"post-title\"> <a href=\"";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 31, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 31, $this->source), "html", null, true);
            yield "</a> </h3> 
          <div class=\"post-desc\">";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            yield "</div>  
          <div class=\"read-more\"><a class=\"btn-inline\" href=\"";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 33, $this->source), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            yield "</a> </div>   
        </div>      
    </div>
  </div>

";
        } elseif ((        // line 38
($context["view_mode"] ?? null) == "teaser_2")) {
            yield " 
  <div class=\"post-block teaser-2\">
    <div class=\"content-wrap\">
      <div class=\"post-content\">
          <div class=\"post-meta\">
            <div class=\"avatar\">
              <i class=\"fas fa-user-circle\"></i>
            </div>
            <div class=\"content-inner\">
              <span class=\"post-author\"><i class=\"fas fa-user-circle\"></i>";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 47, $this->source), "html", null, true);
            yield "</span>
              <span class=\"post-comment\"><i class=\"fas fa-comments\"></i>";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 48, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            yield "</span>
            </div>
          </div>
          <h3 class=\"post-title\"> <a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 51, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 51, $this->source), "html", null, true);
            yield "</a> </h3>    
          <div class=\"post-desc\">";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            yield "</div>   
          <a class=\"read-more\" href=\"";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 53, $this->source), "html", null, true);
            yield "\">
            <span>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            yield "</span>
            <i class=\"las la-arrow-right\"></i>
          </a>      
      </div>
      <div class=\"post-image\">
        ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "
        <div class=\"post-created\"> 
          <span class=\"day\">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 61), 61, $this->source), "d"), "html", null, true);
            yield "</span>
          <span class=\"month\">";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 62), 62, $this->source), "M"), "html", null, true);
            yield "</span>
        </div>
      </div>
    </div>
  </div>
";
        } elseif ((        // line 67
($context["view_mode"] ?? null) == "teaser_3")) {
            yield " 
  <div class=\"post-block teaser-3\">
    <div class=\"post-image\">
      ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            yield "
      <div class=\"post-created\"> 
        <span class=\"day\">";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 72), 72, $this->source), "d"), "html", null, true);
            yield "</span>
        <span class=\"month\">";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 73), 73, $this->source), "M"), "html", null, true);
            yield "</span>
      </div>
    </div>
    <div class=\"post-content\">
        ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            yield "
        <div class=\"post-content-inner\">
          <div class=\"post-meta\">
            <span class=\"post-author\"><i class=\"fas fa-user-circle\"></i>";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 80, $this->source), "html", null, true);
            yield "</span>
            <span class=\"post-comment\"><i class=\"fas fa-comments\"></i>";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 81, $this->source), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Comments"));
            yield "</span>
          </div>
          <h3 class=\"post-title\"> <a href=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 83, $this->source), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source), "html", null, true);
            yield "</a> </h3>  
        </div>      
    </div>
  </div>
<!-- End Display article for teaser page -->
";
        } else {
            // line 89
            yield "<!-- Start Display article for detail page -->

<article";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            yield ">
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail post-";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["post_format"] ?? null), 94, $this->source), "html", null, true);
            yield "\">
      ";
            // line 95
            if (((($context["post_format"] ?? null) == "video") || ((($context["post_format"] ?? null) == "audio") && ($context["gva_iframe"] ?? null)))) {
                // line 96
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null), 96, $this->source));
                yield "
      ";
            } elseif (((            // line 97
($context["post_format"] ?? null) == "gallery") && CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_gallery", [], "any", false, false, true, 97))) {
                // line 98
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_gallery", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                yield "
      ";
            } else {
                // line 100
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                yield "
      ";
            }
            // line 101
            yield "  
    </div>

    <div class=\"post-content\">
      <div class=\"post-meta\">
        <span class=\"post-author\"><i class=\"fas fa-user-circle\"></i>";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 106, $this->source), "html", null, true);
            yield "</span>
        <span class=\"post-categories\"><i class=\"fas fa-folder-open\"></i>";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_post_category", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            yield "</span>
      </div> 
      ";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 109, $this->source), "html", null, true);
            yield "
         <h1";
            // line 110
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["post-title"], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 110, $this->source), "html", null, true);
            yield "</h1>
      ";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 111, $this->source), "html", null, true);
            yield "  
      ";
            // line 112
            if (($context["display_submitted"] ?? null)) {
                // line 113
                yield "        <div class=\"node__meta hidden\">
          ";
                // line 114
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 114, $this->source), "html", null, true);
                yield "
          <span";
                // line 115
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 115, $this->source), "html", null, true);
                yield ">
            ";
                // line 116
                yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 117
                yield "          </span>
          ";
                // line 118
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 118, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 121
            yield "
      <div";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 122), 122, $this->source), "html", null, true);
            yield ">
        ";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 123, $this->source), "field_image", "field_post_category", "field_post_format", "field_post_type", "field_post_embed", "field_post_gallery", "comment"), "html", null, true);
            yield "
      </div>
      ";
            // line 125
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 125)) {
                // line 126
                yield "        <div id=\"node-single-comment\">
          ";
                // line 127
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 129
            yield "  

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "author_name", "comment_count", "url", "label", "attributes", "post_format", "gva_iframe", "title_prefix", "title_attributes", "title_suffix", "display_submitted", "author_picture", "author_attributes", "date", "metadata", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gowilds/templates/node/node--article.html.twig";
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
        return array (  339 => 129,  333 => 127,  330 => 126,  328 => 125,  323 => 123,  319 => 122,  316 => 121,  310 => 118,  307 => 117,  305 => 116,  301 => 115,  297 => 114,  294 => 113,  292 => 112,  288 => 111,  282 => 110,  278 => 109,  273 => 107,  269 => 106,  262 => 101,  256 => 100,  250 => 98,  248 => 97,  243 => 96,  241 => 95,  237 => 94,  231 => 91,  227 => 89,  216 => 83,  209 => 81,  205 => 80,  199 => 77,  192 => 73,  188 => 72,  183 => 70,  177 => 67,  169 => 62,  165 => 61,  160 => 59,  152 => 54,  148 => 53,  144 => 52,  138 => 51,  130 => 48,  126 => 47,  114 => 38,  104 => 33,  100 => 32,  94 => 31,  87 => 29,  83 => 28,  77 => 25,  70 => 21,  66 => 20,  61 => 18,  55 => 15,  51 => 13,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gowilds/templates/node/node--article.html.twig", "/var/www/html/web/themes/custom/gowilds/templates/node/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 15, "trans" => 116);
        static $filters = array("clean_class" => 5, "escape" => 18, "date" => 20, "t" => 29, "raw" => 96, "without" => 123);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'date', 't', 'raw', 'without'],
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

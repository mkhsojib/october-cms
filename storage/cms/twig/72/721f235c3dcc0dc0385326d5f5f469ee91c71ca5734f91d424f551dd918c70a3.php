<?php

/* /Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/partials/site/header.htm */
class __TwigTemplate_1b7fe83e6ca9c56045c0be4ed0d54262ab00f365a1d81997231b6a95f9fabac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
        </h1>
        <p class=\"site-motto\">
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_motto", array()), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
        </h1>
        <p class=\"site-motto\">
            {{ this.theme.site_motto }}
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
</div>", "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/partials/site/header.htm", "");
    }
}

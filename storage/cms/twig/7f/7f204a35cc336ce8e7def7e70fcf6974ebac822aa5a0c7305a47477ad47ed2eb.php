<?php

/* /Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_2f2490c0aa88195f4c4b7e6f33cc392bf93f10352726213565620d7853165190 extends Twig_Template
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
        echo "<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - {{ \"now\"|date(\"Y\") }}
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>", "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}

<?php

/* /Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/layouts/default.htm */
class __TwigTemplate_52e4519e7d00ed8d64be251baf3d8b15b0626b7db80da5b3e1dca65f2811f2c9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 22
        echo "            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  74 => 31,  68 => 27,  64 => 26,  58 => 22,  56 => 21,  50 => 17,  46 => 16,  40 => 12,  36 => 11,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'site/header' %}
            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                {% partial 'site/sidebar' %}
            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'site/footer' %}
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>", "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/layouts/default.htm", "");
    }
}

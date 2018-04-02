<?php

/* /Volumes/SSD/htdocs/acmewithoctobercms/themes/acme/pages/home.htm */
class __TwigTemplate_3bb37c41efa247d2d184f07288681347350e82114796927b94ab692cbd55222c extends Twig_Template
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
        echo "<div class=\"jumbotron\">
  <h1>Hello, world!</h1>
  <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
  <p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" role=\"button\">About</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Volumes/SSD/htdocs/acmewithoctobercms/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
  <h1>Hello, world!</h1>
  <p>{{this.theme.site_name}}</p>
    <p>{{this.theme.site_description}}</p>
  <p><a class=\"btn btn-primary btn-lg\" href=\"{{ 'about'|page }}\" role=\"button\">About</a></p>
</div>", "/Volumes/SSD/htdocs/acmewithoctobercms/themes/acme/pages/home.htm", "");
    }
}

<?php

/* /Volumes/SSD/htdocs/acmewithoctobercms/themes/acme/pages/about.htm */
class __TwigTemplate_e81b6f48390b6f07116f356146f21f53391da3168c3f8a1a66cced935b86d56b extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, debitis, officiis, modi animi laborum minus voluptatem veniam et enim pariatur rem nostrum vel alias asperiores aliquid itaque labore dolore numquam?</p>

<hr>
";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Volumes/SSD/htdocs/acmewithoctobercms/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, debitis, officiis, modi animi laborum minus voluptatem veniam et enim pariatur rem nostrum vel alias asperiores aliquid itaque labore dolore numquam?</p>

<hr>
{% component 'resourcesLinks' %}", "/Volumes/SSD/htdocs/acmewithoctobercms/themes/acme/pages/about.htm", "");
    }
}

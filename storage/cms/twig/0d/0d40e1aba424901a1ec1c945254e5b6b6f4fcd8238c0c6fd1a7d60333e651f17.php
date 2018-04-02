<?php

/* /Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_8c2eed0053b10782f641fc98f2e3cd91d27c55dac4e47aba4f8ddd7d7178a2a4 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<form>
    <div class=\"form-group\">
      <label for=\"email\">Email:</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" name=\"email\">
    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Password:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Enter password\" name=\"pwd\">
    </div>
 
    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
  </form>";
    }

    public function getTemplateName()
    {
        return "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
<form>
    <div class=\"form-group\">
      <label for=\"email\">Email:</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" name=\"email\">
    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Password:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Enter password\" name=\"pwd\">
    </div>
 
    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
  </form>", "/Volumes/SSD/htdocs/acmewithoctobercms/themes/responsiv-clean/pages/contact.htm", "");
    }
}

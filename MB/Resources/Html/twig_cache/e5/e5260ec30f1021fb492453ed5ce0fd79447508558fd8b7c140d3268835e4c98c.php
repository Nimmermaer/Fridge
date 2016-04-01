<?php

/* Index.html */
class __TwigTemplate_c2a32f8a6928f5150160b481caf2cb3af9d0750b1de4e79e6e7845650406e74c extends Twig_Template
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
<html lang=\"de\">

";
        // line 4
        $this->loadTemplate("Header.html", "Index.html", 4)->display($context);
        // line 5
        echo "
<body>
<div class=\"container\">
    <div class=\"col-md-12\">
        ";
        // line 9
        $this->loadTemplate("Fridge.html", "Index.html", 9)->display($context);
        // line 10
        echo "    </div>

</div>
";
        // line 13
        $this->loadTemplate("Footer.html", "Index.html", 13)->display($context);
        // line 14
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  39 => 13,  34 => 10,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="de">*/
/* */
/* {% include 'Header.html' %}*/
/* */
/* <body>*/
/* <div class="container">*/
/*     <div class="col-md-12">*/
/*         {% include 'Fridge.html' %}*/
/*     </div>*/
/* */
/* </div>*/
/* {% include 'Footer.html' %}*/
/* </body>*/
/* </html>*/

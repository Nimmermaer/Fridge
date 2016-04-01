<?php

/* Fridge.html */
class __TwigTemplate_295446d6a76e3a4f2ae082e7bf3b814b782c4b051619afc61df25a428222d879 extends Twig_Template
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
        echo "<form method=\"POST\" action=\"\">
    <div id=\"Create\" class=\"panel panel-default\">
        <div class=\"panel-heading\"><label for=\"volume\">Kühlschrank Volumen</label></div>
        <div class=\"panel-body\">
            <div class=\"form-inline\">
                <input class=\"form-control\" id=\"volume\" min=\"0\" type=\"number\" name=\"fridge[volume]\">
                <input class=\"btn btn-default\" type=\"submit\" id=\"Submit\" value=\"Erstellen\">
            </div>
        </div>
    </div>
    <div id=\"Fridge\" class=\"panel panel-default\">
        <div class=\"panel-heading\">Kühlschrank erstellen</div>
        <div class=\"panel-body\">
            <div class=\"form-inline\">
                <input class=\"form-control\" id=\"Temperature\" min=\"3\" max=\"7\" type=\"number\" value=\"3\"
                       name=\"fridge[temperature]\">
                <label for=\"Temperature\">Temperatur</label>
            </div>
            <div class=\"form-inline\">
                <input  id=\"Energy\" type=\"checkbox\" name=\"fridge[energy]\">
                <label for=\"Energy\">Energie vorhanden</label>
            </div>
            <div class=\"form-inline\">
                <input  id=\"stateDoor\" type=\"checkbox\" name=\"fridge[stateDoor]\">
                <label for=\"stateDoor\">Tür</label>
            </div>
            <div class=\"form-inline\">
                <input  id=\"stateLight\" type=\"checkbox\" name=\"fridge[stateLight]\">
                <label for=\"stateLight\">Licht</label>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "Fridge.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <form method="POST" action="">*/
/*     <div id="Create" class="panel panel-default">*/
/*         <div class="panel-heading"><label for="volume">Kühlschrank Volumen</label></div>*/
/*         <div class="panel-body">*/
/*             <div class="form-inline">*/
/*                 <input class="form-control" id="volume" min="0" type="number" name="fridge[volume]">*/
/*                 <input class="btn btn-default" type="submit" id="Submit" value="Erstellen">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div id="Fridge" class="panel panel-default">*/
/*         <div class="panel-heading">Kühlschrank erstellen</div>*/
/*         <div class="panel-body">*/
/*             <div class="form-inline">*/
/*                 <input class="form-control" id="Temperature" min="3" max="7" type="number" value="3"*/
/*                        name="fridge[temperature]">*/
/*                 <label for="Temperature">Temperatur</label>*/
/*             </div>*/
/*             <div class="form-inline">*/
/*                 <input  id="Energy" type="checkbox" name="fridge[energy]">*/
/*                 <label for="Energy">Energie vorhanden</label>*/
/*             </div>*/
/*             <div class="form-inline">*/
/*                 <input  id="stateDoor" type="checkbox" name="fridge[stateDoor]">*/
/*                 <label for="stateDoor">Tür</label>*/
/*             </div>*/
/*             <div class="form-inline">*/
/*                 <input  id="stateLight" type="checkbox" name="fridge[stateLight]">*/
/*                 <label for="stateLight">Licht</label>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */

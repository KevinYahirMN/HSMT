<?php
include_once('../suggestions/basicScales/additionals/twoScaleSuggestions.php');
include_once('../suggestions/basicScales/additionals/threeScaleSuggestions.php');
include_once('../suggestions/basicScales/additionals/maxScales.php');
class collectorAditional{

    private $twoSuggestions;
    private $threeSuggestions;
    private $maxScales;
    private $positions;
    private $counts;

    //Inicialización de objetos y variables globales
    function __construct($count = array()){
        if($this->twoSuggestions == null){
            $this->twoSuggestions = new twoScaleSuggestions;
            $this->threeSuggestions = new threeScaleSuggestions;
            $this->maxScales = new maxScales($count);
            $this->counts = $this->maxScales->maxCounts();
            $this->positions = $this->maxScales->maxPositions();
        }
    }

    function collect_Two_Combination(){
        $text = $this->twoSuggestions->combination($this->positions, $this->counts);
        return $text;
    }

    function collect_Three_Combination(){
        $text = $this->threeSuggestions->combination($this->positions, $this->counts);
        return $text;
    }
}
?>
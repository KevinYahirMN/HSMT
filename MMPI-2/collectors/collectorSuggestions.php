<?php
include_once('collectorMMPI.php');
include_once('suggestions/basicSuggestions.php');
include_once('suggestions/contentSuggestions.php');
include_once('suggestions/supplementarySuggestions.php');

class collectorSuggestions extends collectorMMPI{

    private $basic;
    private $content;
    private $supplementary;

    //Inicialización de objetos y variables globales
    function __construct(){
        if($this->basic == null){
            $this->basic = new basicSuggestion;
            $this->content = new contentSuggestion;
            $this->supplementary = new supplementarySuggestion;
        }
    }

    function collect_Basic($score = array()){
        $count = parent::collector($this->basic, $score);
        return $count;
    }

    function collect_Content($score = array()){
        $count = parent::collector($this->content, $score);
        return $count;
    }

    function collect_Supplementary($score = array()){
        $count = parent::collector($this->supplementary, $score);
        return $count;
    }
}
?>
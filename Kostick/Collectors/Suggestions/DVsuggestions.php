<?php
include('../Suggestions/ModusVivendi/suggestions_T.php');
include('../Suggestions/ModusVivendi/suggestions_V.php');
include('../Suggestions/PowerLevel/suggestions_A.php');
include('../Suggestions/PowerLevel/suggestions_G.php');
include('../Suggestions/PowerLevel/suggestions_N.php');
class DVsuggestions{
    private $t;
    private $v;
    private $n;
    private $g;
    private $a;

    function __construct(){
        if($this->t == null){
            $this->t = new suggestions_T;
            $this->v = new suggestions_V;
            $this->n = new suggestions_N;
            $this->g = new suggestions_G;
            $this->a = new suggestions_A;
        }
    }

    function collect($count = array()){
        $suggestions = array();
        
        array_push($suggestions, $this->positive($count[0], $this->t));
        array_push($suggestions, $this->negative($count[0], $this->t));
        array_push($suggestions, $this->positive($count[1], $this->v));
        array_push($suggestions, $this->negative($count[1], $this->v));
        array_push($suggestions, $this->positive($count[2], $this->n));
        array_push($suggestions, $this->negative($count[2], $this->n));
        array_push($suggestions, $this->positive($count[3], $this->g));
        array_push($suggestions, $this->negative($count[3], $this->g));
        array_push($suggestions, $this->positive($count[4], $this->a));
        array_push($suggestions, $this->negative($count[4], $this->a));
        
        return $suggestions;
    }

    private function positive($count = array(), $obj = null){
        switch($count){
            case 0: $suggestion = $obj->lowPositive(); break;
            case $count < 3: $suggestion = $obj->lowPositive(); break;
            case $count > 6: $suggestion = $obj->highPositive(); break;
            default: $suggestion = "Puntuación normal"; break;
        }

        return $suggestion;
    }
    
    private function negative($count = array(), $obj = null){
        switch($count){
            case 0: $suggestion = $obj->lowNegative(); break;
            case $count < 3: $suggestion = $obj->lowNegative(); break;
            case $count > 6: $suggestion = $obj->highNegative(); break;
            default: $suggestion = "Puntuación normal"; break;
        }

        return $suggestion;
    }
}
?>
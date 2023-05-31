<?php
include('../Suggestions/Leadership/suggestions_L.php');
include('../Suggestions/Leadership/suggestions_P.php');
include('../Suggestions/Leadership/suggestions_I.php');
include('../Suggestions/AdaptabiltyAtWork/suggestions_C.php');
include('../Suggestions/AdaptabiltyAtWork/suggestions_D.php');
include('../Suggestions/AdaptabiltyAtWork/suggestions_R.php');
include('../Suggestions/Subordination/suggestions_F.php');
include('../Suggestions/Subordination/suggestions_W.php');
class DAAsuggestions{
    private $l;
    private $p;
    private $i;
    private $c;
    private $d;
    private $r;
    private $f;
    private $w;

    function __construct(){
        if($this->l == null){
            $this->l = new suggestions_L; 
            $this->p = new suggestions_P; 
            $this->i = new suggestions_I; 
            $this->c = new suggestions_C; 
            $this->d = new suggestions_D; 
            $this->r = new suggestions_R; 
            $this->f = new suggestions_F; 
            $this->w = new suggestions_W; 
        }
    }

    function collect($count = array()){
        $suggestions = array();
        
        array_push($suggestions, $this->positive($count[0], $this->l));
        array_push($suggestions, $this->negative($count[0], $this->l));
        array_push($suggestions, $this->positive($count[1], $this->p));
        array_push($suggestions, $this->negative($count[1], $this->p));
        array_push($suggestions, $this->positive($count[2], $this->i));
        array_push($suggestions, $this->negative($count[2], $this->i));
        array_push($suggestions, $this->positive($count[3], $this->f));
        array_push($suggestions, $this->negative($count[3], $this->f));
        array_push($suggestions, $this->positive($count[4], $this->w));
        array_push($suggestions, $this->negative($count[4], $this->w));
        array_push($suggestions, $this->positive($count[5], $this->c));
        array_push($suggestions, $this->negative($count[5], $this->c));
        array_push($suggestions, $this->positive($count[6], $this->d));
        array_push($suggestions, $this->negative($count[6], $this->d));
        array_push($suggestions, $this->positive($count[7], $this->r));
        array_push($suggestions, $this->negative($count[7], $this->r));
        
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
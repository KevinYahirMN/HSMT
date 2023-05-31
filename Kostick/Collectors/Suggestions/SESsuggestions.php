<?php
include('../Suggestions/Emotionality/suggestions_E.php');
include('../Suggestions/Emotionality/suggestions_K.php');
include('../Suggestions/Emotionality/suggestions_Z.php');
include('../Suggestions/SocialNature/suggestions_X.php');
include('../Suggestions/SocialNature/suggestions_S.php');
include('../Suggestions/SocialNature/suggestions_B.php');
include('../Suggestions/SocialNature/suggestions_O.php');
class SESsuggestions{
    private $e;
    private $k;
    private $z;
    private $x;
    private $s;
    private $b;
    private $o;

    function __construct(){
        if($this->e == null){
            $this->e = new suggestions_E;
            $this->k = new suggestions_K;
            $this->z = new suggestions_Z;
            $this->x = new suggestions_X;
            $this->s = new suggestions_S;
            $this->b = new suggestions_B;
            $this->o = new suggestions_O;
        }
    }
    function collect($count = array()){
        $suggestions = array();
        
        array_push($suggestions, $this->positive($count[0], $this->x));
        array_push($suggestions, $this->negative($count[0], $this->x));
        array_push($suggestions, $this->positive($count[1], $this->s));
        array_push($suggestions, $this->negative($count[1], $this->s));
        array_push($suggestions, $this->positive($count[2], $this->b));
        array_push($suggestions, $this->negative($count[2], $this->b));
        array_push($suggestions, $this->positive($count[3], $this->o));
        array_push($suggestions, $this->negative($count[3], $this->o));
        array_push($suggestions, $this->positive($count[4], $this->k));
        array_push($suggestions, $this->negative($count[4], $this->k));
        array_push($suggestions, $this->positive($count[5], $this->e));
        array_push($suggestions, $this->negative($count[5], $this->e));
        array_push($suggestions, $this->positive($count[6], $this->z));
        array_push($suggestions, $this->negative($count[6], $this->z));
        
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
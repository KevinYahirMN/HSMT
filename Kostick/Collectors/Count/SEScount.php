<?php
include('../Scales/Emotionality/scale_E.php');
include('../Scales/Emotionality/scale_K.php');
include('../Scales/Emotionality/scale_Z.php');
include('../Scales/SocialNature/scale_X.php');
include('../Scales/SocialNature/scale_S.php');
include('../Scales/SocialNature/scale_B.php');
include('../Scales/SocialNature/scale_O.php');

class SEScount{
    private $e;
    private $k;
    private $z;
    private $x;
    private $s;
    private $b;
    private $o;

    function __construct(){
        if($this->e == null){
            $this->e = new scale_E;
            $this->k = new scale_K;
            $this->z = new scale_Z;
            $this->x = new scale_X;
            $this->s = new scale_S;
            $this->b = new scale_B;
            $this->o = new scale_O;
        }
    }

    function collect($answer = array()){
        $count = array();
        
        array_push($count, $this->revision($answer, $this->x));
        array_push($count, $this->revision($answer, $this->s));
        array_push($count, $this->revision($answer, $this->b));
        array_push($count, $this->revision($answer, $this->o));
        array_push($count, $this->revision($answer, $this->k));
        array_push($count, $this->revision($answer, $this->e));
        array_push($count, $this->revision($answer, $this->z));
        
        return $count;
    }

    private function revision($answer = array(), $obj = null){
        $count = $obj->scale($answer);
        return $count;
    }
}
?>
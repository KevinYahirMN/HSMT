<?php
include('../Scales/ModusVivendi/scale_T.php');
include('../Scales/ModusVivendi/scale_V.php');
include('../Scales/PowerLevel/scale_A.php');
include('../Scales/PowerLevel/scale_G.php');
include('../Scales/PowerLevel/scale_N.php');
class DVcount{
    private $t;
    private $v;
    private $n;
    private $g;
    private $a;

    function __construct(){
        if($this->t == null){
            $this->t = new scale_T; 
            $this->v = new scale_V; 
            $this->n = new scale_N; 
            $this->g = new scale_G; 
            $this->a = new scale_A;
        }
    }

    function collect($answer = array()){
        $count = array();
        
        array_push($count, $this->revision($answer, $this->t));
        array_push($count, $this->revision($answer, $this->v));
        array_push($count, $this->revision($answer, $this->n));
        array_push($count, $this->revision($answer, $this->g));
        array_push($count, $this->revision($answer, $this->a));
        
        return $count;
    }

    private function revision($answer = array(), $obj = null){
        $count = $obj->scale($answer);
        return $count;
    }
}

?>
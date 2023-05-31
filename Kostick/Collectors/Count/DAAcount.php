<?php
include('../Scales/Leadership/scale_L.php');
include('../Scales/Leadership/scale_P.php');
include('../Scales/Leadership/scale_I.php');
include('../Scales/AdaptabilityAtWork/scale_C.php');
include('../Scales/AdaptabilityAtWork/scale_D.php');
include('../Scales/AdaptabilityAtWork/scale_R.php');
include('../Scales/Subordination/scale_F.php');
include('../Scales/Subordination/scale_W.php');
class DAAcount{
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
            $this->l = new scale_L; 
            $this->p = new scale_P; 
            $this->i = new scale_I; 
            $this->c = new scale_C; 
            $this->d = new scale_D; 
            $this->r = new scale_R; 
            $this->f = new scale_F; 
            $this->w = new scale_W; 
        }
    }
    
    function collect($answer = array()){
        $count = array();
        
        array_push($count, $this->revision($answer, $this->l));
        array_push($count, $this->revision($answer, $this->p));
        array_push($count, $this->revision($answer, $this->i));
        array_push($count, $this->revision($answer, $this->f));
        array_push($count, $this->revision($answer, $this->w));
        array_push($count, $this->revision($answer, $this->c));
        array_push($count, $this->revision($answer, $this->d));
        array_push($count, $this->revision($answer, $this->r));
        
        return $count;
    }

    private function revision($answer = array(), $obj = null){
        $count = $obj->scale($answer);
        return $count;
    }
}
?>
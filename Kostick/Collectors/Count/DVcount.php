<?php
include('../Scales/ModusVivendi/scale_T.php');
include('../Scales/ModusVivendi/scale_V.php');
include('../Scales/PowerLevel/scale_A.php');
include('../Scales/PowerLevel/scale_G.php');
include('../Scales/PowerLevel/scale_N.php');
class DVcount{
    function collect($answer = array()){
        $c = array();
        
        array_push($c, $this->scale_T($answer));
        array_push($c, $this->scale_V($answer));
        array_push($c, $this->scale_N($answer));
        array_push($c, $this->scale_G($answer));
        array_push($c, $this->scale_A($answer));
        
        return $c;
    }

    private function scale_T($answer = array()){
        $obj = new scale_T;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_V($answer = array()){
        $obj = new scale_V;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_N($answer = array()){
        $obj = new scale_N;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_G($answer = array()){
        $obj = new scale_G;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_A($answer = array()){
        $obj = new scale_A;
        $c = $obj->scale($answer);
        return $c;
    }
}
?>
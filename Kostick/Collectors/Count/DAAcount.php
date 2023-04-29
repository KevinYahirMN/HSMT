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
    
    function collect($answer){
        $c = array();
        
        array_push($c, $this->scale_L($answer));
        array_push($c, $this->scale_P($answer));
        array_push($c, $this->scale_I($answer));
        array_push($c, $this->scale_F($answer));
        array_push($c, $this->scale_W($answer));
        array_push($c, $this->scale_C($answer));
        array_push($c, $this->scale_D($answer));
        array_push($c, $this->scale_R($answer));
        
        return $c;
    }

    private function scale_L($answer){
        $obj = new scale_L;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_P($answer){
        $obj = new scale_P;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_I($answer){
        $obj = new scale_I;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_F($answer){
        $obj = new scale_F;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_W($answer){
        $obj = new scale_W;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_C($answer){
        $obj = new scale_C;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_D($answer){
        $obj = new scale_D;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_R($answer){
        $obj = new scale_R;
        $c = $obj->scale($answer);
        return $c;
    }
}
?>
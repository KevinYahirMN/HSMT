<?php
class DVcount implements ICollectorCount{
    function collect($answer){
        $c = array();
        
        array_push($c, $this->scale_T($answer));
        array_push($c, $this->scale_V($answer));
        array_push($c, $this->scale_N($answer));
        array_push($c, $this->scale_G($answer));
        array_push($c, $this->scale_A($answer));
        
        return $c;
    }

    private function scale_T($answer){
        $obj = new scale_T;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_V($answer){
        $obj = new scale_V;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_N($answer){
        $obj = new scale_N;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_G($answer){
        $obj = new scale_G;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_A($answer){
        $obj = new scale_A;
        $c = $obj->scale($answer);
        return $c;
    }
}
?>
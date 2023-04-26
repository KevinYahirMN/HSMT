<?php
class countSES implements ICollectorCount{
    function collect($answer){
        $c = array();
        
        array_push($c, $this->scale_X($answer));
        array_push($c, $this->scale_S($answer));
        array_push($c, $this->scale_B($answer));
        array_push($c, $this->scale_O($answer));
        array_push($c, $this->scale_K($answer));
        array_push($c, $this->scale_E($answer));
        array_push($c, $this->scale_Z($answer));
        
        return $c;
    }

    private function scale_X($answer){
        $obj = new scale_X;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_S($answer){
        $obj = new scale_S;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_B($answer){
        $obj = new scale_B;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_O($answer){
        $obj = new scale_O;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_K($answer){
        $obj = new scale_K;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_E($answer){
        $obj = new scale_E;
        $c = $obj->scale($answer);
        return $c;
    }

    private function scale_Z($answer){
        $obj = new scale_Z;
        $c = $obj->scale($answer);
        return $c;
    }
}
?>
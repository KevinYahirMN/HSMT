<?php
include_once('../scales/scale_CS.php');
include_once('../scales/scale_DM.php');
include_once('../scales/scale_IP.php');
include_once('../scales/scale_IR.php');
include_once('../scales/scale_SF.php');

class collectorCount{

    function collec($obj){
        $class = get_class($obj);
        $count = 0;
        switch($class){
            case "scale_cs": $count = $obj->check(); break;
        }
        return $count;
    }

    function collect_CS(){
        $obj = new scale_CS;
        return $this->collect($obj);
    }

    function collect_DM(){
        $obj = new scale_DM;
        return $this->collect($obj);
    }

    function collect_IP(){
        $obj = new scale_IP;
        return $this->collect($obj);
    }

    function collect_IR(){
        $obj = new scale_IR;
        return $this->collect($obj);
    }

    function collect_SF(){
        $obj = new scale_SF;
        return $this->collect($obj);
    }

    private function collect($obj){
        $count = $obj->check();
        return $count;
    }

}

?>
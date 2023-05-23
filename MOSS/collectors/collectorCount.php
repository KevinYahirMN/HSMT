<?php
include_once('../scales/scale_CS.php');
include_once('../scales/scale_DM.php');
include_once('../scales/scale_IP.php');
include_once('../scales/scale_IR.php');
include_once('../scales/scale_SF.php');

class collectorCount{

    function collect_CS(){
        $obj = new scale_CS;
        $count = $obj->check();
        return $count;
    }

    function collect_DM(){
        $obj = new scale_DM;
        $count = $obj->check();
        return $count;
    }

    function collect_IP(){
        $obj = new scale_IP;
        $count = $obj->check();
        return $count;
    }

    function collect_IR(){
        $obj = new scale_IR;
        $count = $obj->check();
        return $count;
    }

    function collect_SF(){
        $obj = new scale_SF;
        $count = $obj->check();
        return $count;
    }

}

?>
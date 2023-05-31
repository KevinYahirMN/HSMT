<?php
include('Count/DAAcount.php');
include('Count/DVcount.php');
include('Count/SEScount.php');
include_once('../Interfaces/ICollector.php');

class CollectorCount implements ICollector{
    function DAA($answer = array()){
        $daa = new DAAcount;
        $c = $daa->collect($answer);
        return $c;
    }

    function DV($answer = array()){
        $dv = new DVcount;
        $c = $dv->collect($answer);
        return $c;
    }

    function SES($answer = array()){
        $ses = new SEScount;
        $c = $ses->collect($answer);
        return $c;
    }
}

?>
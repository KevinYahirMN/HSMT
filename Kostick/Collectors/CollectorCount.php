<?php
include('Count/DAAcount.php');
include('Count/DVcount.php');
include('Count/SEScount.php');

class CollectorCount{
    function DAA($answer){
        $daa = new DAAcount;
        $c = $daa->collect($answer);
        return $c;
    }

    function DV($answer){
        $dv = new DVcount;
        $c = $dv->collect($answer);
        return $c;
    }

    function SES($answer){
        $ses = new SEScount;
        $c = $ses->collect($answer);
        return $c;
    }
}

?>
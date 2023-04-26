<?php

class CollectorCount implements ICollector{
    function DAA($answer){
        $daa = new DAAcount;
        $c = $daa->collect($answer);
        return $c;
    }

    function DV($answer){
        $daa = new DVcount;
        $c = $daa->collect($answer);
        return $c;
    }

    function SES($answer){
        $daa = new SEScount;
        $c = $daa->collect($answer);
        return $c;
    }
}

?>
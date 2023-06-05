<?php
class maxScales{

    private $scalesPosition;
    private $scalesCount;

    function __construct($count = array())
    {
        $this->max($count);
    }

    function max($count = array()){
        $Max = 0;
        $sMax = 0;
        $tMax = 0;
        $cMax = 0;
        $scMax = 0;
        $tcMax = 0;
        $i = 3;
        while($i < count($count)){
            switch($i){
                case $count[$i] > $Max:
                    $tMax = $sMax;
                    $sMax = $Max;
                    $tcMax = $scMax;
                    $scMax = $cMax;
                    $Max = $count[$i];
                    $cMax = $i - 2;
                break;
                case $count[$i] > $sMax:
                    $tMax = $sMax;
                    $sMax = $count[$i];
                    $tcMax = $scMax;
                    $scMax = $i - 2;
                break;
                case $count[$i] > $tMax:
                    $tMax = $count[$i];
                    $tcMax = $i - 2;
                break;
            }
            $i++;
        }

        $this->scalesPosition = [
            0 => $cMax,
            1 => $scMax,
            2 => $tcMax
        ];

        $this->scalesCount = [
            0 => $Max,
            1 => $sMax,
            2 => $tMax
        ];

    }

    function maxPositions(){
        return $this->scalesPosition;
    }

    function maxCounts(){
        return $this->scalesCount;
    }
}
?>
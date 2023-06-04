<?php
include_once('threeScalesSelection.php');
class threeScaleSuggestions{

    private $tss;

    function __construct(){
        if($this->tss == null){
            $this->tss = new threeScaleSelection;
        }
    }
    
    function combination($scalesPosition = array(), $scalesCount = array()){

        $text = 'No se encontró patrón';
        $fMax = $scalesCount[0];
        $sMax = $scalesCount[1];
        $tMax = $scalesCount[2];
        $fcMax = $scalesPosition[0];
        $scMax = $scalesPosition[1];
        $tcMax = $scalesPosition[2];

        if($fMax > 69 && $sMax > 69 && $tMax > 69){
            $sum = $fcMax + $scMax;

            $text = '<b>'.$fcMax.$scMax.'/'.$scMax.$fcMax.'</b>'.'<br>'.$this->tss->select($sum, $fcMax, $scMax);
        }

        return $text;
    }
}
?>
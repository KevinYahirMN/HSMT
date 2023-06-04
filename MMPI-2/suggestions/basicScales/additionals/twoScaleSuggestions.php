<?php
include_once('twoScalesSelection.php');
class twoScaleSuggestions{

    private $tss;

    function __construct(){
        if($this->tss == null){
            $this->tss = new twoScaleSelection;
        }
    }
    
    function combination($scalesPosition = array(), $scalesCount = array()){

        $text = 'No se encontró patrón';
        $fMax = $scalesCount[0];
        $sMax = $scalesCount[1];
        $fcMax = $scalesPosition[0];
        $scMax = $scalesPosition[1];

        if($fMax > 69 && $sMax > 69){
            $sum = $fcMax + $scMax;

            $text = '<b>'.$fcMax.$scMax.'/'.$scMax.$fcMax.'</b>'.'<br>'.$this->tss->select($sum, $fcMax);
        }

        return $text;
    }
}
?>
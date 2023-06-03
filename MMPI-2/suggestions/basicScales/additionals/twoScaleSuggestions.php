<?php
class twoScaleSuggestions{
    function maxScale($scales = array()){
        $text = 'No se encontró patrón';
        if($fMax > 69 && $sMax > 69){
            $sum = $fcMax + $scMax;

            $text = '<b>'.$fcMax.$scMax.'/'.$scMax.$fcMax.'</b>'.'<br>'.$this->SuggestionMenu($sum, $fcMax);
        }

        return $text;
    }
}
?>
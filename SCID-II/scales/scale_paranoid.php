<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_paranoid implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[48]);
        $c += $scaleCount->calif_true($answer[49]);
        $c += $scaleCount->calif_true($answer[50]);
        $c += $scaleCount->calif_true($answer[51]);
        $c += $scaleCount->calif_true($answer[52]);
        $c += $scaleCount->calif_true($answer[53]);
        $c += $scaleCount->calif_true($answer[54]);
        $c += $scaleCount->calif_true($answer[55]);
        return $c;
    }
}
?>
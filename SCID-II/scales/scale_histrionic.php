<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_histrionic implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[69]);
        $c += $scaleCount->calif_true($answer[70]);
        $c += $scaleCount->calif_true($answer[71]);
        $c += $scaleCount->calif_true($answer[72]);
        $c += $scaleCount->calif_true($answer[73]);
        $c += $scaleCount->calif_true($answer[74]);
        $c += $scaleCount->calif_true($answer[75]);
        $c += $scaleCount->calif_true($answer[76]);
        $c += $scaleCount->calif_true($answer[77]);
        $c += $scaleCount->calif_true($answer[78]);
        return $c;
    }
}
?>
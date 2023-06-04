<?php

class suggestions_Dpr{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Los sujetos con puntuaciones bajas en Dpr, 
                tienden a ser bien adaptados, optimistas y consientes.";
            break;
            case $count > 64:
                $text = "Parecen estar un poco adaptadas, 
                además de ser generalmente ineficientes, 
                pesimistas y angustiados además pueden 
                desarrollar síntomas físicos durante periodos 
                de mayor estrés y sentir que la vida los abruma 
                la mayor parte del tiempo";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>
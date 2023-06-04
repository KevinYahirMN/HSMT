<?php

class suggestions_EPK{
    
    function suggestions($count){        
        switch($count){
            case $count > 64:
                $text = "Los veteranos de guerra y otras personas 
                que hayan experimentado un evento 
                catastrófico y que obtengan 
                puntuaciones altas en EPK, tienden a 
                presentar síntomas de trastorno por 
                estrés postraumático, que incluyen 
                angustia emocional intensa, así como 
                ansiedad y alteraciones del sueño, 
                sienten culpa y depresión pos sus 
                experiencias, presentan desordenes 
                emocionales y manifiestan tener 
                pensamientos intrusitos no deseados, 
                además sienten que han perdido el 
                control sobre sus emociones y 
                pensamientos, expresan sentimientos de 
                no ser comprendidos o considerados por 
                los demás, debido a las situaciones 
                estresantes que han vivido.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>
<?php

class suggestions_R{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Puede ser una persona emotiva, 
                desinhibida verbal, entusiasta, 
                atrevida y alegre. 
                También puede ser una persona 
                generosa, impulsiva, agresiva, 
                sarcástica, informal y 
                autoindulgente, puede ser astuta, 
                perspicaz, lista, sutil, engañosa y 
                mentirosa.
                Además son extrovertidas, 
                emotivas, espontáneas y su estilo 
                de vida es dominante en sus 
                relaciones interpersonales.
                Aparecen como enérgicas, 
                expresivas informales. La 
                interpretación de las puntuaciones 
                bajas es indicativa de un individuo 
                que es sociable, abierto, 
                parlanchín, arriesgado, atrevido, 
                vigoroso. 
                Además es mandón, le gusta 
                discutir, es egoísta, 
                autoindulgente, perspicaz, 
                precavido.";
            break;
            case $count < 64:
                $text = "Parece carecer de insight, es 
                sobrecontrolador e inhibido 
                socialmente, también se percibe a 
                sí mismos y son percibidos por los 
                demás como convencionales y 
                reservados en el sentido 
                emocional, amables y poco 
                espontáneos.
                Tiende a evitar los conflictos en 
                vez de tratarlos directamente 
                debido a que suele ser sumiso y 
                cauteloso. Otros lo ven como 
                demasiado conservador en su 
                conducta y acciones. Además se 
                caracteriza por mostrar su 
                pensamiento claro, ser lento en 
                sus acciones y muy meticuloso.
                La interpretación de puntuaciones 
                elevadas de la escala de represión 
                es indicativa de un individuo 
                formal, de ideas claras, cuidadoso.";
            break;
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>
<?php

class suggestions_FAM{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Los individuos con puntuaciones elevadas en 
                FAM, manifiestan desavenencias y pleitos desagradables y 
                poco afectuosos.
                Incluso quizá sientan odio por su familia.
                Recuerdan haber sufrido abusos en su infancia 
                y consideran sus matrimonios como infelices y faltos de afecto.
                Probablemente tengan historias de abuso físico.
                Los varones con puntajes altos fueron descritos por sus parejas 
                como desadaptados, hostiles y antisociales, en tanto que las 
                mujeres eran percibidas como desadaptadas, hostiles, 
                hiperactivas, antisociales y poco confiables o responsables.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
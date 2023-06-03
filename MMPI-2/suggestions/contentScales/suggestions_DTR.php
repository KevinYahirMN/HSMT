<?php

class suggestions_DTR{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Las puntuaciones elevadas en esta escala 
                indican conductas o actitudes que 
                provocan un desempeño laboral pobre.
                Algunos de los problemas de estas personas 
                se relacionan con poca confianza en sí mismos, 
                falta de concentración, obsesividad y tensión, así como 
                dificultad para tomar decisiones.
                Otros se refieren a falta de apoyo familiar en la 
                elección de su carrera, cuestionamientos personales 
                sobre esta elección, y actitudes negativas hacia compañeros de trabajo.
                Algunas de estas personas manifiestan ansiedad y preocupación 
                excesiva, otras refieren síntomas depresivos.
                Los rasgos más sobresalientes de sus parejas adjudicaron a
                las personas que obtenían calificaciones elevadas en DTR, 
                fueron desadaptación generalizada: los percibían como poco 
                amigables y cooperadores, además de distantes de los otros.
                En selección de personal, las personas con puntuaciones elevadas, 
                tienen dificultades de adaptación en el trabajo.
                Lo anterior ocurre aunque la escala no esté marcadamente 
                elevada, pero sí que sea el pico del perfil.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
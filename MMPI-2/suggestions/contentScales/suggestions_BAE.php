<?php

class suggestions_BAE{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Las personas con puntajes elevados 
                en esta escala tienen una opinión 
                muy pobre de ellas mismas. 
                Creen que no les agradan a los demás y 
                que no son importantes para otros. 
                Mantienen actitudes negativas hacia sí mismos, 
                incluyendo pensamientos como el no ser atractivos, 
                considerados torpes, incapaces e inútiles y percibirse 
                como una carga para los demás. 
                Tienen poca confianza en sí mismos y encuentran 
                difícil aceptar cumplidos de otros, se sienten abrumados 
                por los defectos que ven en su persona. 
                Se comportan en forma desfavorable con los demás 
                y tienden a ser pasivos en sus relaciones interpersonales.
                Los cónyuges de estos individuos los describen como 
                personas que se dan por vencidas con facilidad, 
                susceptibles al rechazo y con poca confianza en sí mismos. 
                Son personas que experimentan dificultad para tomar 
                decisiones, se preocupan demasiado y tienen miedo a muchas cosas.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
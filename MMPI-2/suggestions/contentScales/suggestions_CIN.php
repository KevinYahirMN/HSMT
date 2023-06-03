<?php

class suggestions_CIN{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'En personas con puntajes altos en esta 
                escala manifiestan ideas misantrópicas; 
                suponen motivaciones ocultas y negativas detrás 
                de las acciones de los demás, quizá crean, por 
                ejemplo, que la mayor parte de la gente es honesta 
                solo por miedo a ser descubierta. 
                Creen que los demás no son confiables, debido a 
                que se utilizan unos a otros y son amigables solo por razones egoístas.
                Posiblemente mantengan actitudes negativas hacia personas cercanas, 
                incluyendo compañeros de trabajo, familiares y amigos: 
                en general son poco amigables y no ayudan a los otros. 
                Algunas de estas personas tienen poca motivación de logro. 
                Si las puntuaciones son muy elevadas tal vez se observan ideas de tipo paranoide.
                En estudios realizados en delincuentes se encontró esta escala 
                elevada, siendo el grupo de homicidas el que presento las calificaciones más altas.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
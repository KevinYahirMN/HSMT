<?php

class suggestions_DEP{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Pensamientos depresivos significativos; además, 
                quizá involucran sentimientos de tristeza, incertidumbre 
                acerca del futuro y desinterés por la propia vida. 
                Los individuos que puntúan alto en DEP tienden a la cavilación, 
                manifiestan infelicidad, lloran fácilmente y expresan 
                sentimientos de desesperanza y vacío interior. 
                Quizá verbalicen ideas suicidas o deseos de morir; pueden 
                llegar a creer que están condenados o que han cometido pecados imperdonables. 
                Perciben a las demás personas como carentes de interés en ellos o incapaces
                de apoyarlos. 
                Mientas más alta es la puntuación más acentuadas las 
                características depresivas de la persona. 
                A los hombres con puntuaciones altas, se les consideraba 
                como faltos de energía y desinterés en las cosas. 
                Además de sensibles al rechazo, indecisos y poco 
                efectivos para enfrentar los retos cotidianos.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
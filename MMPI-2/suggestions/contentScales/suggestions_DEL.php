<?php

class suggestions_DEL{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Los pensamientos delirantes que se manifiestan 
                en las personas con puntuaciones elevadas son característicos 
                de proceso psicótico de pensamiento. 
                Quizá manifiesten alucinaciones auditivas, visuales u olfativas, 
                además de reconocer que los pensamientos propios son extraños y peculiares. 
                Implica también ideas paranoides. 
                Estas personas pueden creer que tienen una misión o poderes especiales. 
                En la población mexicana indica que esta elevación puede deberse a factores religiosos y místicos.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
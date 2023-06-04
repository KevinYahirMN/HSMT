<?php

class suggestions_RTR{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Manifiestan actitudes negativas hacia 
                los médicos y al tratamiento de salud mental.
                No creen que alguien pueda comprenderlos ni ayudarlos.
                Les resulta muy incómodo tratar con alguien más sus 
                asuntos o problemas personales.
                Quizá deseen que todo permanezca igual en su vida y 
                probablemente crean que un cambio es imposible.
                Prefieren pasar por alto una crisis o dificultad 
                que enfrentarla; con frecuencia reportan sintomas somáticos.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>
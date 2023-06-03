<?php

class suggestions_ANS{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Los adolescentes con puntuaciones altas 
                indican síntomas de ansiedad, incluyendo tensión 
                preocupaciones frecuentes, trastornos del sueño 
                (por ejemplo pesadillas, sueño intranquilo y dificultad para conciliar el sueño).
                Indican también confusión, problemas para 
                concentrarse e incapacidad para mantenerse ocupados en una tarea.
                Perciben que la vida es difícil para ellos y creen que sus dificultades son insuperables.
                Los adolescentes con calificaciones altas en esta escala se preocupan 
                porque consideran que pueden volverse locos y sienten 
                que un suceso terrible está a punto de ocurrir.
                Parecen darse cuenta de sus problemas y de que son diferentes a otros adolescentes.
                Posible existencia de relaciones conflictivas con los padres.
                El adolescente tiene conciencia de las preocupaciones, 
                generalmente acompañada de la sensación subjetiva de no poder superarlas.
                Esta escala parece evaluar la desadaptación general, como síntomas 
                específicos tales como la depresión y los problemas somáticos';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;          
        }
        return $text;
    }
}

?>
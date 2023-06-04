<?php

class suggestions_A{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Es indicativa de que el individuo no se 
                siente ansioso, con fluidez verbal, franca, 
                abierta amistosa, sociable, amable,
                informal, asume un papel preponderante 
                en la relación con los demás.
                Es persuasivo, exhibicionista y eficiente, 
                capaz de expresar ideas claras, versátil 
                ingeniosos, confiado en sí mismo, 
                competitivo con un alto valor del éxito y 
                logros intensado en el poder, la posición 
                y el reconocimiento.<br>
                Por otra parte manipula a las demás 
                persona, y es incapaz de demorar la 
                satisfacción de sus impulsos, 
                generalmente actúa antes de reflexionar, 
                sin considerar las consecuencias de sus 
                actos. Además los puntajes bajos 
                reflejan ausencia de angustia emocional. 
                Estas personas tienden a ser enérgicas, 
                competitivas y socialmente 
                extrovertidas.
                Pueden ser incapaces de tolerar la 
                frustración y usualmente prefieren la 
                acción a la reflexión.";
            break;
            case $count < 64:
                $text = "Son personas que se caracterizan por 
                sentirse ansiosas e incomodas, son 
                pesimistas y apáticas. 
                Generalmente se alejan de 
                personas que los rodean, debido a que 
                son temerosas y les falta confianza en 
                sus capacidades; tienden a ser 
                cautelosas, y dudan para tomar 
                decisiones, se dejan influir pos 
                sentimientos personales difusos, además 
                se inclinan a racionalizar acerca de sus 
                dificultades, y llegan a lastimar a otros.
                Son personas sumisas complacientes, 
                sugestionables y conformistas, por lo 
                que aceptan de manera abierta la 
                autoridad de otros.";
            break;
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>
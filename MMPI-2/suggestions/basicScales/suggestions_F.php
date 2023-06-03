<?php

class suggestions_F{
    
    function suggestions($count){        
        switch($count){
            case $count < 50:
                $text = 'Libre de tensión.
                Respuestas razonables.
                Conformismo y conformidad social.
                Convencionalismo.
                Probabilidad de fingir para proyectar 
                una imagen aceptable.
                Negación de dificultades personales.
                Descarte de psicopatología severa.';
            break;
            case $count < 66:
                $text = 'Respuesta hacia un área de 
                conflicto particular.
                Posibilidad de ser una persona neurótica.
                Adaptabiliad y buen funcionamiento en aspectos 
                divergidos a las áreas de conflicto.';
            break;
            case $count < 80:
                $text = 'Rigidez en convicciones morales,
                sociales y/o políticas.
                Trastorno neurótico o psicótico.
                Una vez descartado un trastorno psiquiátrico puede 
                tratarse de una persona oportunista, depresiva, 
                impaciente, insatisfecha, inestable y/o curiosa';
            break;
            case $count < 100:
                $text = 'Responder a todos los reactivos falso.
                Simulación o exageración de síntomas.
                Resistencia a la prueba.
                Falta de cooperación.
                Psicosis.';
            break;
            default:
                $text = 'Respuestas ejecutadas al azar o por 
                incapacidad para comprender la lectura. Puede 
                haber respondido verdadero o falso a todos los 
                reactivos.
                Simulación de enfermedad mental o exageración de 
                la misma.
                Paciente psiquiátrico seriamente perturbado.
                Inconformismo o resignación ante creencias y/o 
                costumbres políticas, sociales o religiosas.';
            break;
        }
        return $text;
    }
}

?>
<?php

class suggestions_D{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Actividad, entusiasmo, optimismo.
                Sin disturbios emocionales, ni problemas de 
                inhibición o retracción social.
                Probabilidad de bajo control de los impulsos.
                Intereses sociales.';
            break;
            case $count < 56:
                $text = 'Conformidad, comodidad y adaptación 
                antes las relaciones sociales.
                Estabilidad emocional, autoconfianza, bajos 
                niveles de depresión y sentimientos de culpa.
                Relajación, comodidad, felicidad, energía y
                competividad.
                Energía elevada para afrontar los problemas 
                y encontrarles solución.
                Actitud realista.';
            break;
            case $count < 66:
                $text = 'Probabilidad de inhibición, 
                irritabilidad y timidez.
                Sentimientos relativamente crónicos de tristeza, 
                infelicidad, insatisfacción consigo mismo y con 
                los demás.
                Preocupación, pesimismo leve.
                Actitud responsable.
                Modestia.';
            break;
            case $count < 76:
                $text = 'Tendencia al aislamiento, timidez, 
                actitud vergonzante.
                Nivel energético disminuido, dificultades de 
                concentración.
                Quejas somáticas, trastornos del sueño.
                Baja autoestima, sentimientos de inadecuación.
                Presencia de aflicción, disforia y pesimismo.';
            break;
            default:
                $text = 'Ensimismamiento, introversión.
                Desesperanza, sentimientos de culpabilidad.
                Autopercepción de inadecuación.
                Preocupación acerca de la muerte; probabilidad 
                de ideación suicida.
                Apatía, abatimiento, enlentecimiento psicomotor.';
            break;
        }
        return $text;
    }
}

?>
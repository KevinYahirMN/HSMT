<?php

class suggestions_Ma{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Actitud pesimista y apática.
                Frecuente aparición de fatiga.
                Depresión.
                Falta de energía.
                Timidez, dependencia.
                Poca autoconfianza.
                Humildad, modestia.
                Indiferencia y poco afán antes cosas o 
                situaciones que se presentan.
                Sentimientos depresivos.';
            break;
            case $count < 56:
                $text = 'Sociabilidad, amigabilidad.
                Actitud responsable, realista.
                Entusiasmo.
                Equilibrio';
            break;
            case $count < 66:
                $text = 'Gregario.
                Poca tolerancia al tedio.
                Amplia gama de intereses.
                Contracción al trabajo, efectividad.
                Orientación al logro.
                Actitud emprendedora.';
            break;
            case $count < 76:
                $text = 'Euforia.
                Actividad excesiva.
                Locuacidad.
                Inquietud, impaciencia, labilidad.
                Relaciones superficiales.';
            break;
            default:
                $text = 'Expansividad, grandiosidad.
                Personas activas y enérgicas.
                Pobre control impulsivo.
                Hiperactividad, excitación, distractibilidad, 
                irritabilidad, hostilidad injustificada e 
                irracional, agitación, rapidez psicomotora, 
                poca tolerancia a la frustración.
                Toma de decisiones impulsiva.
                Confusión.';
            break;
        }
        return $text;
    }
}

?>
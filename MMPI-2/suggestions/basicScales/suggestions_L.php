<?php

class suggestions_L{
    
    function suggestions($count){        
        switch($count){
            case $count < 50:
                $text = 'Presenta sinceridad, autocrítica, 
                confianza.
                Capacidad de liderazgo, seguridad, 
                independencia, espontaniedad, autonomia.
                Sarcástico, irónico, cínico.';
            break;
            case $count < 70:
                $text = 'Conforme con la imagen del sí.
                Conformismo social.
                Moralismo y rigidez.';
            break;
            default:
                $text = 'Estado confuncional.
                Escasa capacidad introspectiva.
                Resistencia a la evaluacion.
                Moralismo y rigidez excesivo.
                Estilo represivo.
                Baja tolerancia a la frustración, 
                estrés, presiones ciscunstanciales.
                Ingenuidad y falta de perspicacia.';
            break;
        }
        return $text;
    }
}

?>
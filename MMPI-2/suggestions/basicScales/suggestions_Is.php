<?php

class suggestions_Is{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Calidez.
                Sociabilidad, actitud agregaria, 
                carismáticos.
                Autoconfianza y asertividad.
                Autoindulgencia.
                Exhibicionismo, iniciativa, 
                manipulador, oportunista, inmaduro.';
            break;
            case $count < 56:
                $text = 'Actividad, energía.
                Actitud amistosa.
                Locuacidad.';
            break;
            case $count < 66:
                $text = 'Reserva, seriedad, cautela.
                Sobrecontrol de los impulsos.
                Apocada habilidad social.';
            break;
            case $count < 76:
                $text = 'Introversión.
                Depresión.
                Actitud vergonzante, timidez.
                Falta de autoconfianza.
                Actitud taciturna, irritabilidad.
                Rigidez en sus convicciones, 
                sumisión, obediencia.';
            break;
            default:
                $text = 'Ensimismamiento, actitud distante.
                Desconfianza, inseguridad, indecisión.
                Austeridad, recato.
                Rumiación.';
            break;
        }
        return $text;
    }
}

?>
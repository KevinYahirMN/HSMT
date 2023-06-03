<?php

class suggestions_Pa{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Pacientes no psiquiátricos:
                Tendencia al equilibrio y al ánimo 
                placentero.
                Sujetos ordenados, razonables, maduros en sus 
                relaciones, prudentes.
                Lealtad, confianza.
                Reservado, convencional, autocontrol.
                Interesado en actividades sociales.
                Adaptación a situaciones cotidianas.
                Ordenados, sensatos, organizados y cautelosos.
                Pacientes clínicos:
                Prudente, evasivo, reservado, 
                desconfiado, obstinado, testarudo.
                Falta de interés.
                Insatisfacción, sensible, egocéntrico, 
                convicciones rígidas, poco exitoso.
                Torpe, descortés, rudo.
                Susceptible.
                Poca capacidad de insight.
                Probabilidad de rasgos paranoides.';
            break;
            case $count < 56:
                $text = 'Racionalidad.
                Pensamiento claro.
                Cautela.
                Flexibilidad.';
            break;
            case $count < 66:
                $text = 'Sensibilidad al rechazo y a los 
                desaires.
                Notorio interés por las opiniones ajenas.
                Sujetos enérgicos, trabajadores, creativos, 
                inteligentes, colaboradores.
                Falta de autoconfianza.
                Nerviosismo y preocupación.
                Desconfianza. Cautela y defensa en el inicio 
                de los contactos sociales.
                Contracción al trabajo.';
            break;
            case $count < 76:
                $text = 'Ira, resentimiento, sensibilidad, 
                desconfianza, suceptibilidad.
                Tendencias paranoides.
                Desplazamiento de la culpa, actitud crítica.
                Hostilidad, suspicacia.
                Moralidad, rigidez en convicciones, 
                obstinación.
                Tendencia a racionalizar y/o negar conflictos 
                emocionales.
                Tendencia a malinterpretar situaciones sociales.';
            break;
            default:
                $text = 'Probabilidad de desorden del 
                pensamiento.
                Sintomas psicóticos.
                Proyección como mecanismo de defensa.
                Pensamientos perturbados, delirios de 
                grandenza.                
                Creencias erróneas.
                Ideas de referencia.
                Disposición vengativa, hostilidad, rencor y 
                amargura.
                Cavilación excesiva.
                Probabilidad de actuación en función del 
                delirio.';
            break;
        }
        return $text;
    }
}

?>
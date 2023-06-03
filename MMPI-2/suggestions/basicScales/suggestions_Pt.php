<?php

class suggestions_Pt{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Autoconfianza, metas e intereses 
                variados.
                Libre de inseguridad.
                Ausencia de temores desadaptativos.
                Actitud relajada y de bienestar.
                Persistencia y eficiencia.';
            break;
            case $count < 56:
                $text = 'Actitud confiable.
                Equilibrio, adaptabilidad, capaces, eficientes 
                sin preocupaciones innecesarias.
                Organización, puntualidad.';
            break;
            case $count < 66:
                $text = 'Conciencia y responsabilidad acerca 
                del propio accionar.
                Tendencia a intelectualizar.
                Contracción al trabajo.
                Organización, orden, tendencia al 
                perfeccionismo.
                Actitud autocrítica.
                Capacidad introspectiva.';
            break;
            case $count < 76:
                $text = 'Inseguridad, ansiedad, tensión.
                Preocupación, actitud aprensiva, nerviosismo, 
                agitación, angustia.
                Temor a cometer equivocaciones y errores.\n
                Minuciosidad, indecisión.
                Labilidad de intereses
                Moralismo';
            break;
            default:
                $text = 'Cavilación, rumiación permanente de 
                problemas y sus posibles soluciones.
                Agitación psicomotora.
                Sentimientos de culpa, ansiedad, miedo 
                irracional, temores.
                Probabilidad de conductas rituales.\n
                Supersticiones, rigidez en convicciones 
                religiosas o morales.
                Sentimientos de culpa.
                Expresiones de depresión.';
            break;
        }
        return $text;
    }
}

?>